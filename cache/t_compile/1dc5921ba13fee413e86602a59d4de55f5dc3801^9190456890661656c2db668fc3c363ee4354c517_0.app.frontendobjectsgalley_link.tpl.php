<?php
/* Smarty version 4.3.1, created on 2026-08-06 02:48:46
  from 'app:frontendobjectsgalley_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a73d9ee0f5b56_81304341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9190456890661656c2db668fc3c363ee4354c517' => 
    array (
      0 => 'app:frontendobjectsgalley_link.tpl',
      1 => 1783919015,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a73d9ee0f5b56_81304341 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['journalOverride']->value) {?>
	<?php $_smarty_tpl->_assignInScope('currentJournal', $_smarty_tpl->tpl_vars['journalOverride']->value);
}?>

<?php if ($_smarty_tpl->tpl_vars['galley']->value->isPdfGalley()) {?>
	<?php $_smarty_tpl->_assignInScope('type', "pdf");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('type', "file");
}?>

<?php if ($_smarty_tpl->tpl_vars['parent']->value instanceOf Issue) {?>
	<?php $_smarty_tpl->_assignInScope('page', "issue");?>
	<?php $_smarty_tpl->_assignInScope('parentId', $_smarty_tpl->tpl_vars['parent']->value->getBestIssueId());?>
	<?php $_smarty_tpl->_assignInScope('path', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['parentId']->value,$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId($_smarty_tpl->tpl_vars['currentJournal']->value) )));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('page', "article");?>
	<?php $_smarty_tpl->_assignInScope('parentId', $_smarty_tpl->tpl_vars['parent']->value->getBestId());?>
	<?php if ($_smarty_tpl->tpl_vars['publication']->value && $_smarty_tpl->tpl_vars['publication']->value->getId() !== $_smarty_tpl->tpl_vars['parent']->value->getData('currentPublicationId')) {?>
		<?php $_smarty_tpl->_assignInScope('path', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['parentId']->value,'version',$_smarty_tpl->tpl_vars['publication']->value->getId(),$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId($_smarty_tpl->tpl_vars['currentJournal']->value) )));?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('path', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['parentId']->value,$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId($_smarty_tpl->tpl_vars['currentJournal']->value) )));?>
	<?php }
}?>

<?php if (!$_smarty_tpl->tpl_vars['hasAccess']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['restrictOnlyPdf']->value && $_smarty_tpl->tpl_vars['type']->value == "pdf") {?>
		<?php $_smarty_tpl->_assignInScope('restricted', "1");?>
	<?php } elseif (!$_smarty_tpl->tpl_vars['restrictOnlyPdf']->value) {?>
		<?php $_smarty_tpl->_assignInScope('restricted', "1");?>
	<?php }
}?>

<?php $_smarty_tpl->_assignInScope('galleyOp', "download");
$_smarty_tpl->_assignInScope('linkTarget', '');
if ($_smarty_tpl->tpl_vars['type']->value == 'pdf') {?>
	<?php $_smarty_tpl->_assignInScope('galleyOp', "view");?>
	<?php $_smarty_tpl->_assignInScope('linkTarget', "_blank");
}?>
<style>
/* Modern Galley Link Styles */
.galley-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 14px;
    background: #eef7f2;
    border: 1px solid #cfe8d8;
    border-radius: 6px;
    color: #073f22;
    font-family: 'Inter', sans-serif;
    font-size: 0.85em;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s ease;
    margin-right: 8px;
    margin-bottom: 8px;
}

.galley-link:hover {
    background: #073f22;
    color: #ffffff;
    border-color: #073f22;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(7, 63, 34, 0.15);
    transform: translateY(-1px);
}

.galley-download-count {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    margin-left: 4px;
    padding-left: 8px;
    border-left: 1px solid rgba(7, 63, 34, 0.15);
    font-size: 0.9em;
    font-weight: 700;
    color: inherit;
    opacity: 0.85;
}

.galley-link:hover .galley-download-count {
    border-left-color: rgba(22, 95, 28, 0.3);
}

.galley-download-count .glyphicon {
    font-size: 1.1em;
}
</style>

<a class="galley-link <?php if ($_smarty_tpl->tpl_vars['isSupplementary']->value) {
} else {
}?> <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>$_smarty_tpl->tpl_vars['page']->value,'op'=>$_smarty_tpl->tpl_vars['galleyOp']->value,'path'=>$_smarty_tpl->tpl_vars['path']->value),$_smarty_tpl ) );?>
"<?php if ($_smarty_tpl->tpl_vars['linkTarget']->value) {?> target="<?php echo $_smarty_tpl->tpl_vars['linkTarget']->value;?>
" rel="noopener"<?php }?>>

		<?php if ($_smarty_tpl->tpl_vars['restricted']->value) {?>
		<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
		<span class="sr-only">
			<?php if ($_smarty_tpl->tpl_vars['purchaseArticleEnabled']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reader.subscriptionOrFeeAccess"),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reader.subscriptionAccess"),$_smarty_tpl ) );?>

			<?php }?>
		</span>
	<?php }?>

	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galley']->value->getGalleyLabel() ));?>


	<?php if ($_smarty_tpl->tpl_vars['type']->value == 'pdf') {?>
		<?php $_smarty_tpl->_assignInScope('galleyViews', $_smarty_tpl->tpl_vars['galley']->value->getViews());?>
		<?php if ($_smarty_tpl->tpl_vars['galleyViews']->value > 0) {?>
			<span class="galley-download-count">
				<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
				<span><?php echo $_smarty_tpl->tpl_vars['galleyViews']->value;?>
</span>
			</span>
		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['restricted']->value && $_smarty_tpl->tpl_vars['purchaseFee']->value && $_smarty_tpl->tpl_vars['purchaseCurrency']->value) {?>
		<span class="purchase-cost">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"reader.purchasePrice",'price'=>$_smarty_tpl->tpl_vars['purchaseFee']->value,'currency'=>$_smarty_tpl->tpl_vars['purchaseCurrency']->value),$_smarty_tpl ) );?>

		</span>
	<?php }?>
</a>
<?php }
}
