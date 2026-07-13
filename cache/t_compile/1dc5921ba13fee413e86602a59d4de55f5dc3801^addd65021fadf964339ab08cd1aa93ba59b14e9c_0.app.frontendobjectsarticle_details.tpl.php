<?php
/* Smarty version 4.3.1, created on 2026-07-13 07:18:44
  from 'app:frontendobjectsarticle_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5475346354f0_61370792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'addd65021fadf964339ab08cd1aa93ba59b14e9c' => 
    array (
      0 => 'app:frontendobjectsarticle_details.tpl',
      1 => 1783919922,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/galley_link.tpl' => 2,
    'app:legacy/article_detail_doi_3.1.1.tpl' => 1,
    'app:legacy/article_detail_doi_3.1.2.tpl' => 1,
    'app:legacy/article_detail_pubs_3.1.1.tpl' => 1,
    'app:legacy/article_detail_pubs_3.1.2.tpl' => 1,
  ),
),false)) {
function content_6a5475346354f0_61370792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('smarty_version', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'substr' ][ 0 ], array( Smarty::SMARTY_VERSION,0,1 )));
if ($_smarty_tpl->tpl_vars['publication']->value) {?>
	<?php $_smarty_tpl->_assignInScope('articleKeywords', $_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('keywords'));
} elseif ($_smarty_tpl->tpl_vars['keywords']->value) {?>
	<?php $_smarty_tpl->_assignInScope('articleKeywords', $_smarty_tpl->tpl_vars['keywords']->value);
}?>

<style>
/* ── Article Hero Banner ── */
.article-hero-banner {
    position: relative;
    overflow: hidden;
    background: linear-gradient(160deg, #052e18 0%, #073f22 40%, #0a5c33 100%);
    margin: -20px -20px 0;
    padding: 40px 36px 36px;
    border-radius: 8px 8px 0 0;
}

.article-hero-banner::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
    background-size: 50px 50px;
    pointer-events: none;
}

.article-hero-banner::after {
    content: '';
    position: absolute;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(16,184,101,0.1) 0%, transparent 70%);
    top: -80px;
    right: -60px;
    border-radius: 50%;
    pointer-events: none;
}

.article-hero-banner .article-section-label {
    position: relative;
    z-index: 2;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
    padding: 5px 14px;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 6px;
    color: #34d988 !important;
    font-family: 'Inter', sans-serif;
    font-size: 0.78em;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    width: auto;
}

.article-hero-banner .article-section-label .fa {
    color: rgba(255,255,255,0.5);
}

.article-hero-banner .article-title {
    position: relative;
    z-index: 2;
    font-family: 'Poppins', sans-serif !important;
    font-size: 2.2em;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.2;
    margin: 0 0 12px;
    padding: 0;
    border: none;
    letter-spacing: -0.01em;
    text-shadow: 0 2px 16px rgba(5, 46, 24, 0.25);
}

.article-hero-banner .article-subtitle {
    position: relative;
    z-index: 2;
    font-family: 'Inter', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    color: rgba(255,255,255,0.7);
    line-height: 1.55;
    margin: 0;
}

/* ── Modernized Breadcrumbs ── */
.article-page .cmp_breadcrumbs {
    margin-bottom: 24px;
}

.article-page .cmp_breadcrumbs .breadcrumb {
    background: transparent;
    padding: 12px 0;
    margin: 0;
    border-radius: 0;
    font-family: 'Inter', sans-serif;
    font-size: 0.85em;
}

.article-page .cmp_breadcrumbs .breadcrumb > li + li::before {
    content: "›";
    color: #9ca8a0;
    padding: 0 8px;
}

.article-page .cmp_breadcrumbs .breadcrumb > li a {
    color: #607064;
    text-decoration: none;
    transition: color 0.2s ease;
}

.article-page .cmp_breadcrumbs .breadcrumb > li a:hover {
    color: #073f22;
}

.article-page .cmp_breadcrumbs .breadcrumb > li.active {
    color: #073f22;
    font-weight: 600;
}

/* ── Article Body Container ── */
.article-body-content {
    margin: -20px -20px 0;
    padding: 0 36px 36px;
    background: #ffffff;
    border-radius: 0 0 8px 8px;
}

