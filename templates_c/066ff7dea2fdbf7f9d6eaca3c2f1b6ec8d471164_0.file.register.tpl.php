<?php /* Smarty version 3.1.27, created on 2018-07-03 01:00:32
         compiled from "C:\wamp64\www\Marvel\templates\register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8950338045b3acab0b9cc16_32125882%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '066ff7dea2fdbf7f9d6eaca3c2f1b6ec8d471164' => 
    array (
      0 => 'C:\\wamp64\\www\\Marvel\\templates\\register.tpl',
      1 => 1520350115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8950338045b3acab0b9cc16_32125882',
  'variables' => 
  array (
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b3acab0c5df49_73913355',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b3acab0c5df49_73913355')) {
function content_5b3acab0c5df49_73913355 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8950338045b3acab0b9cc16_32125882';
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

 <body>
<?php echo $_smarty_tpl->getSubTemplate ("navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4" style="margin-top: 90px;">
      <div class="login-panel panel panel-default">
        <div class="panel-heading marvel_header"><strong>Create Your Account</strong></div>
        <div class="panel-body">
          <form role="form" method="post" action="http://localhost/Marvel/Account/Register">
            <fieldset>
            
              <div class="form-group 
              <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['username'])) {?> has-error has-feedback <?php }?>">
                <input class="form-control" name="username" type="text" value="" autofocus="" placeholder="username">
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['username'])) {?>
                   <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['errors']->value['username'];?>
</span> 
                <?php }?>
                
              </div>

              <div class="form-group
              <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['email'])) {?> has-error has-feedback <?php }?>">
                <input class="form-control" name="email" type="text" value="" placeholder="email">
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['email'])) {?>
                   <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['errors']->value['email'];?>
</span> 
                <?php }?>
              </div>
              <!-- password -->
              <div class="form-group
              <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['password'])) {?> has-error has-feedback <?php }?>">
                <input class="form-control" name="password" type="password" value="" placeholder="password">
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['password'])) {?>
                   <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['errors']->value['password'];?>
</span> 
                <?php }?>
              </div>
              <!-- repeat password -->
              <div class="form-group
              <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['repeat_password'])) {?> has-error has-feedback <?php }?>">
                <input class="form-control" name="repeat_password" type="password" value="" placeholder="repeat password">
                <?php if (isset($_smarty_tpl->tpl_vars['errors']->value['repeat_password'])) {?>
                   <span style="color:red"><?php echo $_smarty_tpl->tpl_vars['errors']->value['repeat_password'];?>
</span> 
                <?php }?>
              </div>
            </br>
              <button type="submit" class="btn btn-primary" name="register_btn">Register</button>
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