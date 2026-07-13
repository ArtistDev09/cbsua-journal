{**
 * templates/frontend/objects/article_details.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief View of an Article which displays all details about the article.
 *  Expected to be primary object on the page.
 *
 * @uses $article Article This article
 * @uses $issue Issue The issue this article is assigned to
 * @uses $section Section The journal section this article is assigned to
 * @uses $keywords array List of keywords assigned to this article
 * @uses $citationFactory @todo
 * @uses $pubIdPlugins @todo
 *}

{assign var=smarty_version value=$smarty.version|substr:0:1}
{if $publication}
	{assign var=articleKeywords value=$publication->getLocalizedData('keywords')}
{elseif $keywords}
	{assign var=articleKeywords value=$keywords}
{/if}

{* ========== ARTICLE DETAIL STYLES ========== *}
<style>
/* ── Article Hero Banner ── */
.article-hero-banner {
    position: relative;
    overflow: hidden;
    background: linear-gradient(160deg, #052e18 0%, #073f22 40%, #0a5c33 100%);
    margin: -20px -20px 0;
    padding: 40px 36px 36px;
    border-radius: 8px 8px 0 0;
}

.article-hero-banner::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
    background-size: 50px 50px;
    pointer-events: none;
}

.article-hero-banner::after {
    content: '';
    position: absolute;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(16,184,101,0.1) 0%, transparent 70%);
    top: -80px;
    right: -60px;
    border-radius: 50%;
    pointer-events: none;
}

.article-hero-banner .article-section-label {
    position: relative;
    z-index: 2;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 18px;
    padding: 5px 14px;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 6px;
    color: #34d988 !important;
    font-family: 'Inter', sans-serif;
    font-size: 0.78em;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    width: auto;
}

.article-hero-banner .article-section-label .fa {
    color: rgba(255,255,255,0.5);
}

.article-hero-banner .article-title {
    position: relative;
    z-index: 2;
    font-family: 'Poppins', sans-serif !important;
    font-size: 2.2em;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.2;
    margin: 0 0 12px;
    padding: 0;
    border: none;
    letter-spacing: -0.01em;
    text-shadow: 0 2px 16px rgba(5, 46, 24, 0.25);
}

.article-hero-banner .article-subtitle {
    position: relative;
    z-index: 2;
    font-family: 'Inter', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    color: rgba(255,255,255,0.7);
    line-height: 1.55;
    margin: 0;
}

/* ── Modernized Breadcrumbs ── */
.article-page .cmp_breadcrumbs {
    margin-bottom: 24px;
}

.article-page .cmp_breadcrumbs .breadcrumb {
    background: transparent;
    padding: 12px 0;
    margin: 0;
    border-radius: 0;
    font-family: 'Inter', sans-serif;
    font-size: 0.85em;
}

.article-page .cmp_breadcrumbs .breadcrumb > li + li::before {
    content: "›";
    color: #9ca8a0;
    padding: 0 8px;
}

.article-page .cmp_breadcrumbs .breadcrumb > li a {
    color: #607064;
    text-decoration: none;
    transition: color 0.2s ease;
}

.article-page .cmp_breadcrumbs .breadcrumb > li a:hover {
    color: #073f22;
}

.article-page .cmp_breadcrumbs .breadcrumb > li.active {
    color: #073f22;
    font-weight: 600;
}

/* ── Article Body Container ── */
.article-body-content {
    margin: -20px -20px 0;
    padding: 0 36px 36px;
    background: #ffffff;
    border-radius: 0 0 8px 8px;
}

/* ── Sidebar Meta Card Override ── */
.article-details--enhanced .article-meta-card {
    max-width: none;
    margin: 0 0 28px;
    border-radius: 10px;
    border: 1px solid #e2ebe6;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.06);
    overflow: hidden;
}

