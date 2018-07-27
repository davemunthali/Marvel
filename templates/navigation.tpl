<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/Marvel/Home/Index">Marvel</a>
          </div>
            <ul class="nav navbar-nav">
          <li {if $active=='home'} class="active"{else}{/if}><a href="http://localhost/Marvel/Home/Index">Home</a></li>
          <li {if $active=='about'} class="active"{else}{/if}><a href="http://localhost/Marvel/Home/About">About</a></li>
          <li {if $active=='contact'} class="active"{else}{/if}><a href="http://localhost/Marvel/Home/Contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
      {if isset($smarty.session.id)}
          <li><a href="http://localhost/Marvel/Account/Logout">Logout {$smarty.session.email}</a></li>
      {else}
            <li {if $active=='register'} class="active"{else}{/if}><a href="http://localhost/Marvel/Account/Register">Register</a></li>
            <li {if $active=='login'} class="active"{else}{/if}><a href="http://localhost/Marvel/Account/Login">Login</a></li>
      {/if}


    </ul>
          <div id="navbar" class="navbar-collapse collapse">
          </div><!--/.nav-collapse -->
        </div>
      </nav>
