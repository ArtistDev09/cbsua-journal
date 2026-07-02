<?php
/* Smarty version 4.3.1, created on 2025-10-31 10:35:37
  from 'app:frontendobjectsarticle_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_690490f94b1296_24901938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'addd65021fadf964339ab08cd1aa93ba59b14e9c' => 
    array (
      0 => 'app:frontendobjectsarticle_details.tpl',
      1 => 1761525674,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:legacy/article_detail_doi_3.1.1.tpl' => 1,
    'app:legacy/article_detail_doi_3.1.2.tpl' => 1,
    'app:frontend/objects/galley_link.tpl' => 2,
    'app:legacy/article_detail_pubs_3.1.1.tpl' => 1,
    'app:legacy/article_detail_pubs_3.1.2.tpl' => 1,
  ),
),false)) {
function content_690490f94b1296_24901938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/journal-admin/public_html/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

 <?php $_smarty_tpl->_assignInScope('smarty_version', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'substr' ][ 0 ], array( Smarty::SMARTY_VERSION,0,1 )));?>
 
<article class="article-details">
	<header>
		<h1 class="page-header">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedTitle() ));?>

			<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle()) {?>
				<small>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubtitle() ));?>

						<?php if ($_smarty_tpl->tpl_vars['section']->value) {?> <span class="pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"section.section"),$_smarty_tpl ) );?>
	<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['section']->value->getLocalizedTitle() ));?>
</span> <?php }?>
				</small>
			<?php }?>

		
		</h1>
	</header>

	<div class="row">


		<section class="article-sidebar col-md-4">

		

						<h2 class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.academic_pro.article.sidebar"),$_smarty_tpl ) );?>
</h2>

						<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage() || $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImage()) {?>
				<div class="cover-image">
					<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImage()) {?>
						<img class="img-responsive" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText()) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
					<?php } else { ?>
						<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId()),$_smarty_tpl ) );?>
">
							<img class="img-responsive" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageUrl() ));?>
"<?php if ($_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText()) {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getLocalizedCoverImageAltText() ));?>
"<?php }?>>
						</a>
					<?php }?>
				</div>
			<?php }?>

			

		

			<div class="list-group">

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getDatePublished()) {?>
					<div class="list-group-item date-published">
						<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submissions.published"),$_smarty_tpl ) );?>
</strong>
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value->getDatePublished());?>

					</div>
				<?php }?>

													<?php if ($_smarty_tpl->tpl_vars['smarty_version']->value == '2') {?> 
						<?php $_smarty_tpl->_subTemplateRender("app:legacy/article_detail_doi_3.1.1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php } else { ?>
						<?php $_smarty_tpl->_subTemplateRender("app:legacy/article_detail_doi_3.1.2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php }?>
							</div>

			
								<div class="panel panel-default galley_list">
						<div class="panel-heading">
							<i class="fa fa-download"> </i> Download
						</div>
						<div class="panel-body">
																<?php if ($_smarty_tpl->tpl_vars['primaryGalleys']->value || $_smarty_tpl->tpl_vars['supplementaryGalleys']->value) {?>
									<div class="download">
										<?php if ($_smarty_tpl->tpl_vars['primaryGalleys']->value) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['primaryGalleys']->value, 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
												<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'purchaseFee'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('purchaseArticleFee'),'purchaseCurrency'=>$_smarty_tpl->tpl_vars['currentJournal']->value->getSetting('currency')), 0, true);
?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['supplementaryGalleys']->value) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supplementaryGalleys']->value, 'galley');
$_smarty_tpl->tpl_vars['galley']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['galley']->value) {
$_smarty_tpl->tpl_vars['galley']->do_else = false;
?>
												<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/galley_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('parent'=>$_smarty_tpl->tpl_vars['article']->value,'isSupplementary'=>"1"), 0, true);
?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									</div>
								<?php }?>
						</div>
				</div>

								<?php if ($_smarty_tpl->tpl_vars['enableStatistic']->value != 'no') {?>
				<div class="panel panel-default galley_list">
						<div class="panel-heading">
							<i class="fa fa-bar-chart"> </i> Statistic
						</div>
						<div class="panel-body">					
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Main"),$_smarty_tpl ) );?>

						</div>
				</div>
				<?php }?>

			
		

		</section><!-- .article-sidebar -->

		<div class="col-md-8">
			<section class="article-main">
				
								<div class="issue_detail">			
				<a class="title" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId($_smarty_tpl->tpl_vars['currentJournal']->value)),$_smarty_tpl ) );?>
">
				<?php echo $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification();?>

				</a>
				</div>


								<h2 class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.academic_pro.article.main"),$_smarty_tpl ) );?>
</h2>

				<?php if ($_smarty_tpl->tpl_vars['article']->value->getAuthors()) {?>
					<div class="authors">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
							<div class="author">
							<i class="fa fa-user"> </i>
								<strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>
</strong>
								<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
									<div class="article-author-affilitation">
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>

									</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['author']->value->getOrcid()) {?>
									<div class="orcid">									
										<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>
" target="_blank">
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>

										</a>
									</div>
								<?php }?>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract()) {?>
					<div class="article-summary" id="summary">
						<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.abstract"),$_smarty_tpl ) );?>
</h2>
						<div class="article-abstract">
							<?php echo nl2br((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedAbstract() )), (bool) 1);?>

						</div>
					</div>
				<?php }?>

								
				

			</section><!-- .article-main -->

			<section class="article-more-details">

								<h2 class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.themes.academic_pro.article.details"),$_smarty_tpl ) );?>
</h2>

			
												<?php if ($_smarty_tpl->tpl_vars['smarty_version']->value == '2') {?> 
					<?php $_smarty_tpl->_subTemplateRender("app:legacy/article_detail_pubs_3.1.1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender("app:legacy/article_detail_pubs_3.1.2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
				


								<?php if ($_smarty_tpl->tpl_vars['article']->value->getLocalizedSubject()) {?>
					<div class="panel panel-default subject">
						<div class="panel-heading">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"article.subject"),$_smarty_tpl ) );?>

						</div>
						<div class="panel-body">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['article']->value->getLocalizedSubject() ));?>

						</div>
					</div>
				<?php }?>


			

								<?php if ($_smarty_tpl->tpl_vars['copyright']->value || $_smarty_tpl->tpl_vars['licenseUrl']->value) {?>
					<div class="panel panel-default copyright">
						<div class="panel-body">
							<?php if ($_smarty_tpl->tpl_vars['licenseUrl']->value) {?>
								<?php if ($_smarty_tpl->tpl_vars['ccLicenseBadge']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['ccLicenseBadge']->value;?>

								<?php } else { ?>
									<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['licenseUrl']->value ));?>
" class="copyright">
										<?php if ($_smarty_tpl->tpl_vars['copyrightHolder']->value) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.copyrightStatement",'copyrightHolder'=>$_smarty_tpl->tpl_vars['copyrightHolder']->value,'copyrightYear'=>$_smarty_tpl->tpl_vars['copyrightYear']->value),$_smarty_tpl ) );?>

										<?php } else { ?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.license"),$_smarty_tpl ) );?>

										<?php }?>
									</a>
								<?php }?>
							<?php }?>
							<?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>

						</div>
					</div>
				<?php }?>

								<?php $_smarty_tpl->_assignInScope('hasBiographies', 0);?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography()) {?>
						<?php $_smarty_tpl->_assignInScope('hasBiographies', $_smarty_tpl->tpl_vars['hasBiographies']->value+1);?>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['hasBiographies']->value) {?>
					<div class="panel panel-default author-bios">
						<div class="panel-heading">
							
							<?php if ($_smarty_tpl->tpl_vars['hasBiographies']->value > 1) {?>
								<i class="fa fa-users"> </i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorBiographies"),$_smarty_tpl ) );?>

							<?php } else { ?>
								<i class="fa fa-user"> </i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorBiography"),$_smarty_tpl ) );?>

							<?php }?>
						</div>
						<div class="panel-body" style="font-family: sans-serif">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value->getAuthors(), 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography()) {?>
									<div class="media biography">
										<div class="media-body">
											<h3 class="media-heading biography-author">
												<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
													<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorName", null);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
													<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorAffiliation", null);?><span class="affiliation"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorWithAffiliation",'name'=>$_smarty_tpl->tpl_vars['authorName']->value,'affiliation'=>$_smarty_tpl->tpl_vars['authorAffiliation']->value),$_smarty_tpl ) );?>

												<?php } else { ?>
													<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>

												<?php }?>
											</h3>
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography() ));?>

										</div>
									</div>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				<?php }?>

									<?php if ($_smarty_tpl->tpl_vars['citation']->value) {?>
					<div class="panel panel-default how-to-cite">
						<div class="panel-heading">
							<i class="fa fa-file-text"> </i>  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.howToCite"),$_smarty_tpl ) );?>

						</div>
						<div class="panel-body">
							<div id="citationOutput" role="region" aria-live="polite">
								<?php echo $_smarty_tpl->tpl_vars['citation']->value;?>

							</div>
							<div class="btn-group">
							  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-controls="cslCitationFormats">
							    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.howToCite.citationFormats"),$_smarty_tpl ) );?>

									<span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" role="menu">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['citationStyles']->value, 'citationStyle');
$_smarty_tpl->tpl_vars['citationStyle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['citationStyle']->value) {
$_smarty_tpl->tpl_vars['citationStyle']->do_else = false;
?>
										<li>
											<a
												aria-controls="citationOutput"
												href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"citationstylelanguage",'op'=>"get",'path'=>$_smarty_tpl->tpl_vars['citationStyle']->value['id'],'params'=>$_smarty_tpl->tpl_vars['citationArgs']->value),$_smarty_tpl ) );?>
"
												data-load-citation
												data-json-href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"citationstylelanguage",'op'=>"get",'path'=>$_smarty_tpl->tpl_vars['citationStyle']->value['id'],'params'=>$_smarty_tpl->tpl_vars['citationArgsJson']->value),$_smarty_tpl ) );?>
"
											>
												<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['citationStyle']->value['title'] ));?>

											</a>
										</li>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							  </ul>
							</div>
						</div>
					</div>
				<?php }?>


				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Details"),$_smarty_tpl ) );?>


								<?php if ($_smarty_tpl->tpl_vars['article']->value->getCitations()) {?>
					<div class="article-references">
						<h2><i class="fa fa-bookmark-o text-primary"> </i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.citations"),$_smarty_tpl ) );?>
</h2>
						<div class="article-references-content">
							 <ol>
							<?php if ($_smarty_tpl->tpl_vars['parsedCitations']->value) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parsedCitations']->value, 'parsedCitation');
$_smarty_tpl->tpl_vars['parsedCitation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['parsedCitation']->value) {
$_smarty_tpl->tpl_vars['parsedCitation']->do_else = false;
?>
								<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['parsedCitation']->value->getCitationWithLinks() ));?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Article::Details::Reference",'citation'=>$_smarty_tpl->tpl_vars['parsedCitation']->value),$_smarty_tpl ) );?>
</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php } else { ?>
							<?php echo nl2br((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getData('citationsRaw') )), (bool) 1);?>

							<?php }?>
						 </ol>
						</div>
					</div>
				<?php }?>

			</section><!-- .article-details -->
		</div><!-- .col-md-8 -->
	</div><!-- .row -->

</article>
<?php }
}