.article-details--enhanced .article-meta-heading {
    padding: 14px 18px;
    background: linear-gradient(135deg, #073f22, #0a5c33);
    font-family: 'Inter', sans-serif;
    font-size: 0.88em;
    letter-spacing: 0.03em;
}

.article-details--enhanced .article-meta-heading .fa {
    opacity: 0.7;
}

.article-details--enhanced .article-meta-item {
    padding: 12px 18px;
    font-family: 'Inter', sans-serif;
    font-size: 0.9em;
    transition: background 0.2s ease;
}

.article-details--enhanced .article-meta-item:hover {
    background: #f8fbf9;
}

.article-details--enhanced .article-meta-label {
    font-size: 0.85em;
    color: #607064;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.03em;
}

.article-details--enhanced .article-meta-value {
    color: #1f2d24;
    font-weight: 500;
}

/* ── Sidebar Cover Image ── */
.article-details--enhanced .article-sidebar .cover-image {
    max-width: none;
    margin: 0 0 28px;
    padding: 8px;
    border-radius: 10px;
    border: 1px solid #e2ebe6;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.06);
    background: #ffffff;
}

.article-details--enhanced .article-sidebar .cover-image img {
    border-radius: 6px;
}

/* ── Detail Blocks ── */
.article-details--enhanced .article-detail-block {
    border-radius: 10px;
    border: 1px solid #e2ebe6;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.05);
    padding: 30px;
}

.article-details--enhanced .article-block-label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 16px;
    padding: 6px 14px;
    background: #eef7f2;
    border: 1px solid #cfe8d8;
    border-radius: 6px;
    color: #073f22;
    font-family: 'Inter', sans-serif;
    font-size: 0.8em;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    width: auto;
}

.article-details--enhanced .article-block-label .fa {
    color: #1f8f4a;
}

/* ── Authors ── */
.article-details--enhanced .article-author-card {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 16px;
    margin-bottom: 8px;
    background: #fbfdfc;
    border: 1px solid #edf1ee;
    border-radius: 8px;
    transition: border-color 0.2s ease, box-shadow 0.2s ease;
}

.article-details--enhanced .article-author-card:hover {
    border-color: #cfe8d8;
    box-shadow: 0 4px 12px rgba(7, 63, 34, 0.06);
}

.article-details--enhanced .article-block-label + .article-author-card {
    border-top: 1px solid #edf1ee;
}

.article-details--enhanced .article-author-name {
    font-family: 'Inter', sans-serif;
    font-weight: 600;
    color: #1f2d24;
    font-size: 1em;
}

.article-details--enhanced .article-author-affilitation {
    font-family: 'Inter', sans-serif;
    font-size: 0.88em;
    color: #607064;
    margin-top: 4px;
}

.article-details--enhanced .orcid a {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    margin-top: 6px;
    padding: 3px 10px;
    background: #f0f4ff;
    border: 1px solid #d4deff;
    border-radius: 4px;
    color: #31319e;
    font-size: 0.82em;
    font-weight: 500;
    text-decoration: none;
    transition: background 0.2s ease;
}

.article-details--enhanced .orcid a:hover {
    background: #e4eaff;
}

/* ── Abstract ── */
.article-details--enhanced .article-abstract {
    font-family: 'Inter', sans-serif;
    font-size: 1em;
    line-height: 1.85;
    color: #2d3d33;
    text-align: justify;
    hyphens: auto;
}

/* ── Keywords ── */
.article-details--enhanced .article-keywords {
    border-radius: 10px;
    border: 1px solid #e2ebe6;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.05);
}

.article-details--enhanced .article-keyword {
    display: inline-flex;
    align-items: center;
    padding: 6px 14px;
    background: #eef7f2;
    border: 1px solid #cfe8d8;
    border-radius: 20px;
    color: #073f22;
    font-family: 'Inter', sans-serif;
    font-size: 0.85em;
    font-weight: 600;
    transition: all 0.2s ease;
}

.article-details--enhanced .article-keyword:hover {
    background: #073f22;
    color: #ffffff;
    border-color: #073f22;
    transform: translateY(-1px);
}

/* ── Panels (How to Cite, Bios, Subject, License) ── */
.article-details--enhanced .article-more-details .panel {
    border: 1px solid #e2ebe6;
    border-radius: 10px;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.05);
    overflow: hidden;
    margin-bottom: 20px;
}

