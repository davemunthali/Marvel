<?php /* Smarty version 3.1.27, created on 2018-02-27 03:15:18
         compiled from "C:\wamp64\www\mymvc\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2490880365a94cd46db5f01_90935903%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6d705170189a146b62ac1ac1c2215f4c6849f8f' => 
    array (
      0 => 'C:\\wamp64\\www\\mymvc\\templates\\index.tpl',
      1 => 1514297413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2490880365a94cd46db5f01_90935903',
  'variables' => 
  array (
    'errorUser' => 0,
    'errorPass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a94cd46e3cd69_04252691',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a94cd46e3cd69_04252691')) {
function content_5a94cd46e3cd69_04252691 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2490880365a94cd46db5f01_90935903';
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

 <body>
   <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">LytWet</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" style="margin-top: 90px;">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Enter login details</div>
        <div class="panel-body">
          <form role="form" method="post" action="authenticate/login">
            <fieldset>
            
              <div class="form-group 
              <?php if (isset($_smarty_tpl->tpl_vars['errorUser']->value)) {?>
                has-success has-feedback
              <?php }?>">
                <input class="form-control" name="username" type="text" value="" autofocus="" placeholder="username">
              </div>

              <div class="form-group
              <?php if (isset($_smarty_tpl->tpl_vars['errorPass']->value)) {?>
                has-error has-feedback


              <?php }?>">
                <input class="form-control" name="password" type="password" value="" placeholder="password">
              </div>
            </br>
              <button type="submit" class="btn btn-primary" name="login">Login</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>