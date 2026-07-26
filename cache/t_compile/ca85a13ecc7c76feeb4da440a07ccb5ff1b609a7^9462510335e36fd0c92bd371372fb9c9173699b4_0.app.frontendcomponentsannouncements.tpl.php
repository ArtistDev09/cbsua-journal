<?php
/* Smarty version 4.3.1, created on 2026-07-18 12:26:18
  from 'app:frontendcomponentsannouncements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5b54cae351f6_51969513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9462510335e36fd0c92bd371372fb9c9173699b4' => 
    array (
      0 => 'app:frontendcomponentsannouncements.tpl',
      1 => 1784370311,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/objects/announcement_summary.tpl' => 1,
  ),
),false)) {
function content_6a5b54cae351f6_51969513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<style>
.announcements-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 30px;
    margin-top: 30px;
}
.announcements-empty {
    text-align: center;
    padding: 60px 20px;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(7, 63, 34, 0.05);
}
.announcements-empty svg {
    margin-bottom: 20px;
    color: #1a7b41;
    opacity: 0.5;
}
.announcements-empty h3 {
    font-family: 'Poppins', sans-serif;
    color: #073f22;
    margin-bottom: 10px;
}
.announcements-empty p {
    color: #667069;
}
</style>

<div class="announcements-grid">
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['announcements']->value) == 0) {?>
        </div>
        <div class="announcements-empty">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
            <h3>No Announcements Yet</h3>
            <p>Check back later for the latest news and updates.</p>
        </div>
    <?php } else { ?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
$_smarty_tpl->tpl_vars['announcement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/announcement_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }
}
}
