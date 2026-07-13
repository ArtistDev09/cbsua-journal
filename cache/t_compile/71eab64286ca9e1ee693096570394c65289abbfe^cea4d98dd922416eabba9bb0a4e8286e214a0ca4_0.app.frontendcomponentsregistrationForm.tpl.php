<?php
/* Smarty version 4.3.1, created on 2026-07-13 07:09:24
  from 'app:frontendcomponentsregistrationForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5473048aec64_58294374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea4d98dd922416eabba9bb0a4e8286e214a0ca4' => 
    array (
      0 => 'app:frontendcomponentsregistrationForm.tpl',
      1 => 1783088489,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:legacy/registrationForm_3.1.1.tpl' => 1,
    'app:legacy/registrationForm_3.1.2.tpl' => 1,
  ),
),false)) {
function content_6a5473048aec64_58294374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('smarty_version', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'substr' ][ 0 ], array( Smarty::SMARTY_VERSION,0,1 )));?>

<div class="divider"></div>
<h1 class="registration-form-sections__title">Registration Form</h1>
<div class="divider"></div>
<div class="registration-form-sections">

	<?php if ($_smarty_tpl->tpl_vars['smarty_version']->value == '2') {?> 
		<?php $_smarty_tpl->_subTemplateRender("app:legacy/registrationForm_3.1.1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender("app:legacy/registrationForm_3.1.2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>
</div>
<?php }
}
