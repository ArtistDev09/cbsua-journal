<?php
/* Smarty version 4.3.1, created on 2026-07-07 05:21:46
  from 'app:frontendcomponentsfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a4c70ca063545_30989722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.tpl',
      1 => 1783093844,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a4c70ca063545_30989722 (Smarty_Internal_Template $_smarty_tpl) {
?>
	        </main>
		

        <?php if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sidebarCode", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>
                <aside id="sidebar" class="pkp_structure_sidebar col-xs-12 col-sm-4 col-md-4" role="complementary" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
                    <?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>

                </aside>
            <?php }?>
        <?php }?>
    </div><!-- /.row -->
</div><!-- /.container -->

	

	<footer class="footer site-footer" role="contentinfo">
		<div class="container">
			<div class="site-footer__inner">
				<div class="site-footer__brand">
										<div class="site-footer__title">© VPRI CBSUA 2026.<br /> All rights reserved.</div>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>
					<div class="site-footer__content">
						<?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

					</div>
				<?php }?>
			</div>
		</div><!-- .container -->
	</footer>
</div><!-- pkp_structure_page -->

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend",'scripts'=>$_smarty_tpl->tpl_vars['scripts']->value),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

</body>
</html>
<?php }
}
