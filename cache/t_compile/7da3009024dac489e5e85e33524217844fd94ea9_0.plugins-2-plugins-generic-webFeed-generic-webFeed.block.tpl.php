<?php
/* Smarty version 4.3.1, created on 2025-10-31 10:34:34
  from 'plugins-2-plugins-generic-webFeed-generic-webFeed:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_690490ba4bd606_20002070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7da3009024dac489e5e85e33524217844fd94ea9' => 
    array (
      0 => 'plugins-2-plugins-generic-webFeed-generic-webFeed:block.tpl',
      1 => 1761905723,
      2 => 'plugins-2-plugins-generic-webFeed-generic-webFeed',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690490ba4bd606_20002070 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block_web_feed" style="
    text-align: center;
    padding: 10px;
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
	margin-top: 15px;
">
	<h2 class="title">Journals</h2>
	<div class="content">
  <ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/mrej-Journals">Multidisciplinary Research and Extension Journal</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/index.php/Journals">Agrikultura: Research and Innovation Journal</a></li>
  </ul>
</div>

<style>

.title{
	font-size: 20px;
	font-weight: 500;
	color: green;
}
  .content {
    color: #1f7b4c;
    font-size: 0.80em;
    margin-bottom: 10px;
  }

  .content ul {
	text-align: left;
    gap: 20px;
    padding: 15px 25px;
    border-radius: 16px;
    list-style: none;
  }

  .content a {

    text-decoration: none;
    transition: all 0.3s ease;
  }

  .content a:hover {
    color: #135636;
    text-decoration: underline;
    text-underline-offset: 4px;
    transform: scale(1.05);
  }
</style>

</div>
<?php }
}
