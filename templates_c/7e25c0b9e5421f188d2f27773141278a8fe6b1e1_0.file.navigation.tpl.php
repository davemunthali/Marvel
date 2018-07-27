<?php /* Smarty version 3.1.27, created on 2018-07-25 13:45:41
         compiled from "C:\wamp64\www\Marvel\templates\navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7838818985b587f051b91d6_70802516%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e25c0b9e5421f188d2f27773141278a8fe6b1e1' => 
    array (
      0 => 'C:\\wamp64\\www\\Marvel\\templates\\navigation.tpl',
      1 => 1532526317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7838818985b587f051b91d6_70802516',
  'variables' => 
  array (
    'active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b587f0597f940_06938054',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b587f0597f940_06938054')) {
function content_5b587f0597f940_06938054 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7838818985b587f051b91d6_70802516';
?>
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
          <li <?php if ($_smarty_tpl->tpl_vars['active']->value == 'home') {?> class="active"<?php } else {
}?>><a href="http://localhost/Marvel/Home/Index">Home</a></li>
          <li <?php if ($_smarty_tpl->tpl_vars['active']->value == 'about') {?> class="active"<?php } else {
}?>><a href="http://localhost/Marvel/Home/About">About</a></li>
          <li <?php if ($_smarty_tpl->tpl_vars['active']->value == 'contact') {?> class="active"<?php } else {
}?>><a href="http://localhost/Marvel/Home/Contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
      <?php if (isset($_SESSION['id'])) {?>
          <li><a href="http://localhost/Marvel/Account/Logout">Logout <?php echo $_SESSION['email'];?>
</a></li>
      <?php } else { ?>
            <li <?php if ($_smarty_tpl->tpl_vars['active']->value == 'register') {?> class="active"<?php } else {
}?>><a href="http://localhost/Marvel/Account/Register">Register</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['active']->value == 'login') {?> class="active"<?php } else {
}?>><a href="http://localhost/Marvel/Account/Login">Login</a></li>
      <?php }?>


    </ul>
          <div id="navbar" class="navbar-collapse collapse">
          </div><!--/.nav-collapse -->
        </div>
      </nav>
<?php }
}
?>