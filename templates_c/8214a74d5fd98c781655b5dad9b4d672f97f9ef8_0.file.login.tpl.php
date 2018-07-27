<?php /* Smarty version 3.1.27, created on 2018-07-03 01:00:35
         compiled from "C:\wamp64\www\Marvel\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1909917875b3acab35ed7b4_71780278%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8214a74d5fd98c781655b5dad9b4d672f97f9ef8' => 
    array (
      0 => 'C:\\wamp64\\www\\Marvel\\templates\\login.tpl',
      1 => 1520428862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1909917875b3acab35ed7b4_71780278',
  'variables' => 
  array (
    'errors' => 0,
    'loginFailed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b3acab36a9576_30395219',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b3acab36a9576_30395219')) {
function content_5b3acab36a9576_30395219 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1909917875b3acab35ed7b4_71780278';
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

 <body>
<?php echo $_smarty_tpl->getSubTemplate ("navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" style="margin-top: 90px;">
      <div class="login-panel panel panel-default">
        <div class="panel-heading marvel_header">Enter login details</div>
        <div class="panel-body">
          <form role="form" method="post" action="http://localhost/Marvel/Account/Login">
            <fieldset>
            
              <div class="form-group 
              <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['username'])) {?> has-error has-feedback <?php }?>">
                <input class="form-control" name="username" type="text" value="" autofocus="" placeholder="username">
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['username'])) {?>
                   <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['errors']->value['username'];?>
</span> 
                <?php }?>
              </div>

              <div class="form-group <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['password'])) {?>has-error has-feedback <?php }?>">
                <input class="form-control" name="password" type="password" value="" placeholder="password">
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['password'])) {?>
                   <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['errors']->value['password'];?>
</span> 
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['loginFailed']->value)) {?>
                   <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['loginFailed']->value;?>
</span> 
                <?php }?>
                
              </div>
            </br>
              <button type="submit" class="btn btn-primary" name="login_btn">Login</button>
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