.article-details--enhanced .article-more-details .panel-default > .panel-heading {
    background: linear-gradient(135deg, #f8fbf9, #eef6f1);
    border-bottom: 1px solid #e2ebe6;
    color: #073f22;
    font-family: 'Inter', sans-serif;
    font-size: 1em;
    font-weight: 700;
    padding: 16px 20px;
}

.article-details--enhanced .article-more-details .panel-default > .panel-heading .fa {
    color: #1f8f4a;
    margin-right: 8px;
}

.article-details--enhanced .article-more-details .panel-body {
    padding: 20px;
    font-family: 'Inter', sans-serif;
    font-size: 0.92em;
    line-height: 1.7;
    color: #34443b;
}

/* ── Citation dropdown ── */
.article-details--enhanced .how-to-cite .btn-group {
    margin: 16px 0 0;
}

.article-details--enhanced .how-to-cite .btn-default {
    background: #eef7f2;
    border: 1px solid #cfe8d8;
    color: #073f22;
    font-family: 'Inter', sans-serif;
    font-size: 0.85em;
    font-weight: 600;
    border-radius: 6px;
    padding: 8px 16px;
    transition: all 0.2s ease;
}

.article-details--enhanced .how-to-cite .btn-default:hover {
    background: #073f22;
    color: #ffffff;
    border-color: #073f22;
}

.article-details--enhanced .how-to-cite .dropdown-menu {
    border: 1px solid #e2ebe6;
    border-radius: 8px;
    box-shadow: 0 8px 24px rgba(7, 63, 34, 0.12);
    padding: 6px;
}

.article-details--enhanced .how-to-cite .dropdown-menu li a {
    border-radius: 4px;
    padding: 8px 14px;
    font-size: 0.9em;
    color: #34443b;
    transition: background 0.15s ease;
}

.article-details--enhanced .how-to-cite .dropdown-menu li a:hover {
    background: #eef7f2;
    color: #073f22;
}

/* ── References ── */
.article-details--enhanced .article-references {
    margin: 28px 0 0;
    padding: 28px;
    background: #ffffff;
    border: 1px solid #e2ebe6;
    border-radius: 10px;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.05);
}

.article-details--enhanced .article-references h2 {
    font-family: 'Inter', sans-serif;
    font-size: 1.1em;
    font-weight: 700;
    color: #073f22;
    margin: 0 0 20px;
    padding-bottom: 14px;
    border-bottom: 2px solid #eef7f2;
}

.article-details--enhanced .article-references h2 .fa {
    color: #1f8f4a;
}

.article-details--enhanced .article-references-content ol {
    padding-left: 24px;
    margin: 0;
}

.article-details--enhanced .article-references-content ol li {
    padding: 10px 0;
    border-bottom: 1px solid #f4f7f5;
    font-family: 'Inter', sans-serif;
    font-size: 0.9em;
    line-height: 1.65;
    color: #3d4d44;
}

.article-details--enhanced .article-references-content ol li:last-child {
    border-bottom: none;
}

/* ── Biography section ── */
.article-details--enhanced .author-bios .biography {
    padding: 16px 0;
    border-bottom: 1px solid #edf1ee;
}

.article-details--enhanced .author-bios .biography:last-child {
    border-bottom: none;
}

.article-details--enhanced .author-bios .biography h3 {
    font-family: 'Inter', sans-serif;
    font-size: 1.05em;
    font-weight: 600;
    color: #073f22;
}

/* ── Responsive ── */
@media (max-width: 767px) {
    .article-hero-banner {
        margin: -20px -20px 0;
        padding: 28px 20px 24px;
    }

    .article-hero-banner .article-title {
        font-size: 1.6em;
    }

    .article-body-content {
        padding: 0 20px 20px;
    }

    .article-details--enhanced .article-detail-block {
        padding: 20px;
    }

    .article-details--enhanced .article-author-card {
        flex-direction: column;
        gap: 8px;
    }

    .article-details--enhanced .article-references {
        padding: 20px;
    }
}
</style>

