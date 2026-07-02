<?php
/* Smarty version 4.3.1, created on 2025-12-12 05:21:58
  from 'app:frontendpagescontact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_693ba676b07596_89523076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b0444a34e5318c94e752093d374a9114c1ff855' => 
    array (
      0 => 'app:frontendpagescontact.tpl',
      1 => 1760931566,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs.tpl' => 1,
    'app:frontend/components/editLink.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_693ba676b07596_89523076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"about.contact"), 0, false);
?>

<div class="page page_contact">
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitleKey'=>"about.contact"), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/editLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"management",'op'=>"settings",'path'=>"context",'anchor'=>"contact",'sectionTitleKey'=>"about.contact"), 0, false);
?>

		<div class="contact_section">

		<?php if ($_smarty_tpl->tpl_vars['mailingAddress']->value) {?>
            <div class="email_header" style="margin-bottom: 40px">
            <div class="col-md-6"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email </div>
			<div class="col-md-6">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( nl2br((string) $_smarty_tpl->tpl_vars['mailingAddress']->value, (bool) 1) ));?>

			</div>
            </div>
		<?php }?>

        <div class="clearfix"></div>
        <hr>

				<?php if ($_smarty_tpl->tpl_vars['contactTitle']->value || $_smarty_tpl->tpl_vars['contactName']->value || $_smarty_tpl->tpl_vars['contactAffiliation']->value || $_smarty_tpl->tpl_vars['contactPhone']->value || $_smarty_tpl->tpl_vars['contactEmail']->value) {?>
            <div class="col-md-6">
			<div class="contact primary">
				<h3>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.contact.principalContact"),$_smarty_tpl ) );?>

				</h3>

				<?php if ($_smarty_tpl->tpl_vars['contactName']->value) {?>
				<div class="name">
					<i class="fa fa-user" aria-hidden="true"> </i> 		<?php if ($_smarty_tpl->tpl_vars['contactTitle']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contactTitle']->value ));?>
  <?php }?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contactName']->value ));?>

				</div>
				<?php }?>

					

				<?php if ($_smarty_tpl->tpl_vars['contactAffiliation']->value) {?>
				<div class="affiliation">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['contactAffiliation']->value ));?>

				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['contactPhone']->value) {?>
				<div class="phone">
			
						<i class="fa fa-phone-square" aria-hidden="true"></i>	
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contactPhone']->value ));?>

				
				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['contactEmail']->value) {?>
				<div class="email">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>	
                    <a href="mailto:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contactEmail']->value ));?>
">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contactEmail']->value ));?>

					</a>
				</div>
				<?php }?>
			</div>

            </div>
		<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['supportName']->value || $_smarty_tpl->tpl_vars['supportPhone']->value || $_smarty_tpl->tpl_vars['supportEmail']->value) {?>
            <div class="col-md-6">
			<div class="contact support">
				<h3>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.contact.supportContact"),$_smarty_tpl ) );?>

				</h3>

				<?php if ($_smarty_tpl->tpl_vars['supportName']->value) {?>
				<div class="name">
						<i class="fa fa-user" aria-hidden="true"> </i>  <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supportName']->value ));?>

				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['supportPhone']->value) {?>
				<div class="phone">                
					<i class="fa fa-phone-square" aria-hidden="true"></i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supportPhone']->value ));?>
				
				</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['supportEmail']->value) {?>
				<div class="email">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>	
					<a href="mailto:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supportEmail']->value ));?>
">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supportEmail']->value ));?>

					</a>
				</div>
				<?php }?>
			</div>

            </div>
		<?php }?>
	</div>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
