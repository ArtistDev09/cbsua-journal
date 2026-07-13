<?php
/* Smarty version 4.3.1, created on 2026-07-13 07:08:32
  from 'app:legacyindexJournal_announcements_3.1.2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5472d03bfe86_34187373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3c93dac96e83b1b7e772956fef4015bc30d575d' => 
    array (
      0 => 'app:legacyindexJournal_announcements_3.1.2.tpl',
      1 => 1783307639,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/announcement_summary.tpl' => 1,
  ),
),false)) {
function content_6a5472d03bfe86_34187373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
	<?php if ($_smarty_tpl->tpl_vars['numAnnouncementsHomepage']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['announcements']->value)) {?>
		<div class="col-md-12">
		<section class="cmp_announcements media">
			<header class="page-header">
				<h2>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"announcement.announcements"),$_smarty_tpl ) );?>

				</h2>
			</header>
			<div class="media-list">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement', false, NULL, 'announcements', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_announcements']->value['iteration']++;
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_announcements']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_announcements']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['numAnnouncementsHomepage']->value) {?>
						<?php break 1;?>
					<?php }?>
					<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/announcement_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('heading'=>"h3"), 0, true);
?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</section>
	 	</div>
	<?php }
}
}
