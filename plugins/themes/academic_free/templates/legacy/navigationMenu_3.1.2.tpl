{**
 * templates/frontend/components/navigationMenu.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Primary navigation menu list for OJS
 *
 * @uses navigationMenu array Hierarchical array of navigation menu item assignments
 * @uses id string Element ID to assign the outer <ul>
 * @uses ulClass string Class name(s) to assign the outer <ul>
 * @uses liClass string Class name(s) to assign all <li> elements
 *}

{if $navigationMenu}
	<ul id="{$id|escape}" class="{$ulClass|escape}">
		{foreach key=field item=navigationMenuItemAssignment from=$navigationMenu->menuTree}
			{if !$navigationMenuItemAssignment->navigationMenuItem->getIsDisplayed()}
				{continue}
			{/if}
			{assign var="hasChildren" value=false}
			{if !empty($navigationMenuItemAssignment->children)}
				{assign var="hasChildren" value=true}
			{/if}
			{assign var="itemTitle" value=$navigationMenuItemAssignment->navigationMenuItem->getLocalizedTitle()}
			{assign var="isAboutMenu" value=false}
			{if $id === 'main-navigation' && ($itemTitle == 'About' || $itemTitle == 'About the Journal' || $navigationMenuItemAssignment->navigationMenuItem->getType() == 'NMI_TYPE_ABOUT')}
				{assign var="isAboutMenu" value=true}
				{assign var="itemTitle" value="Browse"}
			{/if}
			<li class="{$liClass|escape}{if $hasChildren || $isAboutMenu} dropdown{/if}">
				<a href="{$navigationMenuItemAssignment->navigationMenuItem->getUrl()}"{if $hasChildren || $isAboutMenu} class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"{/if}>
					{$itemTitle}
					{if $hasChildren || $isAboutMenu}
						<span class="caret"></span>
					{/if}
				</a>
				{if $isAboutMenu}
					<ul class="dropdown-menu">
						<li>
							<a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}">Articles</a>
						</li>
						<li>
							<a href="{url router=$smarty.const.ROUTE_PAGE page="about"}">Editorial Policy</a>
						</li>
						<li>
							<a href="{url router=$smarty.const.ROUTE_PAGE page="about" op="peerReview"}">Peer Review Policy</a>
						</li>
						<li>
							<a href="{url router=$smarty.const.ROUTE_PAGE page="about" op="editorialTeam"}">Editorial Team</a>
						</li>
					</ul>
				{elseif !empty($navigationMenuItemAssignment->children)}
					<ul class="dropdown-menu {if $id === 'navigationUser'}dropdown-menu-right{/if}">
						{foreach key=childField item=childNavigationMenuItemAssignment from=$navigationMenuItemAssignment->children}
							{if $childNavigationMenuItemAssignment->navigationMenuItem->getIsDisplayed()}
								<li class="{$liClass|escape}">
									<a href="{$childNavigationMenuItemAssignment->navigationMenuItem->getUrl()}">
										{$childNavigationMenuItemAssignment->navigationMenuItem->getLocalizedTitle()}
									</a>
								</li>
							{/if}
						{/foreach}
					</ul>
				{/if}
			</li>
		{/foreach}
	</ul>
{/if}
