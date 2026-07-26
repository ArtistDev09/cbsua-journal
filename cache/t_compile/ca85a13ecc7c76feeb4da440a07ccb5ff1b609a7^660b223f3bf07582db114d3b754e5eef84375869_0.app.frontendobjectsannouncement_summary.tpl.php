<?php
/* Smarty version 4.3.1, created on 2026-07-18 12:26:18
  from 'app:frontendobjectsannouncement_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5b54caef8a80_23220542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '660b223f3bf07582db114d3b754e5eef84375869' => 
    array (
      0 => 'app:frontendobjectsannouncement_summary.tpl',
      1 => 1784370328,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5b54caef8a80_23220542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<style>
/* Modern Announcement Card */
.announcement-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 4px 20px rgba(7, 63, 34, 0.05);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    border: 1px solid #f0fdf4;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.announcement-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(7, 63, 34, 0.08);
    border-color: #c2ffd4;
}

.announcement-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #1a7b41, #10b865);
    border-radius: 16px 16px 0 0;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.announcement-card:hover::before {
    opacity: 1;
}

.announcement-date {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.85em;
    color: #1a7b41;
    font-weight: 600;
    margin-bottom: 12px;
}

.announcement-date svg {
    color: #10b865;
}

.announcement-card .media-heading {
    font-family: 'Poppins', sans-serif;
    font-size: 1.3em;
    font-weight: 600;
    line-height: 1.4;
    margin: 0 0 16px 0;
}

.announcement-card .media-heading a {
    color: #073f22;
    text-decoration: none;
    transition: color 0.2s ease;
}

.announcement-card .media-heading a:hover {
    color: #10b865;
}

.announcement-summary-text {
    color: #4b5563;
    font-size: 0.95em;
    line-height: 1.6;
    margin-bottom: 24px;
    flex-grow: 1;
}

.announcement-read-more {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.9em;
    font-weight: 600;
    color: #1a7b41;
    text-decoration: none;
    transition: all 0.2s ease;
    margin-top: auto;
}

.announcement-read-more svg {
    transition: transform 0.2s ease;
}

.announcement-read-more:hover {
    color: #073f22;
}

.announcement-read-more:hover svg {
    transform: translateX(4px);
}
</style>

<article class="announcement-card">
    <div class="announcement-date">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value->getDatePosted(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>

    </div>
    
    <h3 class="media-heading">
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"announcement",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['announcement']->value->getId()),$_smarty_tpl ) );?>
">
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitle() ));?>

        </a>
    </h3>
    
    <div class="announcement-summary-text">
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescriptionShort() ));?>

    </div>
    
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"announcement",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['announcement']->value->getId()),$_smarty_tpl ) );?>
" class="announcement-read-more">
        Read Full Announcement
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
    </a>
</article>
<?php }
}
