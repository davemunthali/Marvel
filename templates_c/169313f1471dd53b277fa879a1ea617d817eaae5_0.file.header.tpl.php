<?php /* Smarty version 3.1.27, created on 2018-03-03 00:52:56
         compiled from "C:\wamp64\www\mymvc\templates\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19944454035a99f1e8f33395_76265443%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '169313f1471dd53b277fa879a1ea617d817eaae5' => 
    array (
      0 => 'C:\\wamp64\\www\\mymvc\\templates\\header.tpl',
      1 => 1520038334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19944454035a99f1e8f33395_76265443',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a99f1e906e563_65864035',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a99f1e906e563_65864035')) {
function content_5a99f1e906e563_65864035 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19944454035a99f1e8f33395_76265443';
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Marvel | <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="http://localhost/mymvc/templates/assets/bootstrap/css/bootstrap.css">
 <link rel="stylesheet" type="text/css" href="http://localhost/mymvc/templates/assets/customcss/marvel.css">
 </head>
<?php }
}
?>