/* ── Sidebar Meta Card Override ── */
.article-details--enhanced .article-meta-card {
    max-width: none;
    margin: 0 0 28px;
    border-radius: 10px;
    border: 1px solid #e2ebe6;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.06);
    overflow: hidden;
}

.article-details--enhanced .article-meta-heading {
    padding: 14px 18px;
    background: linear-gradient(135deg, #073f22, #0a5c33);
    font-family: 'Inter', sans-serif;
    font-size: 0.88em;
    letter-spacing: 0.03em;
}

.article-details--enhanced .article-meta-heading .fa {
    opacity: 0.7;
}

.article-details--enhanced .article-meta-item {
    padding: 12px 18px;
    font-family: 'Inter', sans-serif;
    font-size: 0.9em;
    transition: background 0.2s ease;
}

.article-details--enhanced .article-meta-item:hover {
    background: #f8fbf9;
}

.article-details--enhanced .article-meta-label {
    font-size: 0.85em;
    color: #607064;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.03em;
}

.article-details--enhanced .article-meta-value {
    color: #1f2d24;
    font-weight: 500;
}

/* ── Sidebar Cover Image ── */
.article-details--enhanced .article-sidebar .cover-image {
    max-width: none;
    margin: 0 0 28px;
    padding: 8px;
    border-radius: 10px;
    border: 1px solid #e2ebe6;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.06);
    background: #ffffff;
}

.article-details--enhanced .article-sidebar .cover-image img {
    border-radius: 6px;
}

/* ── Detail Blocks ── */
.article-details--enhanced .article-detail-block {
    border-radius: 10px;
    border: 1px solid #e2ebe6;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.05);
    padding: 30px;
}

.article-details--enhanced .article-block-label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 16px;
    padding: 6px 14px;
    background: #eef7f2;
    border: 1px solid #cfe8d8;
    border-radius: 6px;
    color: #073f22;
    font-family: 'Inter', sans-serif;
    font-size: 0.8em;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    width: auto;
}

.article-details--enhanced .article-block-label .fa {
    color: #1f8f4a;
}

/* ── Authors ── */
.article-details--enhanced .article-author-card {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 16px;
    margin-bottom: 8px;
    background: #fbfdfc;
    border: 1px solid #edf1ee;
    border-radius: 8px;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.article-details--enhanced .article-author-card:hover {
    border-color: #cfe8d8;
    box-shadow: 0 4px 12px rgba(7, 63, 34, 0.06);
}

.article-details--enhanced .article-block-label + .article-author-card {
    border-top: 1px solid #edf1ee;
}

.article-details--enhanced .article-author-name {
    font-family: 'Inter', sans-serif;
    font-weight: 600;
    color: #1f2d24;
    font-size: 1em;
}

.article-details--enhanced .article-author-affilitation {
    font-family: 'Inter', sans-serif;
    font-size: 0.88em;
    color: #607064;
    margin-top: 4px;
}

.article-details--enhanced .orcid a {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    margin-top: 6px;
    padding: 3px 10px;
    background: #f0f4ff;
    border: 1px solid #d4deff;
    border-radius: 4px;
    color: #31319e;
    font-size: 0.82em;
    font-weight: 500;
    text-decoration: none;
    transition: background 0.2s ease;
}

.article-details--enhanced .orcid a:hover {
    background: #e4eaff;
}

/* ── Abstract ── */
.article-details--enhanced .article-abstract {
    font-family: 'Inter', sans-serif;
    font-size: 1em;
    line-height: 1.85;
    color: #2d3d33;
    text-align: justify;
    hyphens: auto;
}

/* ── Keywords ── */
.article-details--enhanced .article-keywords {
    border-radius: 10px;
    border: 1px solid #e2ebe6;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.05);
}

.article-details--enhanced .article-keyword {
    display: inline-flex;
    align-items: center;
    padding: 6px 14px;
    background: #eef7f2;
    border: 1px solid #cfe8d8;
    border-radius: 20px;
    color: #073f22;
    font-family: 'Inter', sans-serif;
    font-size: 0.85em;
    font-weight: 600;
    transition: all 0.2s ease;
}

.article-details--enhanced .article-keyword:hover {
    background: #073f22;
    color: #ffffff;
    border-color: #073f22;
    transform: translateY(-1px);
}

/* ── Panels (How to Cite, Bios, Subject, License) ── */
.article-details--enhanced .article-more-details .panel {
    border: 1px solid #e2ebe6;
    border-radius: 10px;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.05);
    overflow: hidden;
    margin-bottom: 20px;
}

