<?php
/* Smarty version 4.3.1, created on 2026-07-13 07:27:18
  from 'plugins-2-plugins-blocks-information-blocks-information:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a54773680ad30_49037820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2996f5cbebf794abacd30f1bf9af84d7b4b5046' => 
    array (
      0 => 'plugins-2-plugins-blocks-information-blocks-information:block.tpl',
      1 => 1783920426,
      2 => 'plugins-2-plugins-blocks-information-blocks-information',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a54773680ad30_49037820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (!empty($_smarty_tpl->tpl_vars['forReaders']->value) || !empty($_smarty_tpl->tpl_vars['forAuthors']->value) || !empty($_smarty_tpl->tpl_vars['forLibrarians']->value) || $_smarty_tpl->tpl_vars['currentIssue']->value) {?>

<style>
/* ── Modern Sidebar Information Block ── */
.modern-sidebar-block {
    background: #ffffff;
    border: 1px solid #e2ebe6;
    border-radius: 12px;
    padding: 24px;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.05);
    font-family: 'Inter', sans-serif;
    margin-bottom: 30px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

/* Decorative top accent */
.modern-sidebar-block::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #073f22, #10b865);
}

.modern-sidebar-block h2 {
    font-family: 'Playfair Display', serif;
    color: #073f22;
    font-size: 1.35em;
    font-weight: 700;
    margin: 0 0 16px 0;
}

/* Issue Cover Image */
.modern-sidebar-issue-cover {
    display: block;
    margin: 0 auto 16px;
    border-radius: 6px;
    box-shadow: 0 4px 12px rgba(7, 63, 34, 0.12);
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    max-width: 100%;
}

.modern-sidebar-issue-cover:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(7, 63, 34, 0.18);
}

.modern-sidebar-issue-cover img {
    display: block;
    width: 100%;
    height: auto;
}

/* Issue Metadata */
.modern-sidebar-issue-title {
    display: block;
    color: #1a2b21;
    font-weight: 700;
    font-size: 0.95em;
    margin-bottom: 8px;
    line-height: 1.4;
}

.modern-sidebar-issue-desc {
    color: #607064;
    font-size: 0.85em;
    line-height: 1.5;
    margin-bottom: 12px;
    text-align: justify;
}

.modern-sidebar-issue-date {
    display: inline-block;
    background: #f4fbf7;
    color: #073f22;
    border: 1px solid #cfe8d8;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 0.75em;
    font-weight: 600;
    margin-bottom: 20px;
}

/* Submission Button */
.modern-sidebar-btn {
    display: block;
    width: 100%;
    background: #073f22;
    color: #ffffff !important;
    padding: 12px 0;
    border-radius: 8px;
    text-decoration: none !important;
    font-weight: 600;
    font-size: 0.95em;
    transition: all 0.25s ease;
    box-shadow: 0 4px 12px rgba(7, 63, 34, 0.15);
}

.modern-sidebar-btn:hover,
.modern-sidebar-btn:focus {
    background: #10b865;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(16, 184, 101, 0.25);
}
</style>

<div class="modern-sidebar-block">

        <?php if ($_smarty_tpl->tpl_vars['currentIssue']->value) {?>
        <?php $_smarty_tpl->_assignInScope('issueCover', $_smarty_tpl->tpl_vars['currentIssue']->value->getLocalizedCoverImageUrl());?>
        <h2>Current Issue</h2>

        <?php if ($_smarty_tpl->tpl_vars['issueCover']->value) {?>
            <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>'view','page'=>'issue','path'=>$_smarty_tpl->tpl_vars['currentIssue']->value->getBestIssueId()),$_smarty_tpl ) );?>
" class="modern-sidebar-issue-cover">
                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueCover']->value ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIssue']->value->getLocalizedCoverImageAltText() ));?>
">
            </a>
        <?php }?>

        <strong class="modern-sidebar-issue-title">
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIssue']->value->getIssueIdentification() ));?>

        </strong>

        <?php if ($_smarty_tpl->tpl_vars['currentIssue']->value->hasDescription()) {?>
            <div class="modern-sidebar-issue-desc">
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIssue']->value->getLocalizedDescription() ));?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['currentIssue']->value->getDatePublished()) {?>
            <div class="modern-sidebar-issue-date">
                Published: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['currentIssue']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>

            </div>
        <?php }?>
    <?php }?>

        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>'about','op'=>'submissions'),$_smarty_tpl ) );?>
" class="modern-sidebar-btn">
        Make a Submission
    </a>

</div>
<?php }
}
}
