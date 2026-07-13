<?php
/* Smarty version 4.3.1, created on 2026-07-13 08:01:49
  from 'app:frontendobjectsarticle_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a547f4d93e558_69307903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf1cd52b8ba8108de77f197078de34b733dd394' => 
    array (
      0 => 'app:frontendobjectsarticle_summary.tpl',
      1 => 1783922483,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/galley_link.tpl' => 1,
  ),
),false)) {
function content_6a547f4d93e558_69307903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_assignInScope('smarty_version', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'substr' ][ 0 ], array( Smarty::SMARTY_VERSION,0,1 )));
$_smarty_tpl->_assignInScope('articlePath', $_smarty_tpl->tpl_vars['article']->value->getBestArticleId($_smarty_tpl->tpl_vars['currentJournal']->value));
$_smarty_tpl->_assignInScope('publication', $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication());
$_smarty_tpl->_assignInScope('articleGalleys', $_smarty_tpl->tpl_vars['article']->value->getGalleys());
if ($_smarty_tpl->tpl_vars['publication']->value && $_smarty_tpl->tpl_vars['publication']->value->getData('galleys')) {?>
  <?php $_smarty_tpl->_assignInScope('articleGalleys', $_smarty_tpl->tpl_vars['publication']->value->getData('galleys'));
}
if ((!$_smarty_tpl->tpl_vars['section']->value['hideAuthor'] && $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == (defined('AUTHOR_TOC_DEFAULT') ? constant('AUTHOR_TOC_DEFAULT') : null)) || $_smarty_tpl->tpl_vars['article']->value->getHideAuthor() == (defined('AUTHOR_TOC_SHOW') ? constant('AUTHOR_TOC_SHOW') : null)) {?>
  <?php $_smarty_tpl->_assignInScope('showAuthor', true);
}?>

<div class="article-summary media">
  <?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage()) {?>
    <div class="cover media-left">
      <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
" class="file">
        <img class="media-object" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
">
      </a>
    </div>
  <?php }?>

  <div class="media-body">
    <h3 class="media-heading" style="font-family: Arial, Helvetica, sans-serif; display:flex; align-items:center; flex-wrap:wrap; gap:8px;">
      <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"article",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['articlePath']->value),$_smarty_tpl ) );?>
">
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

      </a>
      <?php if (!$_smarty_tpl->tpl_vars['hideGalleys']->value && $_smarty_tpl->tpl_vars['articleGalleys']->value) {?>
        <span class="inline-title-galleys" style="display:inline-flex; align-items:center; margin-left:12px;">
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
            <?php $_smarty_tpl->_assignInScope('publication', $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication());?>
            <?php $_smarty_tpl->_assignInScope('hasArticleAccess', $_smarty_tpl->tpl_vars['hasAccess']->value);?>
            <?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getSetting('publishingMode') == (defined('PUBLISHING_MODE_OPEN') ? constant('PUBLISHING_MODE_OPEN') : null) || $_smarty_tpl->tpl_vars['publication']->value->getData('accessStatus') == (defined('ARTICLE_ACCESS_OPEN') ? constant('ARTICLE_ACCESS_OPEN') : null)) {?>
              <?php $_smarty_tpl->_assignInScope('hasArticleAccess', 1);?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'publication'=>$_smarty_tpl->tpl_vars['publication']->value,'hasAccess'=>$_smarty_tpl->tpl_vars['hasArticleAccess']->value,'currentJournal'=>$_smarty_tpl->tpl_vars['currentJournal']->value), 0, true);
?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </span>
      <?php }?>
      <?php $_smarty_tpl->_assignInScope('articleViews', $_smarty_tpl->tpl_vars['article']->value->getViews());?>
      <?php if ($_smarty_tpl->tpl_vars['articleViews']->value > 0) {?>
        <span class="article-summary-stats" style="display:inline-flex; align-items:center; gap:3px; margin-left:8px; padding: 1px 6px; background: #eef7f2; border: 1px solid #cfe8d8; border-radius: 10px; font-size: 0.78em; font-weight: 600; color: #073f22; font-family: 'Inter', sans-serif;">
          <span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="font-size: 0.95em; opacity: 0.85;"></span>
          <span><?php echo $_smarty_tpl->tpl_vars['articleViews']->value;?>
</span>
        </span>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle()) {?>
        <p>
          <small><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle() ));?>
</small>
        </p>
      <?php }?>
    </h3>

    <div class="article-details-summary" style="margin-top: 12px; font-family: 'Inter', sans-serif; font-size: 0.95em; color: #34443b; line-height: 1.6;">
      <?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
        <div class="article-issue" style="font-weight: 600; color: #073f22; margin-bottom: 8px;">
          <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ));?>

        </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract()) {?>
        <div class="article-abstract" style="margin-bottom: 8px;">
          <strong style="color: #073f22;">Abstract:</strong> <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract() ?: ''),400,"...");?>

        </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['showAuthor']->value) {?>
        <div class="article-authors" style="margin-bottom: 8px;">
          <strong style="color: #073f22;">Authors:</strong> <?php echo $_smarty_tpl->tpl_vars['article']->value->getAuthorString();?>

        </div>
      <?php }?>

      <?php $_smarty_tpl->_assignInScope('publication', $_smarty_tpl->tpl_vars['article']->value->getCurrentPublication());?>
      <?php $_smarty_tpl->_assignInScope('articleKeywords', '');?>
      <?php if ($_smarty_tpl->tpl_vars['publication']->value) {?>
        <?php $_smarty_tpl->_assignInScope('articleKeywords', $_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('keywords'));?>
      <?php }?>
      <?php if (!empty($_smarty_tpl->tpl_vars['articleKeywords']->value)) {?>
        <div class="article-keywords" style="margin-bottom: 8px;">
          <strong style="color: #073f22;">Keywords:</strong> 
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articleKeywords']->value, 'keyword', false, NULL, 'keywords', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['keyword']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyword']->value) {
$_smarty_tpl->tpl_vars['keyword']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['total'];
?>
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['keyword']->value ));
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last'] : null)) {?>, <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>
        <div class="article-year" style="margin-bottom: 8px;">
          <strong style="color: #073f22;">Year Published:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDatePublished(),"%Y");?>

        </div>
      <?php } elseif ($_smarty_tpl->tpl_vars['issue']->value && $_smarty_tpl->tpl_vars['issue']->value->getYear()) {?>
        <div class="article-year" style="margin-bottom: 8px;">
          <strong style="color: #073f22;">Year Published:</strong> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getYear() ));?>

        </div>
      <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['article']->value->getPages()) {?>
        <div class="article-pages" style="margin-bottom: 8px;">
          <strong style="color: #073f22;">Pages:</strong> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getPages() ));?>

        </div>
      <?php }?>
    </div>

  </div>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Issue::Issue::Article"),$_smarty_tpl ) );?>

</div><!-- .article-summary --><?php }
}