.article-details--enhanced .article-more-details .panel-default > .panel-heading {
    background: linear-gradient(135deg, #f8fbf9, #eef6f1);
    border-bottom: 1px solid #e2ebe6;
    color: #073f22;
    font-family: 'Inter', sans-serif;
    font-size: 1em;
    font-weight: 700;
    padding: 16px 20px;
}

.article-details--enhanced .article-more-details .panel-default > .panel-heading .fa {
    color: #1f8f4a;
    margin-right: 8px;
}

.article-details--enhanced .article-more-details .panel-body {
    padding: 20px;
    font-family: 'Inter', sans-serif;
    font-size: 0.92em;
    line-height: 1.7;
    color: #34443b;
}

/* ── Citation dropdown ── */
.article-details--enhanced .how-to-cite .btn-group {
    margin: 16px 0 0;
}

.article-details--enhanced .how-to-cite .btn-default {
    background: #eef7f2;
    border: 1px solid #cfe8d8;
    color: #073f22;
    font-family: 'Inter', sans-serif;
    font-size: 0.85em;
    font-weight: 600;
    border-radius: 6px;
    padding: 8px 16px;
    transition: all 0.2s ease;
}

.article-details--enhanced .how-to-cite .btn-default:hover {
    background: #073f22;
    color: #ffffff;
    border-color: #073f22;
}

.article-details--enhanced .how-to-cite .dropdown-menu {
    border: 1px solid #e2ebe6;
    border-radius: 8px;
    box-shadow: 0 8px 24px rgba(7, 63, 34, 0.12);
    padding: 6px;
}

.article-details--enhanced .how-to-cite .dropdown-menu li a {
    border-radius: 4px;
    padding: 8px 14px;
    font-size: 0.9em;
    color: #34443b;
    transition: background 0.15s ease;
}

.article-details--enhanced .how-to-cite .dropdown-menu li a:hover {
    background: #eef7f2;
    color: #073f22;
}

/* ── References ── */
.article-details--enhanced .article-references {
    margin: 28px 0 0;
    padding: 28px;
    background: #ffffff;
    border: 1px solid #e2ebe6;
    border-radius: 10px;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.05);
}

.article-details--enhanced .article-references h2 {
    font-family: 'Inter', sans-serif;
    font-size: 1.1em;
    font-weight: 700;
    color: #073f22;
    margin: 0 0 20px;
    padding-bottom: 14px;
    border-bottom: 2px solid #eef7f2;
}

.article-details--enhanced .article-references h2 .fa {
    color: #1f8f4a;
}

.article-details--enhanced .article-references-content ol {
    padding-left: 24px;
    margin: 0;
}

.article-details--enhanced .article-references-content ol li {
    padding: 10px 0;
    border-bottom: 1px solid #f4f7f5;
    font-family: 'Inter', sans-serif;
    font-size: 0.9em;
    line-height: 1.65;
    color: #3d4d44;
}

.article-details--enhanced .article-references-content ol li:last-child {
    border-bottom: none;
}

/* ── Biography section ── */
.article-details--enhanced .author-bios .biography {
    padding: 16px 0;
    border-bottom: 1px solid #edf1ee;
}

.article-details--enhanced .author-bios .biography:last-child {
    border-bottom: none;
}

.article-details--enhanced .author-bios .biography h3 {
    font-family: 'Inter', sans-serif;
    font-size: 1.05em;
    font-weight: 600;
    color: #073f22;
}

/* ── Responsive ── */
@media (max-width: 767px) {
    .article-hero-banner {
        margin: -20px -20px 0;
        padding: 28px 20px 24px;
    }

    .article-hero-banner .article-title {
        font-size: 1.6em;
    }

    .article-body-content {
        padding: 0 20px 20px;
    }

    .article-details--enhanced .article-detail-block {
        padding: 20px;
    }

    .article-details--enhanced .article-author-card {
        flex-direction: column;
        gap: 8px;
    }

    .article-details--enhanced .article-references {
        padding: 20px;
    }
}
</style>

