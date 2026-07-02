<?php
/* Smarty version 4.3.1, created on 2025-10-31 10:35:37
  from 'app:legacyarticle_detail_doi_3.1.2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_690490f94caca6_11549806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b097f96cdbef185fcbe73e61ebd6787b829454e6' => 
    array (
      0 => 'app:legacyarticle_detail_doi_3.1.2.tpl',
      1 => 1760931566,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690490f94caca6_11549806 (Smarty_Internal_Template $_smarty_tpl) {
?>				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() != 'doi') {?>
						<?php continue 1;?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['issue']->value->getPublished()) {?>
						<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['article']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubId($_smarty_tpl->tpl_vars['article']->value));?>					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
						<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
						<div class="list-group-item doi">
														<span class="doi_logo"> </span>
							<a class="doi_link" href="<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
">
								<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>

							</a>
						</div>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
