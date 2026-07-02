<?php
/* Smarty version 4.3.1, created on 2025-11-01 03:55:00
  from 'app:frontendcomponentssearchForm_simple.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_69058494eb6823_25403241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52019e87b90081f2c6bfa717994d81ab7712dd1f' => 
    array (
      0 => 'app:frontendcomponentssearchForm_simple.tpl',
      1 => 1760931566,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69058494eb6823_25403241 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['currentJournal']->value || $_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('publishingMode') != (defined('PUBLISHING_MODE_NONE') ? constant('PUBLISHING_MODE_NONE') : null)) {?>
<form class="navbar-form navbar-left" role="search" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"search",'op'=>"search"),$_smarty_tpl ) );?>
">
  <div class="form-group">
    <input class="form-control" name="query" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['searchQuery']->value ));?>
" type="text" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.searchQuery"),$_smarty_tpl ) ) ));?>
" placeholder="">
  </div>
  <button type="submit" class="btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.search"),$_smarty_tpl ) );?>
</button>
</form>
<?php }
}
}