<article class="article-details article-details--enhanced">

		<div class="article-hero-banner">
		<?php if ($_smarty_tpl->tpl_vars['section']->value) {?>
			<div class="article-section-label">
				<i class="fa fa-folder-open-o" aria-hidden="true"></i>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"section.section"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle() ));?>
</span>
			</div>
		<?php }?>
		<h1 class="page-header article-title">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

		</h1>
		<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle()) {?>
			<p class="article-subtitle">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle() ));?>

			</p>
		<?php }?>
	</div>

		<div class="article-body-content">

	<?php $_smarty_tpl->_assignInScope('articlePdfGalley', null);?>
	<?php if ($_smarty_tpl->tpl_vars['primaryGalleys']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['primaryGalleys']->value, 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
			<?php if ($_smarty_tpl->tpl_vars['galley']->value->isPdfGalley()) {?>
				<?php $_smarty_tpl->_assignInScope('articlePdfGalley', $_smarty_tpl->tpl_vars['galley']->value);?>
				<?php break 1;?>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['articlePdfGalley']->value && $_smarty_tpl->tpl_vars['supplementaryGalleys']->value) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplementaryGalleys']->value, 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
			<?php if ($_smarty_tpl->tpl_vars['galley']->value->isPdfGalley()) {?>
				<?php $_smarty_tpl->_assignInScope('articlePdfGalley', $_smarty_tpl->tpl_vars['galley']->value);?>
				<?php break 1;?>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>

	<div class="row article-details-grid">

		<section class="article-sidebar col-md-4">

						<h2 class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.academic_pro.article.sidebar"),$_smarty_tpl ) );?>
</h2>

						<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage() || $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImage()) {?>
				<div class="cover-image">
					<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage()) {?>
						<img class="img-responsive" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText()) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
					<?php } else { ?>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
							<img class="img-responsive" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText()) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
						</a>
					<?php }?>
				</div>
			<?php }?>

			<div class="list-group article-meta-card">
				<div class="list-group-item article-meta-heading">
					<i class="fa fa-info-circle" aria-hidden="true"></i>
					<span>Article Details</span>
				</div>

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getDateSubmitted()) {?>
					<div class="list-group-item date-submitted article-meta-item">
						<span class="article-meta-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.submitted",'default'=>"Submitted"),$_smarty_tpl ) );?>
</span>
						<span class="article-meta-value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getDateSubmitted() ));?>
</span>
					</div>
				<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getData('dateAccepted')) {?>
					<div class="list-group-item date-accepted article-meta-item">
						<span class="article-meta-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.accepted",'default'=>"Accepted"),$_smarty_tpl ) );?>
</span>
						<span class="article-meta-value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getData('dateAccepted') ));?>
</span>
					</div>
				<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>
					<div class="list-group-item date-published article-meta-item">
						<span class="article-meta-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.published"),$_smarty_tpl ) );?>
</span>
						<span class="article-meta-value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getDatePublished() ));?>
</span>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['article']->value->getPages()) {?>
					<div class="list-group-item article-meta-item">
						<span class="article-meta-label">Pages</span>
						<span class="article-meta-value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getPages() ));?>
</span>
					</div>
				<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['primaryGalleys']->value || $_smarty_tpl->tpl_vars['supplementaryGalleys']->value) {?>
					<div class="list-group-item article-meta-item" style="border-top: 1px solid #e2ebe6; margin-top: 10px; padding-top: 20px;">
						<span class="article-meta-label" style="margin-bottom: 12px; display: block;">Full Article</span>
						<div class="article-galleys-list" style="display: flex; flex-direction: column; gap: 10px;">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['primaryGalleys']->value, 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
								<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'galley'=>$_smarty_tpl->tpl_vars['galley']->value,'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('purchaseArticleFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('currency')), 0, true);
?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplementaryGalleys']->value, 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
								<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'galley'=>$_smarty_tpl->tpl_vars['galley']->value,'isSupplementary'=>"1"), 0, true);
