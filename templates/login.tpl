
{include file="header.tpl"}
 <body>
{include file="navigation.tpl"}
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" style="margin-top: 90px;">
      <div class="login-panel panel panel-default">
        <div class="panel-heading marvel_header">Enter login details</div>
        <div class="panel-body">
          <form role="form" method="post" action="http://localhost/Marvel/Account/Login">
            <fieldset>
            
              <div class="form-group 
              {if isset($errors.username)} has-error has-feedback {/if}">
                <input class="form-control" name="username" type="text" value="" autofocus="" placeholder="username">
                {if isset($errors.username)}
                   <span style="color:red">{$errors.username}</span> 
                {/if}
              </div>

              <div class="form-group {if isset($errors.password)}has-error has-feedback {/if}">
                <input class="form-control" name="password" type="password" value="" placeholder="password">
                {if isset($errors.password)}
                   <span style="color:red">{$errors.password}</span> 
                {/if}
                {if isset($loginFailed)}
                   <span style="color:red">{$loginFailed}</span> 
                {/if}
                
              </div>
            </br>
              <button type="submit" class="btn btn-primary" name="login_btn">Login</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->
{include file="footer.tpl"}
