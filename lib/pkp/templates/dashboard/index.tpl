{**
 * templates/dashboard/index.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Dashboard index.
 *}
{extends file="layouts/backend.tpl"}

{block name="page"}
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
		{translate key="navigation.submissions"}
	</h1>

	<tabs :track-history="true">
		<tab id="myQueue" label="{translate key="dashboard.myQueue"}" :badge="components.{$smarty.const.SUBMISSIONS_LIST_MY_QUEUE}.itemsMax">
			{help file="submissions" class="pkp_help_tab"}
			<submissions-list-panel
				v-bind="components.{$smarty.const.SUBMISSIONS_LIST_MY_QUEUE}"
				@set="set"
			/>
		</tab>
		{if array_intersect(array(ROLE_ID_SITE_ADMIN, ROLE_ID_MANAGER), (array)$userRoles)}
			<tab id="unassigned" label="{translate key="common.queue.long.submissionsUnassigned"}" :badge="components.{$smarty.const.SUBMISSIONS_LIST_UNASSIGNED}.itemsMax">
				{help file="submissions" section="unassigned" class="pkp_help_tab"}
				<submissions-list-panel
					v-bind="components.{$smarty.const.SUBMISSIONS_LIST_UNASSIGNED}"
					@set="set"
				/>
			</tab>
			<tab id="active" label="{translate key="common.queue.long.active"}" :badge="components.{$smarty.const.SUBMISSIONS_LIST_ACTIVE}.itemsMax">
				{help file="submissions" section="active" class="pkp_help_tab"}
				<submissions-list-panel
					v-bind="components.{$smarty.const.SUBMISSIONS_LIST_ACTIVE}"
					@set="set"
				/>
			</tab>
		{/if}
		<tab id="archive" label="{translate key="navigation.archives"}" :badge="components.{$smarty.const.SUBMISSIONS_LIST_ARCHIVE}.itemsMax">
			{help file="submissions" section="archives" class="pkp_help_tab"}
			<submissions-list-panel
				v-bind="components.{$smarty.const.SUBMISSIONS_LIST_ARCHIVE}"
				@set="set"
			/>
		</tab>
	</tabs>
{/block}