?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				<?php }?>

													<?php if ($_smarty_tpl->tpl_vars['smarty_version']->value == '2') {?> 
						<?php $_smarty_tpl->_subTemplateRender("app:legacy/article_detail_doi_3.1.1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php } else { ?>
						<?php $_smarty_tpl->_subTemplateRender("app:legacy/article_detail_doi_3.1.2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php }?>
							</div>

		</section><!-- .article-sidebar -->

		<div class="col-md-8">
			<section class="article-main">
								<h2 class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.academic_pro.article.main"),$_smarty_tpl ) );?>
</h2>

				<?php if ($_smarty_tpl->tpl_vars['issue']->value || $_smarty_tpl->tpl_vars['article']->value->getAuthors() || $_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract()) {?>
					<div class="article-core-details article-detail-block">
												<?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
							<div class="issue_detail article-detail-section">
								<div class="article-block-label">
									<i class="fa fa-book" aria-hidden="true"></i>
									<span>Issue</span>
								</div>
								<a class="title" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId($_smarty_tpl->tpl_vars['currentJournal']->value)),$_smarty_tpl ) );?>
">
									<?php echo $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification();?>

								</a>
							</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['article']->value->getAuthors()) {?>
							<div class="authors article-detail-section">
								<div class="article-block-label">
									<i class="fa fa-users" aria-hidden="true"></i>
									<span>Authors</span>
								</div>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
									<div class="author article-author-card">
										<div class="article-author-content">
										<strong class="article-author-name"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>
</strong>
										<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
											<div class="article-author-affilitation">
												<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>

											</div>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['author']->value->getOrcid()) {?>
											<div class="orcid">
												<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>
" target="_blank">
													<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>

												</a>
											</div>
										<?php }?>
										</div>
									</div>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						<?php }?>

												<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract()) {?>
							<div class="article-summary article-detail-section" id="summary">
								<div class="article-block-label">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.abstract"),$_smarty_tpl ) );?>
</span>
								</div>
								<div class="article-abstract" style="text-align: justify;">
									<?php echo smarty_modifier_regex_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract() ?: ''),"/[\r\n]+/"," ");?>

								</div>
							</div>
						<?php }?>
					</div>
				<?php }?>

								<?php if (!empty($_smarty_tpl->tpl_vars['articleKeywords']->value)) {?>
					<div class="article-keywords article-detail-block">
						<div class="article-block-label">
							<i class="fa fa-tags" aria-hidden="true"></i>
							<span>Keywords</span>
						</div>
						<div class="article-keyword-list">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articleKeywords']->value, 'keyword');
$_smarty_tpl->tpl_vars['keyword']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyword']->value) {
$_smarty_tpl->tpl_vars['keyword']->do_else = false;
?>
								<span class="article-keyword"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['keyword']->value ));?>
</span>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				<?php }?>

			</section><!-- .article-main -->

			<section class="article-more-details">

								<h2 class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.academic_pro.article.details"),$_smarty_tpl ) );?>
