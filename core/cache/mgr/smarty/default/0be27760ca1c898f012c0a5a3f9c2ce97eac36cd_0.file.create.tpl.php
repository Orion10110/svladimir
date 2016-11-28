<?php /* Smarty version 3.1.27, created on 2016-11-23 14:20:40
         compiled from "D:\OpenServer\domains\svladimir\manager\templates\default\resource\staticresource\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2607958357b88d026c5_31804799%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0be27760ca1c898f012c0a5a3f9c2ce97eac36cd' => 
    array (
      0 => 'D:\\OpenServer\\domains\\svladimir\\manager\\templates\\default\\resource\\staticresource\\create.tpl',
      1 => 1469078022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2607958357b88d026c5_31804799',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58357b88e7b7d1_48057601',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58357b88e7b7d1_48057601')) {
function content_58357b88e7b7d1_48057601 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2607958357b88d026c5_31804799';
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>