<?php /* Smarty version 3.1.27, created on 2018-02-28 05:40:13
         compiled from "C:\wamp64\www\mymvc\templates\contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14690373795a9640bd269f91_59956363%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc9b318a4ec3f014a24410a09f7e5bdf1f187f12' => 
    array (
      0 => 'C:\\wamp64\\www\\mymvc\\templates\\contact.tpl',
      1 => 1519763399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14690373795a9640bd269f91_59956363',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a9640bd99a0b3_58853306',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a9640bd99a0b3_58853306')) {
function content_5a9640bd99a0b3_58853306 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14690373795a9640bd269f91_59956363';
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