<?php
/* Smarty version 4.3.1, created on 2026-07-18 12:26:35
  from 'app:frontendobjectsarticle_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5b54dbc00ab2_15911465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf1cd52b8ba8108de77f197078de34b733dd394' => 
    array (
      0 => 'app:frontendobjectsarticle_summary.tpl',
      1 => 1784020105,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5b54dbc00ab2_15911465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_assignInScope('smarty_version', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'substr' ][ 0 ], array( Smarty::SMARTY_VERSION,0,1 )));
$_smarty_tpl->_assignInScope('articlePath', $_smarty_tpl->tpl_vars['article']->value->getBestArticleId($_smarty_tpl->tpl_vars['currentJournal']->value));
$_smarty_tpl->_assignInScope('publication', $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication());
$_smarty_tpl->_assignInScope('articleGalleys', $_smarty_tpl->tpl_vars['article']->value->getGalleys());
if ($_smarty_tpl->tpl_vars['publication']->value && $_smarty_tpl->tpl_vars['publication']->value->getData('galleys')) {?>
  <?php $_smarty_tpl->_assignInScope('articleGalleys', $_smarty_tpl->tpl_vars['publication']->value->getData('galleys'));
}?>

<div class="article-summary media" style="padding: 24px 0; border-bottom: 1px solid #edf1ee; margin-bottom: 0;">
  <?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage()) {?>
    <div class="cover media-left" style="padding-right: 20px;">
      <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
">
        <img class="media-object" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
" alt="Article Cover" style="max-width: 140px; height: auto; border-radius: 6px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06); transition: transform 0.2s ease;">
      </a>
    </div>
  <?php }?>

  <div class="media-body">
        <?php $_smarty_tpl->_assignInScope('articleKeywords', '');?>
    <?php if ($_smarty_tpl->tpl_vars['publication']->value) {?>
      <?php $_smarty_tpl->_assignInScope('articleKeywords', $_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('keywords'));?>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['articleKeywords']->value) || $_smarty_tpl->tpl_vars['section']->value) {?>
      <div class="article-summary-theme" style="margin-bottom: 8px; display: flex; flex-wrap: wrap; gap: 6px;">
        <?php if (!empty($_smarty_tpl->tpl_vars['articleKeywords']->value)) {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articleKeywords']->value, 'keyword', false, NULL, 'keywordLoop', array (
));
$_smarty_tpl->tpl_vars['keyword']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyword']->value) {
$_smarty_tpl->tpl_vars['keyword']->do_else = false;
?>
            <span style="display: inline-block; font-family: 'Inter', sans-serif; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em; color: #1a7b41; background: #eef7f2; padding: 4px 10px; border-radius: 4px; line-height: 1.25;">
              <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['keyword']->value ));?>

            </span>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['section']->value) {?>
          <span style="display: inline-block; font-family: 'Inter', sans-serif; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em; color: #1a7b41; background: #eef7f2; padding: 4px 10px; border-radius: 4px; line-height: 1.25;">
            <?php if (is_array($_smarty_tpl->tpl_vars['section']->value)) {?>
              <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value['title'] ));?>

            <?php } elseif (is_object($_smarty_tpl->tpl_vars['section']->value)) {?>
              <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle() ));?>

            <?php } else { ?>
              <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value ));?>

            <?php }?>
          </span>
        <?php }?>
      </div>
    <?php }?>

        <h3 class="media-heading article-summary-title" style="font-family: 'Poppins', sans-serif; font-size: 1.25em; font-weight: 700; line-height: 1.35; margin: 4px 0 8px;">
      <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
" style="color: #073f22; text-decoration: none; transition: color 0.2s ease;">
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

      </a>
    </h3>

        <?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle()) {?>
      <p style="font-family: 'Inter', sans-serif; font-size: 0.95em; color: #607064; margin: -4px 0 8px;">
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle() ));?>

      </p>
    <?php }?>

        <div class="article-summary-meta" style="display: flex; justify-content: space-between; align-items: center; font-family: 'Inter', sans-serif; font-size: 13px; color: #506054; margin-bottom: 14px;">
      <span class="article-summary-authors" style="font-weight: 500;">
        <?php echo $_smarty_tpl->tpl_vars['article']->value->getAuthorString();?>

      </span>
      <?php if ($_smarty_tpl->tpl_vars['article']->value->getPages()) {?>
        <span class="article-summary-pages" style="font-weight: 600; color: #6b7280; font-family: monospace; font-size: 12px; background: #f3f4f6; padding: 2px 6px; border-radius: 4px;">
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getPages() ));?>

        </span>
      <?php }?>
    </div>

        <?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract()) {?>
      <div class="article-summary-abstract" style="font-family: 'Inter', sans-serif; font-size: 13px; line-height: 1.6; color: #506054; margin-bottom: 14px; text-align: justify;">
        <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract() ?: ''),220,"...");?>

      </div>
    <?php }?>

        <div class="article-summary-actions">
            <?php if (!$_smarty_tpl->tpl_vars['hideGalleys']->value && $_smarty_tpl->tpl_vars['articleGalleys']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articleGalleys']->value, 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['primaryGenreIds']->value) {?>
            <?php $_smarty_tpl->_assignInScope('file', $_smarty_tpl->tpl_vars['galley']->value->getFile());?>
            <?php if (!$_smarty_tpl->tpl_vars['galley']->value->getRemoteUrl() && !($_smarty_tpl->tpl_vars['file']->value && in_array($_smarty_tpl->tpl_vars['file']->value->getGenreId(),$_smarty_tpl->tpl_vars['primaryGenreIds']->value))) {?>
              <?php continue 1;?>
            <?php }?>
          <?php }?>
          <?php $_smarty_tpl->_assignInScope('hasArticleAccess', $_smarty_tpl->tpl_vars['hasAccess']->value);?>
          <?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getSetting('publishingMode') == (defined('PUBLISHING_MODE_OPEN') ? constant('PUBLISHING_MODE_OPEN') : null) || $_smarty_tpl->tpl_vars['publication']->value->getData('accessStatus') == (defined('ARTICLE_ACCESS_OPEN') ? constant('ARTICLE_ACCESS_OPEN') : null)) {?>
            <?php $_smarty_tpl->_assignInScope('hasArticleAccess', 1);?>
          <?php }?>
          
          <?php $_smarty_tpl->_assignInScope('gPath', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['articlePath']->value,$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId($_smarty_tpl->tpl_vars['currentJournal']->value) )));?>
          <?php if ($_smarty_tpl->tpl_vars['publication']->value && $_smarty_tpl->tpl_vars['publication']->value->getId() !== $_smarty_tpl->tpl_vars['article']->value->getData('currentPublicationId')) {?>
            <?php $_smarty_tpl->_assignInScope('gPath', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['articlePath']->value,'version',$_smarty_tpl->tpl_vars['publication']->value->getId(),$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId($_smarty_tpl->tpl_vars['currentJournal']->value) )));?>
          <?php }?>
          
          <?php $_smarty_tpl->_assignInScope('galleyOp', "download");?>
          <?php if ($_smarty_tpl->tpl_vars['galley']->value->isPdfGalley()) {?>
            <?php $_smarty_tpl->_assignInScope('galleyOp', "view");?>
          <?php }?>

          <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>$_smarty_tpl->tpl_vars['galleyOp']->value,'path'=>$_smarty_tpl->tpl_vars['gPath']->value),$_smarty_tpl ) );?>
" class="fulltext-btn" <?php if ($_smarty_tpl->tpl_vars['galley']->value->isPdfGalley()) {?>target="_blank" rel="noopener"<?php }?>>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-top: -1px;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galley']->value->getGalleyLabel() ));?>
</span>
          </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>

            <?php $_smarty_tpl->_assignInScope('articleViews', $_smarty_tpl->tpl_vars['article']->value->getViews());?>
      <?php if ($_smarty_tpl->tpl_vars['articleViews']->value > 0) {?>
        <span class="stats-badge-views" title="Views">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-top: -1px;"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
          <span><?php echo $_smarty_tpl->tpl_vars['articleViews']->value;?>
</span>
        </span>
      <?php }?>

            <?php $_smarty_tpl->_assignInScope('totalDownloads', 0);?>
      <?php if ($_smarty_tpl->tpl_vars['articleGalleys']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articleGalleys']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
          <?php $_smarty_tpl->_assignInScope('totalDownloads', $_smarty_tpl->tpl_vars['totalDownloads']->value+$_smarty_tpl->tpl_vars['g']->value->getViews());?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['totalDownloads']->value > 0) {?>
        <span class="stats-badge-downloads" title="Downloads">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-top: -1px;"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          <span><?php echo $_smarty_tpl->tpl_vars['totalDownloads']->value;?>
</span>
        </span>
      <?php }?>
    </div>

  </div>
</div><?php }
}
