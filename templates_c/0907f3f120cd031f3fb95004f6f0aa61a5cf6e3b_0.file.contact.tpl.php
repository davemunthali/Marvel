<?php /* Smarty version 3.1.27, created on 2018-07-03 01:00:17
         compiled from "C:\wamp64\www\Marvel\templates\contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16979940415b3acaa1d5ddd2_71612971%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0907f3f120cd031f3fb95004f6f0aa61a5cf6e3b' => 
    array (
      0 => 'C:\\wamp64\\www\\Marvel\\templates\\contact.tpl',
      1 => 1519799399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16979940415b3acaa1d5ddd2_71612971',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b3acaa1db34e1_37660719',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b3acaa1db34e1_37660719')) {
function content_5b3acaa1db34e1_37660719 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16979940415b3acaa1d5ddd2_71612971';
?>
  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   <body>
  <?php echo $_smarty_tpl->getSubTemplate ("navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="row">
      <div class="container">
        <div class="jumbotron">
          <h4>Contact page</h4>
        </div>
      </div>
    </div><!-- /.row -->
  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>