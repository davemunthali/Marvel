<?php /* Smarty version 3.1.27, created on 2018-07-03 01:00:16
         compiled from "C:\wamp64\www\Marvel\templates\about.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10498178295b3acaa0ecdcd2_85857613%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a01ae380c01da008533ac6468229f40a72fe41d2' => 
    array (
      0 => 'C:\\wamp64\\www\\Marvel\\templates\\about.tpl',
      1 => 1519798214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10498178295b3acaa0ecdcd2_85857613',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b3acaa0f3d4c3_46806359',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b3acaa0f3d4c3_46806359')) {
function content_5b3acaa0f3d4c3_46806359 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10498178295b3acaa0ecdcd2_85857613';
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