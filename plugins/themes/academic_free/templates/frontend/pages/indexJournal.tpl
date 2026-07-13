{**
 * templates/frontend/pages/indexJournal.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display the index page for a journal
 *
 * @uses $currentJournal Journal This journal
 * @uses $journalDescription string Journal description from HTML text editor
 * @uses $homepageImage object Image to be displayed on the homepage
 * @uses $additionalHomeContent string Arbitrary input from HTML text editor
 * @uses $announcements array List of announcements
 * @uses $journalThumbnail
 * @uses $numAnnouncementsHomepage int Number of announcements to display on the
 *       homepage
 * @uses $issue Issue Current issue
 * @uses $article
 *}
 
{assign var=smarty_version value=$smarty.version|substr:0:1}
 
{include file="frontend/components/header.tpl" pageTitleTranslated=$currentJournal->getLocalizedName()}

<style>
/* ── Journal Homepage Modernization ── */
.page_index_journal {
    font-family: 'Inter', sans-serif;
}

/* Welcome Banner */
.journal-welcome-banner {
    background: linear-gradient(135deg, #f0fdf4 0%, #e2fce9 100%);
    border: 1px solid #bbf7d0;
    color: #1a7b41;
    border-radius: 12px;
    padding: 12px 16px;
    margin: 12px 0 16px;
    font-size: 1.15em;
    text-align: center;
    box-shadow: 0 4px 12px rgba(26, 123, 65, 0.08);
}

.journal-welcome-banner strong {
    color: #167144ff;
    font-family: 'Playfair Display', serif;
    font-size: 1.25em;
    font-weight: 700;
}

/* Journal Information Section */
.journal-info-section {
    display: flex;
    flex-wrap: wrap;
    gap: 36px;
    margin-bottom: 50px;
    background: #ffffff;
    border: 1px solid #e2ebe6;
    border-radius: 12px;
    padding: 36px;
    box-shadow: 0 4px 20px rgba(7, 63, 34, 0.04);
}

.journal-info-description {
    flex: 1 1 400px;
    font-size: 1.05em;
    line-height: 1.7;
    color: #34443b;
    text-align: justify;
}

.journal-info-description h2 {
    font-family: 'Playfair Display', serif;
    color: #073f22;
    font-size: 1.8em;
    font-weight: 700;
    margin: 0 0 16px;
}

/* Homepage Image */
.journal-homepage-image {
    margin-bottom: 40px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 24px rgba(7, 63, 34, 0.1);
}

.journal-homepage-image img {
    width: 100%;
    height: auto;
    display: block;
}

/* Current Issue Section */
.journal-current-issue {
    background: #ffffff;
    border: 1px solid #e2ebe6;
    border-radius: 12px;
    padding: 40px;
    margin-bottom: 50px;
    box-shadow: 0 4px 20px rgba(7, 63, 34, 0.04);
    position: relative;
    overflow: hidden;
}

/* Decorative accent for issue */
.journal-current-issue::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #10b865, #d4a853, #10b865);
}

.journal-current-issue header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid #edf1ee;
    flex-wrap: wrap;
    gap: 16px;
}

.journal-current-issue h2 {
    font-family: 'Playfair Display', serif;
    color: #073f22;
    font-size: 2.2em;
    font-weight: 800;
    margin: 0;
}

.current_issue_title {
    font-size: 1.2em;
    color: #1f8f4a;
    font-weight: 600;
    margin: 0;
}

.btn-view-all {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #eef7f2;
    color: #10b865;
    border: 1px solid #cfe8d8;
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.25s ease;
}

    .btn-view-all:hover {
        background: #10b865;
        color: #ffffff;
        border-color: #10b865;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(16, 184, 101, 0.2);
        transform: translateY(-2px);
    }

    /* Responsive Overrides */
    @media (max-width: 767px) {
        .journal-info-section {
            flex-direction: column;
            align-items: center;
            padding: 24px;
        }
        
        .journal-info-thumbnail {
            flex: 0 0 auto;
            max-width: 200px;
        }
        
        .journal-info-description {
            text-align: left;
        }

        .journal-current-issue {
            padding: 24px;
        }

        .journal-current-issue header {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>

<div id="main-content" class="page_index_journal" role="content">

	{* Modern Welcome Banner *}
	<div class="journal-welcome-banner">
		<strong>Welcome!</strong> to CBSUA Journals.
	</div>

	{call_hook name="Templates::Index::journal"}

	{* Homepage Image *}
	{if $homepageImage}
		<div class="journal-homepage-image">
			<img src="{$publicFilesDir}/{$homepageImage.uploadName|escape:"url"}" alt="{$homepageImageAltText|escape}">
		</div>
	{/if}

	{* Journal Info (Description) *}
	{if $journalDescription}
		{capture assign="url"}{url journal=$currentJournal->getPath()}{/capture}
		{assign var="description" value=$currentJournal->getLocalizedDescription()}	

		<section class="journal-info-section">
			{if $description}
				<div class="journal-info-description">
					<h2>About the Journal</h2>
					{$description}
				</div>
			{/if}
		</section>
	{/if}

	{* Announcements *}
	{* make compatible with ojs 3.1.2 *}
	{if $smarty_version == '2'} 
		{include file="legacy/indexJournal_announcements_3.1.1.tpl"}
	{else}
		{include file="legacy/indexJournal_announcements_3.1.2.tpl"}
	{/if}

	{* Latest issue *}
	{if $issue}
		<section class="journal-current-issue">
			<header>
				<div>
					<h2>{translate key="journal.currentIssue"}</h2>
					<p class="current_issue_title">{$issue->getIssueIdentification()|strip_unsafe_html}</p>
				</div>
				<a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}" class="btn-view-all">
					{translate key="journal.viewAllIssues"}
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</header>
			
			<div class="current-issue-toc">
				{include file="frontend/objects/issue_toc.tpl"}
			</div>
		</section>
	{/if}

	{include file="frontend/components/footer.tpl"}
</div><!-- .page -->
