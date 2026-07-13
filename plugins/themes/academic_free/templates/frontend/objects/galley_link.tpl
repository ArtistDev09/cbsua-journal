{**
 * templates/frontend/objects/galley_link.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief View of a galley object as a link to view or download the galley, to be used
 *  in a list of galleys.
 *
 * @uses $galley Galley
 * @uses $parent Issue|Article Object which these galleys are attached to
 * @uses $hasAccess bool Can this user access galleys for this context?
 * @uses $restrictOnlyPdf bool Is access only restricted to PDF galleys?
 * @uses $purchaseArticleEnabled bool Can this article be purchased?
 * @uses $currentJournal Journal The current journal context
 * @uses $journalOverride Journal An optional argument to override the current
 *       journal with a specific context
 *}

{* Override the $currentJournal context if desired *}
{if $journalOverride}
	{assign var="currentJournal" value=$journalOverride}
{/if}

{* Determine galley type and URL op *}
{if $galley->isPdfGalley()}
	{assign var="type" value="pdf"}
{else}
	{assign var="type" value="file"}
{/if}

{* Get page and parentId for URL *}
{if $parent instanceOf Issue}
	{assign var="page" value="issue"}
	{assign var="parentId" value=$parent->getBestIssueId()}
	{assign var="path" value=$parentId|to_array:$galley->getBestGalleyId($currentJournal)}
{else}
	{assign var="page" value="article"}
	{assign var="parentId" value=$parent->getBestId()}
	{if $publication && $publication->getId() !== $parent->getData('currentPublicationId')}
		{assign var="path" value=$parentId|to_array:'version':$publication->getId():$galley->getBestGalleyId($currentJournal)}
	{else}
		{assign var="path" value=$parentId|to_array:$galley->getBestGalleyId($currentJournal)}
	{/if}
{/if}

{* Get user access flag *}
{if !$hasAccess}
	{if $restrictOnlyPdf && $type=="pdf"}
		{assign var=restricted value="1"}
	{elseif !$restrictOnlyPdf}
		{assign var=restricted value="1"}
	{/if}
{/if}

{* Open PDF galleys inline in the browser and keep other files as downloads. *}
{assign var="galleyOp" value="download"}
{assign var="linkTarget" value=""}
{if $type == 'pdf'}
	{assign var="galleyOp" value="view"}
	{assign var="linkTarget" value="_blank"}
{/if}
<style>
/* Modern Galley Link Styles */
.galley-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 14px;
    background: #eef7f2;
    border: 1px solid #cfe8d8;
    border-radius: 6px;
    color: #073f22;
    font-family: 'Inter', sans-serif;
    font-size: 0.85em;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s ease;
    margin-right: 8px;
    margin-bottom: 8px;
}

.galley-link:hover {
    background: #073f22;
    color: #ffffff;
    border-color: #073f22;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(7, 63, 34, 0.15);
    transform: translateY(-1px);
}

.galley-download-count {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    margin-left: 4px;
    padding-left: 8px;
    border-left: 1px solid rgba(7, 63, 34, 0.15);
    font-size: 0.9em;
    font-weight: 700;
    color: inherit;
    opacity: 0.85;
}

.galley-link:hover .galley-download-count {
    border-left-color: rgba(22, 95, 28, 0.3);
}

.galley-download-count .glyphicon {
    font-size: 1.1em;
}
</style>

<a class="galley-link {if $isSupplementary}{else}{/if} {$type}" href="{url page=$page op=$galleyOp path=$path}"{if $linkTarget} target="{$linkTarget}" rel="noopener"{/if}>

	{* Add some screen reader text to indicate if a galley is restricted *}
	{if $restricted}
		<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
		<span class="sr-only">
			{if $purchaseArticleEnabled}
				{translate key="reader.subscriptionOrFeeAccess"}
			{else}
				{translate key="reader.subscriptionAccess"}
			{/if}
		</span>
	{/if}

	{$galley->getGalleyLabel()|escape}

	{if $type == 'pdf'}
		{assign var="galleyViews" value=$galley->getViews()}
		{if $galleyViews > 0}
			<span class="galley-download-count">
				<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
				<span>{$galleyViews}</span>
			</span>
		{/if}
	{/if}

	{if $restricted && $purchaseFee && $purchaseCurrency}
		<span class="purchase-cost">
			{translate key="reader.purchasePrice" price=$purchaseFee currency=$purchaseCurrency}
		</span>
	{/if}
</a>
