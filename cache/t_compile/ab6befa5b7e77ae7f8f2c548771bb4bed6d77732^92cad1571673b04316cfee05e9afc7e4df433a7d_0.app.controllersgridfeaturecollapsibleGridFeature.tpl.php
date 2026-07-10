<?php
/* Smarty version 4.3.1, created on 2026-07-09 15:57:33
  from 'app:controllersgridfeaturecollapsibleGridFeature.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a4fa8cddd9588_83827045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92cad1571673b04316cfee05e9afc7e4df433a7d' => 
    array (
      0 => 'app:controllersgridfeaturecollapsibleGridFeature.tpl',
      1 => 1783307629,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_6a4fa8cddd9588_83827045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['controlLink']->value,'contextId'=>'collapsibleGridControl'), 0, false);
}
}
