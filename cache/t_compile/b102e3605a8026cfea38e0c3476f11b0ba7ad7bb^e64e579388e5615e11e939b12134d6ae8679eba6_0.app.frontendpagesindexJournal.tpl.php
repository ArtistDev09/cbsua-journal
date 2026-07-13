<?php
/* Smarty version 4.3.1, created on 2026-07-13 08:14:44
  from 'app:frontendpagesindexJournal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5482541f9304_65685464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64e579388e5615e11e939b12134d6ae8679eba6' => 
    array (
      0 => 'app:frontendpagesindexJournal.tpl',
      1 => 1783923232,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:legacy/indexJournal_announcements_3.1.1.tpl' => 1,
    'app:legacy/indexJournal_announcements_3.1.2.tpl' => 1,
    'app:frontend/objects/issue_toc.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6a5482541f9304_65685464 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<?php $_smarty_tpl->_assignInScope('smarty_version', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'substr' ][ 0 ], array( Smarty::SMARTY_VERSION,0,1 )));?>
 
<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedName()), 0, false);
?>

<style>
/* ── Journal Homepage Modernization ── */
.page_index_journal {
    font-family: 'Inter', sans-serif;
}

/* Welcome Banner */
.journal-welcome-banner {
    background: linear-gradient(135deg, #f0fdf4 0%, #e2fce9 100%);
    border: 1px solid #bbf7d0;
    color: #1a7b41;
    border-radius: 12px;
    padding: 12px 16px;
    margin: 12px 0 16px;
    font-size: 1.15em;
    text-align: center;
    box-shadow: 0 4px 12px rgba(26, 123, 65, 0.08);
}

.journal-welcome-banner strong {
    color: #167144ff;
    font-family: 'Playfair Display', serif;
    font-size: 1.25em;
    font-weight: 700;
}

/* Journal Information Section */
.journal-info-section {
    display: flex;
    flex-wrap: wrap;
    gap: 36px;
    margin-bottom: 50px;
    background: #ffffff;
    border: 1px solid #e2ebe6;
    border-radius: 12px;
    padding: 36px;
    box-shadow: 0 4px 20px rgba(7, 63, 34, 0.04);
}

.journal-info-description {
    flex: 1 1 400px;
    font-size: 1.05em;
    line-height: 1.7;
    color: #34443b;
    text-align: justify;
}

.journal-info-description h2 {
    font-family: 'Playfair Display', serif;
    color: #073f22;
    font-size: 1.8em;
    font-weight: 700;
    margin: 0 0 16px;
}

/* Homepage Image */
.journal-homepage-image {
    margin-bottom: 40px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(7, 63, 34, 0.1);
}

.journal-homepage-image img {
    width: 100%;
    height: auto;
    display: block;
}

/* Current Issue Section */
.journal-current-issue {
    background: #ffffff;
    border: 1px solid #e2ebe6;
    border-radius: 12px;
    padding: 40px;
    margin-bottom: 50px;
    box-shadow: 0 4px 20px rgba(7, 63, 34, 0.04);
    position: relative;
    overflow: hidden;
}

/* Decorative accent for issue */
.journal-current-issue::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #10b865, #d4a853, #10b865);
}

.journal-current-issue header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid #edf1ee;
    flex-wrap: wrap;
    gap: 16px;
}

.journal-current-issue h2 {
    font-family: 'Playfair Display', serif;
    color: #073f22;
    font-size: 2.2em;
    font-weight: 800;
    margin: 0;
}

.current_issue_title {
    font-size: 1.2em;
    color: #1f8f4a;
    font-weight: 600;
    margin: 0;
}

.btn-view-all {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #eef7f2;
    color: #10b865;
    border: 1px solid #cfe8d8;
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.25s ease;
}

    .btn-view-all:hover {
        background: #10b865;
        color: #ffffff;
        border-color: #10b865;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(16, 184, 101, 0.2);
        transform: translateY(-2px);
    }

    /* Responsive Overrides */
    @media (max-width: 767px) {
        .journal-info-section {
            flex-direction: column;
            align-items: center;
            padding: 24px;
        }
        
        .journal-info-thumbnail {
            flex: 0 0 auto;
            max-width: 200px;
        }
        
        .journal-info-description {
            text-align: left;
        }

        .journal-current-issue {
            padding: 24px;
        }

        .journal-current-issue header {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>

<div id="main-content" class="page_index_journal" role="content">

		<div class="journal-welcome-banner">
		<strong>Welcome!</strong> to CBSUA Journals.
	</div>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Index::journal"),$_smarty_tpl ) );?>


		<?php if ($_smarty_tpl->tpl_vars['homepageImage']->value) {?>
		<div class="journal-homepage-image">
			<img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepageImage']->value['uploadName'],"url" ));?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homepageImageAltText']->value ));?>
">
		</div>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['journalDescription']->value) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "url", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('journal'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getPath()),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedDescription());?>	

		<section class="journal-info-section">
			<?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
				<div class="journal-info-description">
					<h2>About the Journal</h2>
					<?php echo $_smarty_tpl->tpl_vars['description']->value;?>

				</div>
			<?php }?>
		</section>
	<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['smarty_version']->value == '2') {?> 
		<?php $_smarty_tpl->_subTemplateRender("app:legacy/indexJournal_announcements_3.1.1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender("app:legacy/indexJournal_announcements_3.1.2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['issue']->value) {?>
		<section class="journal-current-issue">
			<header>
				<div>
					<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.currentIssue"),$_smarty_tpl ) );?>
</h2>
					<p class="current_issue_title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ));?>
</p>
				</div>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"issue",'op'=>"archive"),$_smarty_tpl ) );?>
" class="btn-view-all">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"journal.viewAllIssues"),$_smarty_tpl ) );?>

					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</header>
			
			<div class="current-issue-toc">
				<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/issue_toc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>
		</section>
	<?php }?>

	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><!-- .page -->
<?php }
}
