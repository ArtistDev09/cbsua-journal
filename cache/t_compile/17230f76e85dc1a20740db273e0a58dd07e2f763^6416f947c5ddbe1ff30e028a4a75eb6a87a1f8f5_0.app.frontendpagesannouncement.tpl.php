<?php
/* Smarty version 4.3.1, created on 2026-07-18 12:26:46
  from 'app:frontendpagesannouncement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5b54e6476128_74598332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6416f947c5ddbe1ff30e028a4a75eb6a87a1f8f5' => 
    array (
      0 => 'app:frontendpagesannouncement.tpl',
      1 => 1784370301,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs_announcement.tpl' => 1,
    'app:frontend/objects/announcement_full.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6a5b54e6476128_74598332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitle() ))), 0, false);
?>

<style>
/* Modern Single Announcement Page Styles */
.page_announcement {
    background: #fbfdfc;
    font-family: 'Inter', sans-serif;
    color: #334139;
    padding-bottom: 80px;
}

.announcement-single-hero {
    background: linear-gradient(135deg, #052e18 0%, #073f22 100%);
    padding: 60px 20px 80px;
    color: #ffffff;
    margin-bottom: -40px;
    position: relative;
    overflow: hidden;
}

.announcement-single-hero::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 60px;
    background: #fbfdfc;
    clip-path: polygon(0 100%, 100% 100%, 100% 0);
}

.announcement-single-header {
    max-width: 900px;
    margin: 0 auto;
    position: relative;
    z-index: 10;
}

.announcement-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 20;
}
</style>

<div class="page page_announcement">

    <div class="announcement-single-hero">
        <div class="announcement-single-header">
            <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs_announcement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitle'=>$_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitle()), 0, false);
?>
        </div>
    </div>

    <div class="announcement-container">
        <?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/announcement_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
