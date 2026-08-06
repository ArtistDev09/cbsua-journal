<?php
/* Smarty version 4.3.1, created on 2026-07-27 15:35:23
  from 'app:dashboardindex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a675e9bc6c4e1_08606632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f648fa76ca397b9d4cc4c6c88f9417b91e0ea8' => 
    array (
      0 => 'app:dashboardindex.tpl',
      1 => 1785158927,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a675e9bc6c4e1_08606632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14554420306a675e9bc597f5_69016757', "page");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_14554420306a675e9bc597f5_69016757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_14554420306a675e9bc597f5_69016757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<style>
		/* Main Submissions Queue Dashboard Mobile Responsiveness Fix */
		.pkpListPanel,
		.listPanel,
		.pkp_page_submissions .app__content,
		.pkp_page_submissions .app__main {
			box-sizing: border-box !important;
			max-width: 100% !important;
			overflow-x: hidden !important;
		}

		/* Tabs Navigation Bar: Mobile Scrollable */
		@media screen and (max-width: 768px) {
			.app__pageHeading {
				font-size: 1.4rem !important;
				line-height: 1.3 !important;
				margin-bottom: 12px !important;
			}

			.pkpTabs,
			.pkpTabs__buttons,
			.pkp_tabs .ui-tabs-nav,
			div[role="tablist"],
			.pkpTabButtons {
				display: flex !important;
				flex-wrap: nowrap !important;
				overflow-x: auto !important;
				-webkit-overflow-scrolling: touch !important;
				scrollbar-width: thin !important;
				padding-bottom: 6px !important;
				margin-bottom: 12px !important;
				border-bottom: 2px solid #e2e8f0 !important;
				max-width: 100% !important;
			}

			.pkpTabs__button,
			.pkp_tabs .ui-tabs-nav li,
			.pkpTabButton,
			div[role="tablist"] button,
			div[role="tablist"] a {
				flex: 0 0 auto !important;
				white-space: nowrap !important;
				padding: 8px 12px !important;
				font-size: 0.88rem !important;
				min-height: 38px !important;
			}

			.pkp_help_tab {
				float: none !important;
				margin: 0 0 10px 0 !important;
				display: inline-block !important;
			}

			/* Fix for Search & Filters Overlapping / Floating Outside Card Boundary */
			.pkpHeader,
			.listPanel__header,
			.pkpListPanel__header {
				display: flex !important;
				flex-direction: column !important;
				align-items: stretch !important;
				width: 100% !important;
				max-width: 100% !important;
				box-sizing: border-box !important;
				padding: 8px 0 !important;
				gap: 8px !important;
			}

			.pkpHeader__title,
			.listPanel__title {
				margin-bottom: 4px !important;
			}

			.pkpHeader__actions,
			.listPanel__actions,
			.pkpListPanel__actions {
				display: flex !important;
				flex-wrap: wrap !important;
				flex-direction: row !important;
				align-items: center !important;
				width: 100% !important;
				max-width: 100% !important;
				box-sizing: border-box !important;
				gap: 8px !important;
				float: none !important;
			}

			/* Search Component */
			.pkpSearch,
			.listPanel__search,
			.pkpListPanel__search,
			.pkpSearch__inputContainer {
				flex: 1 1 100% !important;
				width: 100% !important;
				max-width: 100% !important;
				box-sizing: border-box !important;
				min-width: 0 !important;
			}

			.pkpSearch input,
			.pkpSearch__input,
			.listPanel__searchInput,
			.pkpSearch input[type="text"],
			.pkpSearch input[type="search"] {
				width: 100% !important;
				max-width: 100% !important;
				box-sizing: border-box !important;
				min-height: 38px !important;
				font-size: 0.9rem !important;
				padding: 6px 10px !important;
			}

			/* Filters Button */
			.pkpFilter,
			.listPanel__filter,
			.pkpListPanel__filter,
			.pkpHeader__actions .pkpButton,
			.listPanel__actions .pkpButton,
			.pkpHeader__actions button,
			.listPanel__actions button,
			.pkpDropdown {
				flex: 0 0 auto !important;
				max-width: 100% !important;
				box-sizing: border-box !important;
				margin: 0 !important;
			}

			/* Submission List Items (Cards) */
			.pkpListPanelItem,
			.pkpListPanel__item,
			.listPanel__item,
			.listPanel__itemSummary {
				display: flex !important;
				flex-direction: column !important;
				align-items: stretch !important;
				padding: 10px 10px !important;
				margin-bottom: 8px !important;
				border-radius: 6px !important;
				border: 1px solid #e2e8f0 !important;
				background: #ffffff !important;
				box-sizing: border-box !important;
				width: 100% !important;
				max-width: 100% !important;
				overflow: hidden !important;
			}

			/* Item Main Content Layout */
			.pkpListPanelItem__item,
			.listPanel__itemIdentity,
			.listPanel__itemMain {
				display: flex !important;
				flex-direction: row !important;
				align-items: flex-start !important;
				width: 100% !important;
				gap: 8px !important;
				box-sizing: border-box !important;
			}

			.pkpListPanelItem__id,
			.listPanel__itemId {
				font-weight: bold !important;
				font-size: 0.85rem !important;
				color: #475569 !important;
				min-width: 22px !important;
				flex-shrink: 0 !important;
			}

			.pkpListPanelItem__title,
			.listPanel__itemTitle,
			.listPanel__itemAuthor,
			.pkpListPanelItem__author {
				font-size: 0.9rem !important;
				line-height: 1.35 !important;
				word-break: break-word !important;
				white-space: normal !important;
				overflow: visible !important;
				text-overflow: clip !important;
				flex: 1 1 auto !important;
			}

			/* Status Badges & Action Buttons Layout Row */
			.pkpListPanelItem__stage,
			.pkpListPanelItem__status,
			.pkpListPanelItem__actions,
			.listPanel__itemActions,
			.listPanel__itemStage,
			.listPanel__itemStatus {
				display: flex !important;
				flex-wrap: wrap !important;
				flex-direction: row !important;
				align-items: center !important;
				gap: 6px !important;
				margin-top: 8px !important;
				padding-top: 6px !important;
				border-top: 1px dashed #f1f5f9 !important;
				width: 100% !important;
				justify-content: flex-start !important;
				box-sizing: border-box !important;
			}

			.pkpBadge,
			.listPanel__status,
			.listPanel__stage,
			.pkpListPanelItem__status {
				font-size: 0.75rem !important;
				padding: 3px 8px !important;
				border-radius: 12px !important;
				line-height: 1.2 !important;
			}

			.pkpButton,
			.listPanel__itemActions .pkpButton,
			.listPanel__itemActions button,
			.listPanel__itemActions a {
				font-size: 0.82rem !important;
				padding: 5px 10px !important;
				min-height: 34px !important;
				white-space: nowrap !important;
			}

			/* Pagination */
			.pkpListPanel__footer,
			.listPanel__footer,
			.pkpPagination {
				flex-direction: column !important;
				align-items: center !important;
				gap: 8px !important;
				padding: 10px 0 !important;
				width: 100% !important;
			}
		}

		@media screen and (max-width: 480px) {
			.pkpHeader__actions,
			.listPanel__actions,
			.pkpListPanel__actions {
				flex-direction: column !important;
				align-items: stretch !important;
			}

			.pkpFilter,
			.listPanel__filter,
			.pkpListPanel__filter,
			.pkpHeader__actions .pkpButton,
			.listPanel__actions .pkpButton,
			.pkpHeader__actions button,
			.listPanel__actions button {
				width: 100% !important;
				justify-content: center !important;
				text-align: center !important;
			}
		}
	</style>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.submissions"),$_smarty_tpl ) );?>

	</h1>

	<tabs :track-history="true">
		<tab id="myQueue" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"dashboard.myQueue"),$_smarty_tpl ) );?>
