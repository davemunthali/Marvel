<?php /* Smarty version 3.1.27, created on 2018-07-03 01:00:06
         compiled from "C:\wamp64\www\Marvel\templates\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:891575065b3aca960a5c68_15713249%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06fbea4336c731a452119486e4d35e66a71d8e55' => 
    array (
      0 => 'C:\\wamp64\\www\\Marvel\\templates\\home.tpl',
      1 => 1520428948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '891575065b3aca960a5c68_15713249',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b3aca96120133_61157021',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b3aca96120133_61157021')) {
function content_5b3aca96120133_61157021 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp64\\www\\Marvel\\libs\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '891575065b3aca960a5c68_15713249';
?>

  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Home"), 0);
?>

   <body>
  <?php echo $_smarty_tpl->getSubTemplate ("navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  
    <div class="row">
      <div class="container">
        <div class="jumbotron">
          <h3>Marvel framework 1.0.0, <?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
</h3>
          powered by smarty <?php echo '3.1.27';?>

        </div>
      </div>
    </div><!-- /.row -->
  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>