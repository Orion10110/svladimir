<?php /* Smarty version 3.1.27, created on 2016-11-17 15:36:52
         compiled from "D:\OpenServer\domains\svladimir\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28466582da4647fcc07_88241709%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '121f3982f91c126e64ab6ca339b73a3bbd25a387' => 
    array (
      0 => 'D:\\OpenServer\\domains\\svladimir\\setup\\templates\\footer.tpl',
      1 => 1469078022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28466582da4647fcc07_88241709',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_582da46480c416_71260545',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582da46480c416_71260545')) {
function content_582da46480c416_71260545 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'D:/OpenServer/domains/svladimir/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '28466582da4647fcc07_88241709';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>