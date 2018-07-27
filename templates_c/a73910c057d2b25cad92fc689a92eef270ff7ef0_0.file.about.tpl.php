<?php /* Smarty version 3.1.27, created on 2018-02-27 20:10:17
         compiled from "C:\wamp64\www\mymvc\templates\about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11288832905a95bb296b52d3_54226327%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a73910c057d2b25cad92fc689a92eef270ff7ef0' => 
    array (
      0 => 'C:\\wamp64\\www\\mymvc\\templates\\about.tpl',
      1 => 1519762214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11288832905a95bb296b52d3_54226327',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a95bb2976f777_93007148',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a95bb2976f777_93007148')) {
function content_5a95bb2976f777_93007148 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11288832905a95bb296b52d3_54226327';
?>

  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

   <body>
  <?php echo $_smarty_tpl->getSubTemplate ("navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <div class="row">
      <div class="container">
        <div class="jumbotron">
          <h4>About page</h4>
        </div>
      </div>
    </div><!-- /.row -->
  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php }
}
?>