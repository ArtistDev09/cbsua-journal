<?php
/* Smarty version 4.3.1, created on 2026-07-09 15:40:41
  from 'app:frontendcomponentsheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a4fa4d956bd09_78764274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ae5578a0959129b8d4ceeb9f99c1bb2a9cbd65' => 
    array (
      0 => 'app:frontendcomponentsheader.tpl',
      1 => 1783400455,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
    'app:frontend/components/searchForm_simple.tpl' => 1,
  ),
),false)) {
function content_6a4fa4d956bd09_78764274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('showingLogo', true);
if ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && !$_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('showingLogo', false);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "homeUrl", null);?>
	<?php if ($_smarty_tpl->tpl_vars['currentContext']->value && $_smarty_tpl->tpl_vars['multipleContexts']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"index",'router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null)),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('context'=>"index",'router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null)),$_smarty_tpl ) );?>

	<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
<?php if (!$_smarty_tpl->tpl_vars['pageTitleTranslated']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="pkp_page_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);?>
 pkp_op_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedOp']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);
if ($_smarty_tpl->tpl_vars['showingLogo']->value) {?> has_site_logo<?php }?>">
	<div class="pkp_structure_page">

		<nav id="accessibility-nav" class="sr-only" role="navigation" aria-labelled-by="accessible-menu-label">
			<div id="accessible-menu-label">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.academic_free.accessible_menu.label"),$_smarty_tpl ) ) ));?>

			</div>
			<ul>
			  <li><a href="#main-navigation"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.academic_free.accessible_menu.main_navigation"),$_smarty_tpl ) ) ));?>
</a></li>
			  <li><a href="#main-content"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.academic_free.accessible_menu.main_content"),$_smarty_tpl ) ) ));?>
</a></li>
			  <li><a href="#sidebar"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.academic_free.accessible_menu.sidebar"),$_smarty_tpl ) ) ));?>
</a></li>
			</ul>
		</nav>

				<header class="navbar navbar-default" id="headerNavigationContainer" role="banner">

						<div class="user_navigation">
			<div class="container">
				<div class="row">
					<nav aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.user"),$_smarty_tpl ) ) ));?>
">
                         <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="navbar-logo" style="display: inline-flex; align-items: center; margin-right: 3px; padding-top:3px;">
        <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/plugins/themes/academic_free/images/top_logo.png"
             alt="Site Logo"
             style="height: 60px;">
    </a>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"user",'id'=>"navigationUser",'ulClass'=>"nav nav-pills tab-list pull-right",'linkClass'=>"btn btn-info btn-sm"),$_smarty_tpl ) );?>

					</nav>
				</div><!-- .row -->
			</div><!-- .container-fluid -->
			</div>


			<div class="site_header">
			<div class="container">

				<div class="navbar-header">

										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					
<div class="site-header" style="display: flex; align-items: center; flex-wrap: wrap;">
   

    <?php if ($_smarty_tpl->tpl_vars['requestedOp']->value == 'index') {?>
    <h1 class="site-name" style="margin: 0;">
<?php } else { ?>
    <div class="site-name" style="margin: 0;">
<?php }?>

    <?php if ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
    <!--
        <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="navbar-brand journal_full_title">
            Central Bicol State University of Agriculture
        </a>
        -->
    <?php }?>

<?php if ($_smarty_tpl->tpl_vars['requestedOp']->value == 'index') {?>
    </h1>
<?php } else { ?>
    </div>
<?php }?>


</div>




								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "primaryMenu", null);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_menu'][0], array( array('name'=>"primary",'id'=>"main-navigation",'ulClass'=>"nav navbar-nav"),$_smarty_tpl ) );?>

				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php if (!empty(trim($_smarty_tpl->tpl_vars['primaryMenu']->value)) || !$_smarty_tpl->tpl_vars['noContextsConfigured']->value) {?>
					<nav id="nav-menu" class="navbar-collapse collapse" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.site"),$_smarty_tpl ) ) ));?>
">
												<?php echo $_smarty_tpl->tpl_vars['primaryMenu']->value;?>


												<?php if (!$_smarty_tpl->tpl_vars['noContextsConfigured']->value) {?>
							<div class="pull-md-right">
								<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/searchForm_simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							</div>
						<?php }?>
					</nav>
				<?php }?>

			</div><!-- .navbar-header -->

			</div><!-- .container -->
			</div><!-- .site_header -->
		

		</header><!-- .pkp_structure_head -->



		<div class="row journal_index">


				<div class="rdd-header"
     style="
        display: flex;
        text-align: center;
        margin: 30px auto;
        max-width: 900px;
        height: 250px;
        padding: 20px;

     ">

    <div style="flex: 1; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h1 class="journal_title" style="color: white; font-size: 60px">
        <?php if ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && is_string($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" style="text-decoration: none; color: inherit;">
                <?php echo $_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value;?>

            </a>
        <?php } elseif ($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value && is_array($_smarty_tpl->tpl_vars['displayPageHeaderTitle']->value)) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="navbar-brand navbar-brand-logo" style="text-decoration: none; color: inherit;">
                <?php echo $_smarty_tpl->tpl_vars['pageTitleTranslated']->value;?>

            </a>
        <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="navbar-brand" style="text-decoration: none; color: inherit;">
                OJS Site Name
            </a>
        <?php }?>
    </h1>

    <p class="journal_subtitle">
        Advancing research, innovation, and sustainable development through collaboration,
        scholarship, and community engagement.
    </p>
</div>

</div>


            <div class="journal-issn"
                 style="
                    color: #ffffffcc;
                    font-size: 1em;
                    padding: 5px 12px;
                    border-radius: 6px;
                    font-weight: 500;
                    text-align: right;">
                P-ISSN: 2782-8816   <br>   E-ISSN: 2799-1733
            </div>
     	</div>	



				<div class="pkp_structure_content container main_content">
    <div class="row">
        <main class="pkp_structure_main col-xs-12 <?php if ($_smarty_tpl->tpl_vars['isFullWidth']->value) {?>col-md-12<?php } else { ?>col-sm-8 col-md-8<?php }?>" role="main">


				
<?php }
}
