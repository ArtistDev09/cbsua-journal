<?php
/* Smarty version 4.3.1, created on 2026-07-27 15:38:20
  from 'plugins-2-plugins-generic-webFeed-generic-webFeed:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a675f4c587393_13094345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7da3009024dac489e5e85e33524217844fd94ea9' => 
    array (
      0 => 'plugins-2-plugins-generic-webFeed-generic-webFeed:block.tpl',
      1 => 1783931762,
      2 => 'plugins-2-plugins-generic-webFeed-generic-webFeed',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a675f4c587393_13094345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="wf-announcements-block" style="
    padding: 16px;
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    border-left: 4px solid #10b865;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    text-align: left;
    margin-top: 15px;
">
    <h2 style="
        font-size: 1.05em;
        font-weight: 700;
        color: #073f22;
        margin: 0 0 12px 0;
        display: flex;
        align-items: center;
        gap: 7px;
    ">
        <span class="glyphicon glyphicon-bullhorn" style="color: #10b865; font-size: 0.9em;"></span>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"announcement.announcements"),$_smarty_tpl ) );?>

    </h2>

    <?php if ($_smarty_tpl->tpl_vars['webFeedAnnouncements']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['webFeedAnnouncements']->value) > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['webFeedAnnouncements']->value, 'wfAnnouncement', false, NULL, 'wfLoop', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['wfAnnouncement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wfAnnouncement']->value) {
$_smarty_tpl->tpl_vars['wfAnnouncement']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_wfLoop']->value['index']++;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_wfLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_wfLoop']->value['index'] : null) >= 3) {
break 1;
}?>
            <div style="padding: 8px 0; border-bottom: 1px solid #edf1ee;">
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"announcement",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['wfAnnouncement']->value->getId()),$_smarty_tpl ) );?>
" style="
                    display: block;
                    color: #1a2b21;
                    font-size: 0.88em;
                    font-weight: 600;
                    line-height: 1.4;
                    text-decoration: none;
                    margin-bottom: 4px;
                " onmouseover="this.style.color='#10b865'" onmouseout="this.style.color='#1a2b21'">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['wfAnnouncement']->value->getLocalizedTitle() ));?>

                </a>
                <span style="font-size: 0.75em; color: #8a9e92;">
                    <span class="glyphicon glyphicon-calendar" style="font-size:0.85em;"></span>
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['wfAnnouncement']->value->getDatePosted() ));?>

                </span>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"announcement"),$_smarty_tpl ) );?>
" style="
            display: inline-block;
            margin-top: 10px;
            font-size: 0.82em;
            font-weight: 600;
            color: #10b865;
            text-decoration: none;
        " onmouseover="this.style.color='#073f22'" onmouseout="this.style.color='#10b865'">
            view all announcements &rsaquo;
        </a>
    <?php } else { ?>
        <p style="font-size: 0.85em; color: #8a9e92; margin: 0;">No announcements at this time.</p>
    <?php }?>
</div>
<?php }
}