" :badge="components.<?php echo (defined('SUBMISSIONS_LIST_MY_QUEUE') ? constant('SUBMISSIONS_LIST_MY_QUEUE') : null);?>
.itemsMax">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"submissions",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<submissions-list-panel
				v-bind="components.<?php echo (defined('SUBMISSIONS_LIST_MY_QUEUE') ? constant('SUBMISSIONS_LIST_MY_QUEUE') : null);?>
"
				@set="set"
			/>
		</tab>
		<?php if (array_intersect(array(ROLE_ID_SITE_ADMIN,ROLE_ID_MANAGER),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
			<tab id="unassigned" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.queue.long.submissionsUnassigned"),$_smarty_tpl ) );?>
" :badge="components.<?php echo (defined('SUBMISSIONS_LIST_UNASSIGNED') ? constant('SUBMISSIONS_LIST_UNASSIGNED') : null);?>
.itemsMax">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"submissions",'section'=>"unassigned",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

				<submissions-list-panel
					v-bind="components.<?php echo (defined('SUBMISSIONS_LIST_UNASSIGNED') ? constant('SUBMISSIONS_LIST_UNASSIGNED') : null);?>
"
					@set="set"
				/>
			</tab>
			<tab id="active" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.queue.long.active"),$_smarty_tpl ) );?>
" :badge="components.<?php echo (defined('SUBMISSIONS_LIST_ACTIVE') ? constant('SUBMISSIONS_LIST_ACTIVE') : null);?>
.itemsMax">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"submissions",'section'=>"active",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

				<submissions-list-panel
					v-bind="components.<?php echo (defined('SUBMISSIONS_LIST_ACTIVE') ? constant('SUBMISSIONS_LIST_ACTIVE') : null);?>
"
					@set="set"
				/>
			</tab>
		<?php }?>
		<tab id="archive" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.archives"),$_smarty_tpl ) );?>
" :badge="components.<?php echo (defined('SUBMISSIONS_LIST_ARCHIVE') ? constant('SUBMISSIONS_LIST_ARCHIVE') : null);?>
.itemsMax">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"submissions",'section'=>"archives",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<submissions-list-panel
				v-bind="components.<?php echo (defined('SUBMISSIONS_LIST_ARCHIVE') ? constant('SUBMISSIONS_LIST_ARCHIVE') : null);?>
"
				@set="set"
			/>
		</tab>
	</tabs>
<?php
}
}
/* {/block "page"} */
}
