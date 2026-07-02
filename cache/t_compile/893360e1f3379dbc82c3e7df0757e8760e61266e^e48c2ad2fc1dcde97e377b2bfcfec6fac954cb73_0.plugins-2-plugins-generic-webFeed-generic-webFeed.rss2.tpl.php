<?php
/* Smarty version 4.3.1, created on 2025-10-31 16:54:06
  from 'plugins-2-plugins-generic-webFeed-generic-webFeed:rss2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6904e9aec68877_48772489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e48c2ad2fc1dcde97e377b2bfcfec6fac954cb73' => 
    array (
      0 => 'plugins-2-plugins-generic-webFeed-generic-webFeed:rss2.tpl',
      1 => 1732939448,
      2 => 'plugins-2-plugins-generic-webFeed-generic-webFeed',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6904e9aec68877_48772489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/journal-admin/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
echo '<?'; ?>
xml version="1.0" encoding="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['defaultCharset']->value ));?>
"<?php echo '?>'; ?>

<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://web.resource.org/cc/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
	<channel>
				<title><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getLocalizedName()),"html" ));?>
</title>
		<link><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['journal']->value->getPath()),$_smarty_tpl ) );?>
</link>

		<?php if ($_smarty_tpl->tpl_vars['journal']->value->getLocalizedDescription()) {?>
			<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['journal']->value->getLocalizedDescription());?>
		<?php } elseif ($_smarty_tpl->tpl_vars['journal']->value->getLocalizedData('searchDescription')) {?>
			<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['journal']->value->getLocalizedData('searchDescription'));?>
		<?php }?>

		<description><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['description']->value),"html" ));?>
</description>

				<?php if ($_smarty_tpl->tpl_vars['journal']->value->getPrimaryLocale()) {?>
			<language><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',smarty_modifier_replace($_smarty_tpl->tpl_vars['journal']->value->getPrimaryLocale(),'_','-')),"html" ));?>
</language>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['journal']->value->getLocalizedData('licenseTerms')) {?>
			<copyright><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getLocalizedData('licenseTerms')),"html" ));?>
</copyright>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['journal']->value->getData('contactEmail')) {?>
			<managingEditor><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getData('contactEmail')),"html" ));
if ($_smarty_tpl->tpl_vars['journal']->value->getData('contactName')) {?> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getData('contactName')),"html" ));?>
)<?php }?></managingEditor>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['journal']->value->getData('supportEmail')) {?>
			<webMaster><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getData('supportEmail')),"html" ));
if ($_smarty_tpl->tpl_vars['journal']->value->getData('contactName')) {?> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['journal']->value->getData('supportName')),"html" ));?>
)<?php }?></webMaster>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['issue']->value->getDatePublished()) {?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "datePublished", null);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strtotime' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getDatePublished() ));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<pubDate><?php echo date((defined('DATE_RSS') ? constant('DATE_RSS') : null),$_smarty_tpl->tpl_vars['datePublished']->value);?>
</pubDate>
		<?php }?>

						
		<generator>OJS <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ojsVersion']->value ));?>
</generator>
		<docs>http://blogs.law.harvard.edu/tech/rss</docs>
		<ttl>60</ttl>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publishedSubmissions']->value, 'section', false, 'sectionId', 'sections', array (
));
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sectionId']->value => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value['articles'], 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
				<?php $_smarty_tpl->_assignInScope('publication', $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication());?>
				<item>
										<title><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle()),"html" ));?>
</title>
					<link><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['article']->value->getBestId()),$_smarty_tpl ) );?>
</link>
					<description><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract()),"html" ));?>
</description>

															<dc:creator><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getAuthorString(false),"html" ));?>
</dc:creator>
															
					<dc:rights>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.copyrightStatement",'copyrightYear'=>$_smarty_tpl->tpl_vars['article']->value->getCopyrightYear(),'copyrightHolder'=>$_smarty_tpl->tpl_vars['article']->value->getLocalizedCopyrightHolder()),$_smarty_tpl ) ) ));?>

						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLicenseURL() ));?>

					</dc:rights>
					<?php if (($_smarty_tpl->tpl_vars['publication']->value->getData('accessStatus') == (defined('ARTICLE_ACCESS_OPEN') ? constant('ARTICLE_ACCESS_OPEN') : null) || ($_smarty_tpl->tpl_vars['publication']->value->getData('accessStatus') == (defined('ARTICLE_ACCESS_ISSUE_DEFAULT') ? constant('ARTICLE_ACCESS_ISSUE_DEFAULT') : null) && $_smarty_tpl->tpl_vars['issue']->value->getAccessStatus() == (defined('ISSUE_ACCESS_OPEN') ? constant('ISSUE_ACCESS_OPEN') : null))) && $_smarty_tpl->tpl_vars['article']->value->isCCLicense()) {?>
						<cc:license rdf:resource="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLicenseURL() ));?>
" />
					<?php } else { ?>
						<cc:license></cc:license>
					<?php }?>

					<guid isPermaLink="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['article']->value->getBestId()),$_smarty_tpl ) );?>
</guid>
					<?php if ($_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "datePublished", null);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strtotime' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getDatePublished() ));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
						<pubDate><?php echo date((defined('DATE_RSS') ? constant('DATE_RSS') : null),$_smarty_tpl->tpl_vars['datePublished']->value);?>
</pubDate>
					<?php }?>
				</item>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	</channel>
</rss>
<?php }
}
