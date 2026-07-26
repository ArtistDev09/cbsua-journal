<?php
/* Smarty version 4.3.1, created on 2026-07-20 15:42:23
  from 'app:frontendcomponentsfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5e25bfb8bfe7_57461626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.tpl',
      1 => 1783932175,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a5e25bfb8bfe7_57461626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

	        </main>
	
         <?php if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sidebarCode", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>
                <aside id="sidebar" class="pkp_structure_sidebar col-xs-12 col-sm-3 col-md-2" role="complementary" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
                    <?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>

                </aside>
            <?php }?>
        <?php }?>
    </div><!-- /.row -->
</div><!-- /.container -->

<style>
/* ── Modern Footer ── */
.modern-footer {
    background: #052e18 !important;
    color: #ffffff;
    margin-top: 48px;
}

.modern-footer__accent {
    height: 3px;
    background: linear-gradient(90deg, #10b865, #d4a853, #10b865);
}

.modern-footer__main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 28px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    flex-wrap: wrap;
}

.modern-footer__brand {
    display: flex;
    align-items: center;
    gap: 12px;
}

.modern-footer__logo-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: #ffffff;
    transition: opacity 0.25s ease;
}

.modern-footer__logo-link:hover {
    opacity: 0.8;
    text-decoration: none;
    color: #ffffff;
}

.modern-footer__logo-img {
    height: 36px;
    width: auto;
    border-radius: 4px;
}

.modern-footer__copyright {
    font-family: 'Inter', sans-serif;
    font-size: 0.82em;
    font-weight: 400;
    color: rgba(255,255,255,0.6);
    letter-spacing: 0.01em;
}

.modern-footer__content {
    flex: 1 1 auto;
    font-family: 'Inter', sans-serif;
    font-size: 0.85em;
    font-weight: 300;
    color: rgba(255,255,255,0.7);
    line-height: 1.55;
    text-align: center;
}

.modern-footer__content a {
    color: #34d988;
    text-decoration: none;
    transition: color 0.2s ease;
}

.modern-footer__content a:hover {
    color: #ffffff;
}

.modern-footer__powered {
    font-family: 'Inter', sans-serif;
    font-size: 0.75em;
    font-weight: 400;
    color: rgba(255,255,255,0.35);
}

.modern-footer__powered a {
    color: rgba(255,255,255,0.5);
    text-decoration: none;
    transition: color 0.2s ease;
}

.modern-footer__powered a:hover {
    color: #34d988;
}

@media (max-width: 767px) {
    .modern-footer__main {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 24px 16px;
        gap: 14px;
    }

    .modern-footer__content {
        text-align: center;
    }
}
</style>

	<footer class="modern-footer" role="contentinfo">
		<div class="modern-footer__accent"></div>

		<div class="modern-footer__main">
			<div class="modern-footer__brand">
				<a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
" class="modern-footer__logo-link">
					<img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/plugins/themes/academic_free/images/logo.png"
						 alt="CBSUA Logo"
						 class="modern-footer__logo-img">
					<span class="modern-footer__copyright">© <?php echo smarty_modifier_date_format(time(),"%Y");?>
 VPRI CBSUA. All rights reserved.</span>
				</a>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>
				<div class="modern-footer__content">
					<?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

				</div>
			<?php }?>

			<div class="modern-footer__powered">
				Developed by: <a href="https://pkp.sfu.ca/ojs/" target="_blank" rel="noopener"><span style="color: #d4a853; font-weight: 700;">R</span>esearch <span style="color: #d4a853; font-weight: 700;">I</span>nformation and <span style="color: #d4a853; font-weight: 700;">G</span>overnance <span style="color: #d4a853; font-weight: 700;">S</span>ystem</a>
			</div>
		</div>
	</footer>

</div><!-- pkp_structure_page -->

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend",'scripts'=>$_smarty_tpl->tpl_vars['scripts']->value),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

</body>
</html>
<?php }
}
