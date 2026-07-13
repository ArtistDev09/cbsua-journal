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
{if (!$section.hideAuthor && $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_DEFAULT) || $article->getHideAuthor() == $smarty.const.AUTHOR_TOC_SHOW}
  {assign var="showAuthor" value=true}
{/if}

<div class="article-summary media">
  {if $article->getLocalizedCoverImage()}
    <div class="cover media-left">
      <a href="{url page="article" op="view" path=$articlePath}" class="file">
        <img class="media-object" src="{$article->getLocalizedCoverImageUrl()|escape}">
      </a>
    </div>
  {/if}

  <div class="media-body">
    <h3 class="media-heading" style="font-family: Arial, Helvetica, sans-serif; display:flex; align-items:center; flex-wrap:wrap; gap:8px;">
      <a href="{url page="article" op="view" path=$articlePath}">
        {$article->getLocalizedTitle()|strip_unsafe_html}
      </a>
      {if !$hideGalleys && $articleGalleys}
        <span class="inline-title-galleys" style="display:inline-flex; align-items:center; margin-left:12px;">
          {foreach from=$articleGalleys item=galley}
            {if $primaryGenreIds}
              {assign var="file" value=$galley->getFile()}
              {if !$galley->getRemoteUrl() && !($file && in_array($file->getGenreId(), $primaryGenreIds))}
                {continue}
              {/if}
            {/if}
            {assign var=publication value=$article->getCurrentPublication()}
            {assign var="hasArticleAccess" value=$hasAccess}
            {if $currentContext->getSetting('publishingMode') == $smarty.const.PUBLISHING_MODE_OPEN || $publication->getData('accessStatus') == $smarty.const.ARTICLE_ACCESS_OPEN}
              {assign var="hasArticleAccess" value=1}
            {/if}
            {include file="frontend/objects/galley_link.tpl" parent=$article publication=$publication hasAccess=$hasArticleAccess currentJournal=$currentJournal}
          {/foreach}
        </span>
      {/if}
      {assign var="articleViews" value=$article->getViews()}
      {if $articleViews > 0}
        <span class="article-summary-stats" style="display:inline-flex; align-items:center; gap:3px; margin-left:8px; padding: 1px 6px; background: #eef7f2; border: 1px solid #cfe8d8; border-radius: 10px; font-size: 0.78em; font-weight: 600; color: #073f22; font-family: 'Inter', sans-serif;">
          <span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="font-size: 0.95em; opacity: 0.85;"></span>
          <span>{$articleViews}</span>
        </span>
      {/if}
      {if $article->getLocalizedSubtitle()}
        <p>
          <small>{$article->getLocalizedSubtitle()|escape}</small>
        </p>
      {/if}
    </h3>

    <div class="article-details-summary" style="margin-top: 12px; font-family: 'Inter', sans-serif; font-size: 0.95em; color: #34443b; line-height: 1.6;">
      {if $issue}
        <div class="article-issue" style="font-weight: 600; color: #073f22; margin-bottom: 8px;">
          {$issue->getIssueIdentification()|strip_unsafe_html}
        </div>
      {/if}

      {if $article->getLocalizedAbstract()}
        <div class="article-abstract" style="margin-bottom: 8px;">
          <strong style="color: #073f22;">Abstract:</strong> {$article->getLocalizedAbstract()|strip_tags|truncate:400:"..."}
        </div>
      {/if}

      {if $showAuthor}
        <div class="article-authors" style="margin-bottom: 8px;">
          <strong style="color: #073f22;">Authors:</strong> {$article->getAuthorString()}
        </div>
      {/if}

      {assign var=publication value=$article->getCurrentPublication()}
      {assign var=articleKeywords value=''}
      {if $publication}
        {assign var=articleKeywords value=$publication->getLocalizedData('keywords')}
      {/if}
      {if !empty($articleKeywords)}
        <div class="article-keywords" style="margin-bottom: 8px;">
          <strong style="color: #073f22;">Keywords:</strong> 
          {foreach name="keywords" from=$articleKeywords item=keyword}
            {$keyword|escape}{if !$smarty.foreach.keywords.last}, {/if}
          {/foreach}
        </div>
      {/if}

      {if $article->getDatePublished()}
        <div class="article-year" style="margin-bottom: 8px;">
          <strong style="color: #073f22;">Year Published:</strong> {$article->getDatePublished()|date_format:"%Y"}
        </div>
      {elseif $issue && $issue->getYear()}
        <div class="article-year" style="margin-bottom: 8px;">
          <strong style="color: #073f22;">Year Published:</strong> {$issue->getYear()|escape}
        </div>
      {/if}

      {* Page numbers for this article *}
      {if $article->getPages()}
        <div class="article-pages" style="margin-bottom: 8px;">
          <strong style="color: #073f22;">Pages:</strong> {$article->getPages()|escape}
        </div>
      {/if}
    </div>

  </div>

  {call_hook name="Templates::Issue::Issue::Article"}
</div><!-- .article-summary -->