</h2>

												<?php if ($_smarty_tpl->tpl_vars['smarty_version']->value == '2') {?> 
					<?php $_smarty_tpl->_subTemplateRender("app:legacy/article_detail_pubs_3.1.1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender("app:legacy/article_detail_pubs_3.1.2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
				
								<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubject()) {?>
					<div class="panel panel-default subject">
						<div class="panel-heading">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.subject"),$_smarty_tpl ) );?>

						</div>
						<div class="panel-body">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubject() ));?>

						</div>
					</div>
				<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['copyright']->value || $_smarty_tpl->tpl_vars['licenseUrl']->value) {?>
					<div class="panel panel-default copyright">
						<div class="panel-body">
							<?php if ($_smarty_tpl->tpl_vars['licenseUrl']->value) {?>
								<?php if ($_smarty_tpl->tpl_vars['ccLicenseBadge']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['ccLicenseBadge']->value;?>

								<?php } else { ?>
									<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['licenseUrl']->value ));?>
" class="copyright">
										<?php if ($_smarty_tpl->tpl_vars['copyrightHolder']->value) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.copyrightStatement",'copyrightHolder'=>$_smarty_tpl->tpl_vars['copyrightHolder']->value,'copyrightYear'=>$_smarty_tpl->tpl_vars['copyrightYear']->value),$_smarty_tpl ) );?>

										<?php } else { ?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.license"),$_smarty_tpl ) );?>

										<?php }?>
									</a>
								<?php }?>
							<?php }?>
							<?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>

						</div>
					</div>
				<?php }?>

								<?php $_smarty_tpl->_assignInScope('hasBiographies', 0);?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography()) {?>
						<?php $_smarty_tpl->_assignInScope('hasBiographies', $_smarty_tpl->tpl_vars['hasBiographies']->value+1);?>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['hasBiographies']->value) {?>
					<div class="panel panel-default author-bios">
						<div class="panel-heading">
							<?php if ($_smarty_tpl->tpl_vars['hasBiographies']->value > 1) {?>
								<i class="fa fa-users"> </i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorBiographies"),$_smarty_tpl ) );?>

							<?php } else { ?>
								<i class="fa fa-user"> </i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorBiography"),$_smarty_tpl ) );?>

							<?php }?>
						</div>
						<div class="panel-body">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography()) {?>
									<div class="media biography">
										<div class="media-body">
											<h3 class="media-heading biography-author">
												<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
													<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorName", null);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
													<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorAffiliation", null);?><span class="affiliation"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorWithAffiliation",'name'=>$_smarty_tpl->tpl_vars['authorName']->value,'affiliation'=>$_smarty_tpl->tpl_vars['authorAffiliation']->value),$_smarty_tpl ) );?>

												<?php } else { ?>
													<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>

												<?php }?>
											</h3>
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography() ));?>

										</div>
									</div>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['citation']->value) {?>
					<div class="panel panel-default how-to-cite">
						<div class="panel-heading">
							<i class="fa fa-file-text"> </i>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.howToCite"),$_smarty_tpl ) );?>

						</div>
						<div class="panel-body">
							<div id="citationOutput" role="region" aria-live="polite">
								<?php echo $_smarty_tpl->tpl_vars['citation']->value;?>

							</div>
							<div class="btn-group">
							  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-controls="cslCitationFormats">
							    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.howToCite.citationFormats"),$_smarty_tpl ) );?>

									<span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" role="menu">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['citationStyles']->value, 'citationStyle');
$_smarty_tpl->tpl_vars['citationStyle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['citationStyle']->value) {
$_smarty_tpl->tpl_vars['citationStyle']->do_else = false;
?>
										<li>
											<a
												aria-controls="citationOutput"
												href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"citationstylelanguage",'op'=>"get",'path'=>$_smarty_tpl->tpl_vars['citationStyle']->value['id'],'params'=>$_smarty_tpl->tpl_vars['citationArgs']->value),$_smarty_tpl ) );?>
"
												data-load-citation
												data-json-href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"citationstylelanguage",'op'=>"get",'path'=>$_smarty_tpl->tpl_vars['citationStyle']->value['id'],'params'=>$_smarty_tpl->tpl_vars['citationArgsJson']->value),$_smarty_tpl ) );?>
"
											>
												<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['citationStyle']->value['title'] ));?>

											</a>
										</li>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							  </ul>
							</div>
						</div>
					</div>
				<?php }?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Details"),$_smarty_tpl ) );?>


								<?php if ($_smarty_tpl->tpl_vars['article']->value->getCitations()) {?>
					<div class="article-references">
						<h2><i class="fa fa-bookmark-o text-primary"> </i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.citations"),$_smarty_tpl ) );?>
</h2>
						<div class="article-references-content">
							 <ol>
							<?php if ($_smarty_tpl->tpl_vars['parsedCitations']->value) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parsedCitations']->value, 'parsedCitation');
$_smarty_tpl->tpl_vars['parsedCitation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['parsedCitation']->value) {
$_smarty_tpl->tpl_vars['parsedCitation']->do_else = false;
?>
								<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['parsedCitation']->value->getCitationWithLinks() ));?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Details::Reference",'citation'=>$_smarty_tpl->tpl_vars['parsedCitation']->value),$_smarty_tpl ) );?>
</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php } else { ?>
							<?php echo nl2br((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getData('citationsRaw') )), (bool) 1);?>

							<?php }?>
						 </ol>
						</div>
					</div>
				<?php }?>

			</section><!-- .article-details -->
		</div><!-- .col-md-8 -->
	</div><!-- .row -->

	</div><!-- .article-body-content -->

</article>
<?php }
}
