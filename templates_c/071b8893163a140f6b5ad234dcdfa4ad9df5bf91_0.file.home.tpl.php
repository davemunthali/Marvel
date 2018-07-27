<?php /* Smarty version 3.1.27, created on 2018-03-03 00:57:35
         compiled from "C:\wamp64\www\mymvc\templates\home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12890070865a99f2ff654e04_60536970%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '071b8893163a140f6b5ad234dcdfa4ad9df5bf91' => 
    array (
      0 => 'C:\\wamp64\\www\\mymvc\\templates\\home.tpl',
      1 => 1520038651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12890070865a99f2ff654e04_60536970',
  'variables' => 
  array (
    'date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a99f2ff6d8351_36227030',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a99f2ff6d8351_36227030')) {
function content_5a99f2ff6d8351_36227030 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12890070865a99f2ff654e04_60536970';
?>

  <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Home"), 0);
?>

   <body>
  <?php echo $_smarty_tpl->getSubTemplate ("navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  
    <div class="row">
      <div class="container">
        <div class="jumbotron">
            <div class="alert alert-success">
                <strong>Success!</strong> Indicates a successful or positive action.
            </div>
          <h4>Marvel framework, <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</h4>
        </div>
      </div>
    </div><!-- /.row -->
  <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>