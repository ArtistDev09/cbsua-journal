<?php
/* Smarty version 4.3.1, created on 2026-07-27 15:38:17
  from 'app:frontendcomponentsnavigationMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a675f490a35f3_01443908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc18a7bbca2985eb7be7cdb004989925d5981ed' => 
    array (
      0 => 'app:frontendcomponentsnavigationMenu.tpl',
      1 => 1760931566,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:legacy/navigationMenu_3.1.1.tpl' => 1,
    'app:legacy/navigationMenu_3.1.2.tpl' => 1,
  ),
),false)) {
function content_6a675f490a35f3_01443908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('smarty_version', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'substr' ][ 0 ], array( Smarty::SMARTY_VERSION,0,1 )));?>

	<?php if ($_smarty_tpl->tpl_vars['smarty_version']->value == '2') {?> 
		<?php $_smarty_tpl->_subTemplateRender("app:legacy/navigationMenu_3.1.1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender("app:legacy/navigationMenu_3.1.2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>
	<?php }
}
