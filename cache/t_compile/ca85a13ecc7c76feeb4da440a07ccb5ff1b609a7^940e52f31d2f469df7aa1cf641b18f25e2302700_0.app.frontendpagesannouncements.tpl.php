<?php
/* Smarty version 4.3.1, created on 2026-07-18 12:26:17
  from 'app:frontendpagesannouncements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5b54c9e6c130_65746738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '940e52f31d2f469df7aa1cf641b18f25e2302700' => 
    array (
      0 => 'app:frontendpagesannouncements.tpl',
      1 => 1784370291,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/editLink.tpl' => 1,
    'app:frontend/components/announcements.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6a5b54c9e6c130_65746738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"announcement.announcements"), 0, false);
?>

<style>
/* Modern Announcements Page Styles */
.page_announcements {
    background: #fbfdfc;
    font-family: 'Inter', sans-serif;
    color: #334139;
    padding-bottom: 80px;
}

/* Hero Section */
.announcements-hero {
    background: linear-gradient(135deg, #052e18 0%, #073f22 100%);
    padding: 80px 20px;
    text-align: center;
    color: #ffffff;
    margin-bottom: 60px;
    position: relative;
    overflow: hidden;
}

.announcements-hero::after {
    content: '';
    position: absolute;
    bottom: -50px;
    left: 50%;
    transform: translateX(-50%);
    width: 200%;
    height: 100px;
    background: #fbfdfc;
    border-radius: 50%;
}

.announcements-hero-content {
    position: relative;
    z-index: 10;
    max-width: 800px;
    margin: 0 auto;
}

.announcements-tag {
    display: inline-block;
    background: rgba(255,255,255,0.15);
    color: #eab308;
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 0.85em;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 20px;
    backdrop-filter: blur(4px);
    border: 1px solid rgba(255,255,255,0.1);
}

.announcements-title {
    font-family: 'Poppins', sans-serif;
    font-size: 3em;
    font-weight: 700;
    margin-bottom: 20px;
    line-height: 1.2;
}

.announcements-subtitle {
    font-size: 1.15em;
    color: #e2ebe6;
    opacity: 0.9;
    line-height: 1.6;
    max-width: 600px;
    margin: 0 auto;
}

.announcements-container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Introduction block */
.announcements-introduction {
    background: #ffffff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(7, 63, 34, 0.05);
    margin-bottom: 40px;
    border-left: 4px solid #1a7b41;
    font-size: 1.05em;
    line-height: 1.6;
}
</style>

<div class="page page_announcements">
    
        <div class="announcements-hero">
        <div class="announcements-hero-content">
            <span class="announcements-tag"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"announcement.announcements"),$_smarty_tpl ) );?>
</span>
            <h1 class="announcements-title">Stay Updated</h1>
            <p class="announcements-subtitle">Discover the latest news, updates, and calls for papers from our editorial team.</p>
        </div>
    </div>

    <div class="announcements-container">
        <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"announcement.announcements"), 0, false);
?>
        
        <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"announcements",'anchor'=>"announcements",'sectionTitleKey'=>"announcement.announcements"), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['announcementsIntroduction']->value) {?>
            <div class="announcements-introduction">
                <?php echo $_smarty_tpl->tpl_vars['announcementsIntroduction']->value;?>

            </div>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("app:frontend/components/announcements.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
