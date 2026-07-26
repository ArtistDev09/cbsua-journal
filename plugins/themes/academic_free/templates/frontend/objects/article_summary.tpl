{**
 * templates/frontend/objects/article_summary.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief View of an Article summary which is shown within a list of articles.
 *
 * @uses $article Article The article
 * @uses $hasAccess bool Can this user access galleys for this context? The
 *       context may be an issue or an article
 * @uses $showGalleyLinks bool Show galley links to users without access?
 * @uses $hideGalleys bool Hide the article galleys for this article?
 * @uses $primaryGenreIds array List of file genre ids for primary file types
 *}
{assign var=smarty_version value=$smarty.version|substr:0:1}
{assign var=articlePath value=$article->getBestArticleId($currentJournal)}
{assign var=publication value=$article->getCurrentPublication()}
{assign var="articleGalleys" value=$article->getGalleys()}
{if $publication && $publication->getData('galleys')}
  {assign var="articleGalleys" value=$publication->getData('galleys')}
{/if}

<div class="article-summary media" style="padding: 24px 0; border-bottom: 1px solid #edf1ee; margin-bottom: 0;">
  {if $article->getLocalizedCoverImage()}
    <div class="cover media-left" style="padding-right: 20px;">
      <a href="{url page="article" op="view" path=$articlePath}">
        <img class="media-object" src="{$article->getLocalizedCoverImageUrl()|escape}" alt="Article Cover" style="max-width: 140px; height: auto; border-radius: 6px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06); transition: transform 0.2s ease;">
      </a>
    </div>
  {/if}

  <div class="media-body">
    {* Keywords/Study Focus Tags *}
    {assign var="articleKeywords" value=""}
    {if $publication}
      {assign var="articleKeywords" value=$publication->getLocalizedData('keywords')}
    {/if}
    {if !empty($articleKeywords) || $section}
      <div class="article-summary-theme" style="margin-bottom: 8px; display: flex; flex-wrap: wrap; gap: 6px;">
        {if !empty($articleKeywords)}
          {foreach from=$articleKeywords item=keyword name=keywordLoop}
            <span style="display: inline-block; font-family: 'Inter', sans-serif; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em; color: #1a7b41; background: #eef7f2; padding: 4px 10px; border-radius: 4px; line-height: 1.25;">
              {$keyword|escape}
            </span>
          {/foreach}
        {elseif $section}
          <span style="display: inline-block; font-family: 'Inter', sans-serif; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.06em; color: #1a7b41; background: #eef7f2; padding: 4px 10px; border-radius: 4px; line-height: 1.25;">
            {if is_array($section)}
              {$section.title|escape}
            {elseif is_object($section)}
              {$section->getLocalizedTitle()|escape}
            {else}
              {$section|escape}
            {/if}
          </span>
        {/if}
      </div>
    {/if}

    {* Title *}
    <h3 class="media-heading article-summary-title" style="font-family: 'Poppins', sans-serif; font-size: 1.25em; font-weight: 700; line-height: 1.35; margin: 4px 0 8px;">
      <a href="{url page="article" op="view" path=$articlePath}" style="color: #073f22; text-decoration: none; transition: color 0.2s ease;">
        {$article->getLocalizedTitle()|strip_unsafe_html}
      </a>
    </h3>

    {* Subtitle *}
    {if $article->getLocalizedSubtitle()}
      <p style="font-family: 'Inter', sans-serif; font-size: 0.95em; color: #607064; margin: -4px 0 8px;">
        {$article->getLocalizedSubtitle()|escape}
      </p>
    {/if}

    {* Authors and Pages Row *}
    <div class="article-summary-meta" style="display: flex; justify-content: space-between; align-items: center; font-family: 'Inter', sans-serif; font-size: 13px; color: #506054; margin-bottom: 14px;">
      <span class="article-summary-authors" style="font-weight: 500;">
        {$article->getAuthorString()}
      </span>
      {if $article->getPages()}
        <span class="article-summary-pages" style="font-weight: 600; color: #6b7280; font-family: monospace; font-size: 12px; background: #f3f4f6; padding: 2px 6px; border-radius: 4px;">
          {$article->getPages()|escape}
        </span>
      {/if}
    </div>

    {* Abstract Snippet *}
    {if $article->getLocalizedAbstract()}
      <div class="article-summary-abstract" style="font-family: 'Inter', sans-serif; font-size: 13px; line-height: 1.6; color: #506054; margin-bottom: 14px; text-align: justify;">
        {$article->getLocalizedAbstract()|strip_tags|truncate:220:"..."}
      </div>
    {/if}

    {* Action Buttons and Stats *}
    <div class="article-summary-actions">
      {* PDF/Fulltext links *}
      {if !$hideGalleys && $articleGalleys}
        {foreach from=$articleGalleys item=galley}
          {if $primaryGenreIds}
            {assign var="file" value=$galley->getFile()}
            {if !$galley->getRemoteUrl() && !($file && in_array($file->getGenreId(), $primaryGenreIds))}
              {continue}
            {/if}
          {/if}
          {assign var="hasArticleAccess" value=$hasAccess}
          {if $currentContext->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_OPEN || $publication->getData('accessStatus') == $smarty.const.ARTICLE_ACCESS_OPEN}
            {assign var="hasArticleAccess" value=1}
          {/if}
          
          {assign var="gPath" value=$articlePath|to_array:$galley->getBestGalleyId($currentJournal)}
          {if $publication && $publication->getId() !== $article->getData('currentPublicationId')}
            {assign var="gPath" value=$articlePath|to_array:'version':$publication->getId():$galley->getBestGalleyId($currentJournal)}
          {/if}
          
          {assign var="galleyOp" value="download"}
          {if $galley->isPdfGalley()}
            {assign var="galleyOp" value="view"}
          {/if}

          <a href="{url page="article" op=$galleyOp path=$gPath}" class="fulltext-btn" {if $galley->isPdfGalley()}target="_blank" rel="noopener"{/if}>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-top: -1px;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            <span>{$galley->getGalleyLabel()|escape}</span>
          </a>
        {/foreach}
      {/if}

      {* Abstract Views Stat *}
      {assign var="articleViews" value=$article->getViews()}
      {if $articleViews > 0}
        <span class="stats-badge-views" title="Views">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-top: -1px;"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
          <span>{$articleViews}</span>
        </span>
      {/if}

      {* PDF Downloads Stat *}
      {assign var="totalDownloads" value=0}
      {if $articleGalleys}
        {foreach from=$articleGalleys item=g}
          {assign var="totalDownloads" value=$totalDownloads+$g->getViews()}
        {/foreach}
      {/if}
      {if $totalDownloads > 0}
        <span class="stats-badge-downloads" title="Downloads">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-top: -1px;"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          <span>{$totalDownloads}</span>
        </span>
      {/if}
    </div>

  </div>
</div>