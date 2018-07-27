<?php /* Smarty version 3.1.27, created on 2018-03-06 04:42:56
         compiled from "C:\wamp64\www\mymvc\templates\navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13421009365a9e1c50c55e95_03759810%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f72af4f82e2e812d39cfa77fa1390c30cec0a520' => 
    array (
      0 => 'C:\\wamp64\\www\\mymvc\\templates\\navigation.tpl',
      1 => 1520311373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13421009365a9e1c50c55e95_03759810',
  'variables' => 
  array (
    'active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a9e1c50ce0545_16587311',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9e1c50ce0545_16587311')) {
function content_5a9e1c50ce0545_16587311 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13421009365a9e1c50c55e95_03759810';
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
            <a class="navbar-brand" href="http://localhost/mymvc/Home/Index">Marvel</a>
          </div>
            <ul class="nav navbar-nav">
          <li <?php if ($_smarty_tpl->tpl_vars['active']->value == 'home') {?> class="active"<?php } else {
}?>><a href="http://localhost/mymvc/Home/Index">Home</a></li>
          <li <?php if ($_smarty_tpl->tpl_vars['active']->value == 'about') {?> class="active"<?php } else {
}?>><a href="http://localhost/mymvc/Home/About">About</a></li>
          <li <?php if ($_smarty_tpl->tpl_vars['active']->value == 'contact') {?> class="active"<?php } else {
}?>><a href="http://localhost/mymvc/Home/Contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
      <?php if (isset('3.1.27')) {?>
          <li><a href="http://localhost/mymvc/Account/Logout">Logout</a></li>
      <?php } else { ?>
          <li <?php if ($_smarty_tpl->tpl_vars['active']->value == 'register') {?> class="active"<?php } else {
}?>><a href="http://localhost/mymvc/Account/Register">Register</a></li>
          <li <?php if ($_smarty_tpl->tpl_vars['active']->value == 'login') {?> class="active"<?php } else {
}?>><a href="http://localhost/mymvc/Account/Login">Login</a></li>
      <?php }?>
      
      
    </ul>
          <div id="navbar" class="navbar-collapse collapse">
          </div><!--/.nav-collapse -->
        </div>
      </nav><?php }
}
?>