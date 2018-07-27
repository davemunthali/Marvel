<?php /* Smarty version 3.1.27, created on 2018-03-06 03:10:15
         compiled from "C:\wamp64\www\mymvc\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10672792595a9e0697030da5_17153976%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68722316c76b15ae5edaea4961b287920a927b62' => 
    array (
      0 => 'C:\\wamp64\\www\\mymvc\\templates\\login.tpl',
      1 => 1520305808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10672792595a9e0697030da5_17153976',
  'variables' => 
  array (
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a9e06971bf4e7_03520691',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9e06971bf4e7_03520691')) {
function content_5a9e06971bf4e7_03520691 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10672792595a9e0697030da5_17153976';
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
          <form role="form" method="post" action="http://localhost/mymvc/Account/Login">
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