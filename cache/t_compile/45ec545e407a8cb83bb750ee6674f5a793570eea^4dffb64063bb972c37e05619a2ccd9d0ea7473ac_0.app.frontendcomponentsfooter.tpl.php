<?php
/* Smarty version 4.3.1, created on 2025-11-01 03:54:42
  from 'app:frontendcomponentsfooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_69058482cc5895_93028801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.tpl',
      1 => 1761273710,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69058482cc5895_93028801 (Smarty_Internal_Template $_smarty_tpl) {
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

	

	<footer class="footer" role="contentinfo">
		
		<div class="container">
				
				<div class="col-md-4">
										<?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value && is_array($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value)) {?>
					<img style='width:100%; border="0"' src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['uploadName'],"url" ));?>
" <?php if ($_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] != '') {?>alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['displayPageHeaderLogo']->value['altText'] ));?>
"<?php } else { ?>alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.pageHeaderLogo.altText"),$_smarty_tpl ) );?>
"<?php }?>>
					<?php } else { ?>
						<img  style='width: 100px; border="1px solid #e5e5e5"; border-radius: 4px;' alt="site_logo" src="<?php echo $_smarty_tpl->tpl_vars['pluginImageDir']->value;?>
top_logo.jpg" /> <br>
					<?php }?>
				</div>
				
				<?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>
					<?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>
	
				<?php }?>
			
				
			
				
			
			 <!-- .row -->
		</div><!-- .container -->
	</footer>
</div><!-- pkp_structure_page -->

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend",'scripts'=>$_smarty_tpl->tpl_vars['scripts']->value),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

</body>
</html>
<?php }
}