<article class="article-details article-details--enhanced">

	{* ── Article Hero Banner ── *}
	<div class="article-hero-banner">
		{if $section}
			<div class="article-section-label">
				<i class="fa fa-folder-open-o" aria-hidden="true"></i>
				<span>{translate key="section.section"} {$section->getLocalizedTitle()|escape}</span>
			</div>
		{/if}
		<h1 class="page-header article-title">
			{$article->getLocalizedTitle()|escape}
		</h1>
		{if $article->getLocalizedSubtitle()}
			<p class="article-subtitle">
				{$article->getLocalizedSubtitle()|escape}
			</p>
		{/if}
	</div>

	{* ── Article Body ── *}
	<div class="article-body-content">

	{assign var="articlePdfGalley" value=null}
	{if $primaryGalleys}
		{foreach from=$primaryGalleys item=galley}
			{if $galley->isPdfGalley()}
				{assign var="articlePdfGalley" value=$galley}
				{break}
			{/if}
		{/foreach}
	{/if}
	{if !$articlePdfGalley && $supplementaryGalleys}
		{foreach from=$supplementaryGalleys item=galley}
			{if $galley->isPdfGalley()}
				{assign var="articlePdfGalley" value=$galley}
				{break}
			{/if}
		{/foreach}
	{/if}

	<div class="row article-details-grid">

		<section class="article-sidebar col-md-4">

			{* Screen-reader heading for easier navigation jumps *}
			<h2 class="sr-only">{translate key="plugins.themes.academic_pro.article.sidebar"}</h2>

			{* Article/Issue cover image *}
			{if $article->getLocalizedCoverImage() || $issue->getLocalizedCoverImage()}
				<div class="cover-image">
					{if $article->getLocalizedCoverImage()}
						<img class="img-responsive" src="{$article->getLocalizedCoverImageUrl()|escape}"{if $article->getLocalizedCoverImageAltText()} alt="{$article->getLocalizedCoverImageAltText()|escape}"{/if}>
					{else}
						<a href="{url page="issue" op="view" path=$issue->getBestIssueId()}">
							<img class="img-responsive" src="{$issue->getLocalizedCoverImageUrl()|escape}"{if $issue->getLocalizedCoverImageAltText()} alt="{$issue->getLocalizedCoverImageAltText()|escape}"{/if}>
						</a>
					{/if}
				</div>
			{/if}

			<div class="list-group article-meta-card">
				<div class="list-group-item article-meta-heading">
					<i class="fa fa-info-circle" aria-hidden="true"></i>
					<span>Article Details</span>
				</div>

				{* Submitted date *}
				{if $article->getDateSubmitted()}
					<div class="list-group-item date-submitted article-meta-item">
						<span class="article-meta-label">{translate key="submissions.submitted" default="Submitted"}</span>
						<span class="article-meta-value">{$article->getDateSubmitted()|escape}</span>
					</div>
				{/if}

				{* Accepted date (if available) *}
				{if $article->getData('dateAccepted')}
					<div class="list-group-item date-accepted article-meta-item">
						<span class="article-meta-label">{translate key="submissions.accepted" default="Accepted"}</span>
						<span class="article-meta-value">{$article->getData('dateAccepted')|escape}</span>
					</div>
				{/if}

				{* Published date *}
				{if $article->getDatePublished()}
					<div class="list-group-item date-published article-meta-item">
						<span class="article-meta-label">{translate key="submissions.published"}</span>
						<span class="article-meta-value">{$article->getDatePublished()|escape}</span>
					</div>
				{/if}

				{if $article->getPages()}
					<div class="list-group-item article-meta-item">
						<span class="article-meta-label">Pages</span>
						<span class="article-meta-value">{$article->getPages()|escape}</span>
					</div>
				{/if}

				{* Galleys / PDF Download *}
				{if $primaryGalleys || $supplementaryGalleys}
					<div class="list-group-item article-meta-item" style="border-top: 1px solid #e2ebe6; margin-top: 10px; padding-top: 20px;">
						<span class="article-meta-label" style="margin-bottom: 12px; display: block;">Full Article</span>
						<div class="article-galleys-list" style="display: flex; flex-direction: column; gap: 10px;">
							{foreach from=$primaryGalleys item=galley}
								{include file="frontend/objects/galley_link.tpl" parent=$article galley=$galley purchaseFee=$currentJournal->getSetting('purchaseArticleFee') purchaseCurrency=$currentJournal->getSetting('currency')}
							{/foreach}
							{foreach from=$supplementaryGalleys item=galley}
								{include file="frontend/objects/galley_link.tpl" parent=$article galley=$galley isSupplementary="1"}
							{/foreach}
						</div>
					</div>
				{/if}

				{* DOI (requires plugin) *}
				{* make compatible with ojs 3.1.2 *}
					{if $smarty_version == '2'} 
						{include file="legacy/article_detail_doi_3.1.1.tpl"}
					{else}
						{include file="legacy/article_detail_doi_3.1.2.tpl"}
					{/if}
				{* end compatible check *}
			</div>

		</section><!-- .article-sidebar -->

		<div class="col-md-8">
			<section class="article-main">
				{* Screen-reader heading for easier navigation jumps *}
				<h2 class="sr-only">{translate key="plugins.themes.academic_pro.article.main"}</h2>

				{if $issue || $article->getAuthors() || $article->getLocalizedAbstract()}
					<div class="article-core-details article-detail-block">
						{* Issue *}
						{if $issue}
							<div class="issue_detail article-detail-section">
								<div class="article-block-label">
									<i class="fa fa-book" aria-hidden="true"></i>
									<span>Issue</span>
								</div>
								<a class="title" href="{url page="issue" op="view" path=$issue->getBestIssueId($currentJournal)}">
									{$issue->getIssueIdentification()}
								</a>
							</div>
						{/if}

						{if $article->getAuthors()}
							<div class="authors article-detail-section">
								<div class="article-block-label">
									<i class="fa fa-users" aria-hidden="true"></i>
									<span>Authors</span>
								</div>
								{foreach from=$article->getAuthors() item=author}
									<div class="author article-author-card">
										<div class="article-author-content">
										<strong class="article-author-name">{$author->getFullName()|escape}</strong>
										{if $author->getLocalizedAffiliation()}
											<div class="article-author-affilitation">
												{$author->getLocalizedAffiliation()|escape}
											</div>
										{/if}
										{if $author->getOrcid()}
											<div class="orcid">
												<a href="{$author->getOrcid()|escape}" target="_blank">
													{$author->getOrcid()|escape}
												</a>
											</div>
										{/if}
										</div>
									</div>
								{/foreach}
							</div>
						{/if}

						{* Article abstract *}
						{if $article->getLocalizedAbstract()}
							<div class="article-summary article-detail-section" id="summary">
								<div class="article-block-label">
									<span>{translate key="article.abstract"}</span>
								</div>
								<div class="article-abstract" style="text-align: justify;">
									{$article->getLocalizedAbstract()|strip_tags|regex_replace:"/[\r\n]+/":" "}
								</div>
							</div>
						{/if}
					</div>
				{/if}

				{* Keywords *}
				{if !empty($articleKeywords)}
					<div class="article-keywords article-detail-block">
						<div class="article-block-label">
							<i class="fa fa-tags" aria-hidden="true"></i>
							<span>Keywords</span>
						</div>
						<div class="article-keyword-list">
							{foreach from=$articleKeywords item=keyword}
								<span class="article-keyword">{$keyword|escape}</span>
							{/foreach}
						</div>
					</div>
				{/if}

			</section><!-- .article-main -->

			<section class="article-more-details">

				{* Screen-reader heading for easier navigation jumps *}
				<h2 class="sr-only">{translate key="plugins.themes.academic_pro.article.details"}</h2>

				{* PubIds (requires plugins) *}
				{* make compatible with ojs 3.1.2 *}
				{if $smarty_version == '2'} 
					{include file="legacy/article_detail_pubs_3.1.1.tpl"}
				{else}
					{include file="legacy/article_detail_pubs_3.1.2.tpl"}
				{/if}
				{* end compatible check *}

				{* Article Subject *}
				{if $article->getLocalizedSubject()}
					<div class="panel panel-default subject">
						<div class="panel-heading">
							{translate key="article.subject"}
						</div>
						<div class="panel-body">
							{$article->getLocalizedSubject()|escape}
						</div>
					</div>
				{/if}

				{* Licensing info *}
				{if $copyright || $licenseUrl}
					<div class="panel panel-default copyright">
						<div class="panel-body">
							{if $licenseUrl}
								{if $ccLicenseBadge}
									{$ccLicenseBadge}
								{else}
									<a href="{$licenseUrl|escape}" class="copyright">
										{if $copyrightHolder}
											{translate key="submission.copyrightStatement" copyrightHolder=$copyrightHolder copyrightYear=$copyrightYear}
										{else}
											{translate key="submission.license"}
										{/if}
									</a>
								{/if}
							{/if}
							{$copyright}
						</div>
					</div>
				{/if}

				{* Author biographies *}
				{assign var="hasBiographies" value=0}
				{foreach from=$article->getAuthors() item=author}
					{if $author->getLocalizedBiography()}
						{assign var="hasBiographies" value=$hasBiographies+1}
					{/if}
				{/foreach}
				{if $hasBiographies}
					<div class="panel panel-default author-bios">
						<div class="panel-heading">
							{if $hasBiographies > 1}
								<i class="fa fa-users"> </i>{translate key="submission.authorBiographies"}
							{else}
								<i class="fa fa-user"> </i>{translate key="submission.authorBiography"}
							{/if}
						</div>
						<div class="panel-body">
							{foreach from=$article->getAuthors() item=author}
								{if $author->getLocalizedBiography()}
									<div class="media biography">
										<div class="media-body">
											<h3 class="media-heading biography-author">
												{if $author->getLocalizedAffiliation()}
													{capture assign="authorName"}{$author->getFullName()|escape}{/capture}
													{capture assign="authorAffiliation"}<span class="affiliation">{$author->getLocalizedAffiliation()|escape}</span>{/capture}
													{translate key="submission.authorWithAffiliation" name=$authorName affiliation=$authorAffiliation}
												{else}
													{$author->getFullName()|escape}
												{/if}
											</h3>
											{$author->getLocalizedBiography()|strip_unsafe_html}
										</div>
									</div>
								{/if}
							{/foreach}
						</div>
					</div>
				{/if}

				{* How to cite *}
				{if $citation}
					<div class="panel panel-default how-to-cite">
						<div class="panel-heading">
							<i class="fa fa-file-text"> </i>  {translate key="submission.howToCite"}
						</div>
						<div class="panel-body">
							<div id="citationOutput" role="region" aria-live="polite">
								{$citation}
							</div>
							<div class="btn-group">
							  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-controls="cslCitationFormats">
							    {translate key="submission.howToCite.citationFormats"}
									<span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" role="menu">
									{foreach from=$citationStyles item="citationStyle"}
										<li>
											<a
												aria-controls="citationOutput"
												href="{url page="citationstylelanguage" op="get" path=$citationStyle.id params=$citationArgs}"
												data-load-citation
												data-json-href="{url page="citationstylelanguage" op="get" path=$citationStyle.id params=$citationArgsJson}"
											>
												{$citationStyle.title|escape}
											</a>
										</li>
									{/foreach}
							  </ul>
							</div>
						</div>
					</div>
				{/if}

				{call_hook name="Templates::Article::Details"}

				{* References *}
				{if $article->getCitations()}
					<div class="article-references">
						<h2><i class="fa fa-bookmark-o text-primary"> </i> {translate key="submission.citations"}</h2>
						<div class="article-references-content">
							 <ol>
							{if $parsedCitations}
							{foreach from=$parsedCitations item="parsedCitation"}
								<li>{$parsedCitation->getCitationWithLinks()|strip_unsafe_html} {call_hook name="Templates::Article::Details::Reference" citation=$parsedCitation}</li>
							{/foreach}
							{else}
							{$publication->getData('citationsRaw')|escape|nl2br}
							{/if}
						 </ol>
						</div>
					</div>
				{/if}

			</section><!-- .article-details -->
		</div><!-- .col-md-8 -->
	</div><!-- .row -->

	</div><!-- .article-body-content -->

</article>
