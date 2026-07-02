<?php
/* Smarty version 4.3.1, created on 2025-10-31 10:34:34
  from 'plugins-2-plugins-blocks-information-blocks-information:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_690490ba4b43a5_52372353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2996f5cbebf794abacd30f1bf9af84d7b4b5046' => 
    array (
      0 => 'plugins-2-plugins-blocks-information-blocks-information:block.tpl',
      1 => 1761183958,
      2 => 'plugins-2-plugins-blocks-information-blocks-information',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_690490ba4b43a5_52372353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/journal-admin/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if (!empty($_smarty_tpl->tpl_vars['forReaders']->value) || !empty($_smarty_tpl->tpl_vars['forAuthors']->value) || !empty($_smarty_tpl->tpl_vars['forLibrarians']->value)) {?>
<div style="
    text-align: center;
    padding: 10px;
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
">

        <?php if ($_smarty_tpl->tpl_vars['currentIssue']->value) {?>
        <?php $_smarty_tpl->_assignInScope('issueCover', $_smarty_tpl->tpl_vars['currentIssue']->value->getLocalizedCoverImageUrl());?>
        <h2 style="color: #1f7b4cff; font-weight: 600; font-size: 1.2em; margin-bottom: 10px;">
            Current Issue
        </h2>

        <?php if ($_smarty_tpl->tpl_vars['issueCover']->value) {?>
            <div style="margin-bottom: 15px;">
                <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>'view','page'=>'issue','path'=>$_smarty_tpl->tpl_vars['currentIssue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueCover']->value ));?>
"
                         alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIssue']->value->getLocalizedCoverImageAltText() ));?>
"
                         style="width: 100%; max-width: 200px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                </a>
            </div>
        <?php }?>

        <div style="margin-bottom: 15px; text-align: center; font-size: 0.80em;">
            <strong style="display: block; color: #333; margin-bottom: 8px;">
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIssue']->value->getIssueIdentification() ));?>

            </strong>

            <?php if ($_smarty_tpl->tpl_vars['currentIssue']->value->hasDescription()) {?>
                <div style="color: #555; font-size: 0.80em; line-height: 1.4; margin-bottom: 10px;">
                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIssue']->value->getLocalizedDescription() ));?>

                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['currentIssue']->value->getDatePublished()) {?>
                <p style="font-size: 0.80em; color: #777; margin-bottom: 0;">
                    <strong>Published:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['currentIssue']->value->getDatePublished(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>

                </p>
            <?php }?>
        </div>

    <?php }?>

    
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>'about','op'=>'submissions'),$_smarty_tpl ) );?>
"
       class="btn btn-success"
       style="
            background-color: #4caf50;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            display: inline-block;
            transition: background 0.3s ease;
       "
       onmouseover="this.style.backgroundColor='#43a047';"
       onmouseout="this.style.backgroundColor='#4caf50';">
        Make a Submission
    </a>

</div>
<?php }
}
}
