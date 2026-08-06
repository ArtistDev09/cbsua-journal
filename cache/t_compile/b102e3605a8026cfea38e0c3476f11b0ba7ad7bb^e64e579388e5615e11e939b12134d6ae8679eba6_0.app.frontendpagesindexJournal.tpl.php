<?php
/* Smarty version 4.3.1, created on 2026-07-27 15:38:15
  from 'app:frontendpagesindexJournal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a675f475ad0d3_62360618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e64e579388e5615e11e939b12134d6ae8679eba6' => 
    array (
      0 => 'app:frontendpagesindexJournal.tpl',
      1 => 1784028590,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/objects/issue_toc.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6a675f475ad0d3_62360618 (Smarty_Internal_Template $_smarty_tpl) {
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
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(135deg, #f0fdf4 0%, #e8f9ed 100%);
    border: 1px solid #c2ffd4;
    color: #166534;
    border-radius: 12px;
    padding: 14px 20px;
    margin: 16px 0 24px;
    font-size: 1.05em;
    box-shadow: 0 4px 15px rgba(22, 101, 52, 0.06);
    position: relative;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 1;
    max-height: 200px;
    overflow: hidden;
}

.journal-welcome-banner.banner-hidden {
    opacity: 0;
    transform: scale(0.95) translateY(-10px);
}

.welcome-banner-content {
    display: flex;
    align-items: center;
    gap: 16px;
    flex: 1;
    margin-right: 12px;
}

.welcome-banner-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    background: #dcfce7;
    color: #16a34a;
    border-radius: 50%;
    flex-shrink: 0;
}

.welcome-banner-icon svg {
    width: 18px;
    height: 18px;
}

.welcome-banner-text {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}

.welcome-badge {
    background: #16a34a;
    color: #ffffff;
    font-family: 'Playfair Display', serif;
    font-size: 0.85em;
    font-weight: 700;
    padding: 2px 10px;
    border-radius: 20px;
    letter-spacing: 0.5px;
    box-shadow: 0 2px 4px rgba(22, 163, 74, 0.2);
}

.welcome-message {
    font-family: 'Inter', sans-serif;
    color: #1b4332;
    font-weight: 500;
}

.welcome-banner-close {
    background: transparent;
    border: none;
    cursor: pointer;
    color: #166534;
    opacity: 0.6;
    padding: 6px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s ease;
    flex-shrink: 0;
}

.welcome-banner-close:hover {
    opacity: 1;
    background: rgba(22, 101, 52, 0.1);
    color: #14532d;
    transform: rotate(90deg);
}

.welcome-banner-close svg {
    width: 16px;
    height: 16px;
}

@media (max-width: 767px) {
    .journal-welcome-banner {
        padding: 12px 16px;
    }
    .welcome-banner-content {
        gap: 12px;
    }
    .welcome-banner-text {
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
    }
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

		<div class="journal-welcome-banner" id="journal-welcome-banner" style="display: none;">
		<div class="welcome-banner-content">
			<span class="welcome-banner-icon">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
					<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20ZM11 7H13V9H11V7ZM11 11H13V17H11V11Z"/>
				</svg>
			</span>
			<div class="welcome-banner-text">
				<span class="welcome-badge">Welcome</span>
				<span class="welcome-message">to CBSUA Journals. Explore our open-access scholarly publications.</span>
			</div>
		</div>
		<button type="button" class="welcome-banner-close" id="close-welcome-banner" aria-label="Close welcome banner">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
				<line x1="18" y1="6" x2="6" y2="18"></line>
				<line x1="6" y1="6" x2="18" y2="18"></line>
			</svg>
		</button>
	</div>

	
	<?php echo '<script'; ?>
>
		(function() {
			var banner = document.getElementById("journal-welcome-banner");
			if (banner) {
				if (localStorage.getItem("cbsua_welcome_banner_closed") !== "true") {
					banner.style.display = "flex";
				}
				var closeBtn = document.getElementById("close-welcome-banner");
				if (closeBtn) {
					closeBtn.addEventListener("click", function() {
						banner.classList.add("banner-hidden");
						localStorage.setItem("cbsua_welcome_banner_closed", "true");
						
						// Smoothly collapse height and margins
						banner.style.maxHeight = banner.offsetHeight + 'px';
						// Force a reflow
						banner.offsetHeight;
						
						banner.style.maxHeight = '0';
						banner.style.paddingTop = '0';
						banner.style.paddingBottom = '0';
						banner.style.marginTop = '0';
						banner.style.marginBottom = '0';
						banner.style.borderWidth = '0';
						
						setTimeout(function() {
							banner.remove();
						}, 400);
					});
				}
			}
		})();
	<?php echo '</script'; ?>
>
	

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
