<?php /* Smarty version 3.1.27, created on 2016-11-23 11:32:14
         compiled from "D:\OpenServer\domains\svladimir\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:254335835540ea72fe0_77950819%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a486f9d68b70ea6d6e8ad45871534b57115269e3' => 
    array (
      0 => 'D:\\OpenServer\\domains\\svladimir\\manager\\templates\\default\\welcome.tpl',
      1 => 1469078022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254335835540ea72fe0_77950819',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5835540ea812d6_21261012',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5835540ea812d6_21261012')) {
function content_5835540ea812d6_21261012 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '254335835540ea72fe0_77950819';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>