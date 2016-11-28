<?php /* Smarty version 3.1.27, created on 2016-11-23 13:13:52
         compiled from "D:\OpenServer\domains\svladimir\manager\templates\default\element\tv\renders\input\richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1327758356be06427b6_83004430%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd055af3401298cc6fa4c6ea0b44ad9ff7ed328d4' => 
    array (
      0 => 'D:\\OpenServer\\domains\\svladimir\\manager\\templates\\default\\element\\tv\\renders\\input\\richtext.tpl',
      1 => 1469078020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1327758356be06427b6_83004430',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58356be070ddc5_14266737',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58356be070ddc5_14266737')) {
function content_58356be070ddc5_14266737 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1327758356be06427b6_83004430';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>