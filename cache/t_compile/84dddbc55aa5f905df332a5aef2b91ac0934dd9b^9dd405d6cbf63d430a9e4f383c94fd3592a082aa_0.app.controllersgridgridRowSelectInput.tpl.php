<?php
/* Smarty version 4.3.1, created on 2026-07-07 05:56:28
  from 'app:controllersgridgridRowSelectInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a4c78ec747d69_49576394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dd405d6cbf63d430a9e4f383c94fd3592a082aa' => 
    array (
      0 => 'app:controllersgridgridRowSelectInput.tpl',
      1 => 1783307629,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4c78ec747d69_49576394 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="checkbox" id="select-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['elementId']->value ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectName']->value ));?>
[]" style="height: 15px; width: 15px;" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['elementId']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['selected']->value) {?>checked="checked"<?php }?> />
<?php }
}
