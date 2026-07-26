{**
 * templates/frontend/pages/indexSite.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Site index - Modernized Multi-Journal Portal for Academic Free Theme.
 *}
{include file="frontend/components/header.tpl"}

<style>
/* ── Multi-Journal Portal Modernization ── */
.site-portal {
    font-family: 'Inter', sans-serif;
    color: #1e293b;
    padding-bottom: 50px;
}

/* Hero Header Banner */
.portal-hero {
    background: linear-gradient(135deg, #052e18 0%, #0a4725 45%, #064e3b 100%);
    border-radius: 20px;
    padding: 44px 36px;
    margin: 20px 0 36px 0;
    color: #ffffff;
    position: relative;
    overflow: hidden;
    box-shadow: 0 16px 40px rgba(5, 46, 24, 0.22);
    border: 1px solid rgba(255, 255, 255, 0.12);
}

.portal-hero__glow {
    position: absolute;
    top: -60px;
    right: -60px;
    width: 380px;
    height: 380px;
    background: radial-gradient(circle, rgba(16, 184, 101, 0.22) 0%, rgba(5, 46, 24, 0) 70%);
    pointer-events: none;
}

.portal-hero__pattern {
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px);
    background-size: 24px 24px;
    opacity: 0.6;
    pointer-events: none;
}

.portal-hero__content {
    position: relative;
    z-index: 2;
    max-width: 820px;
}

.portal-hero__badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(16, 184, 101, 0.18);
    border: 1px solid rgba(52, 217, 136, 0.35);
    color: #34d988;
    font-size: 0.82em;
    font-weight: 600;
    padding: 6px 14px;
    border-radius: 30px;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 16px;
}

.portal-hero__title {
    font-family: 'Playfair Display', serif;
    font-size: 2.4em;
    font-weight: 700;
    color: #ffffff;
    margin: 0 0 14px 0;
    line-height: 1.25;
}

.portal-hero__subtitle {
    font-size: 1.05em;
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.65;
    margin: 0 0 24px 0;
    font-weight: 300;
}

/* Quick Highlights Bar */
.portal-hero__highlights {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
}

.portal-highlight-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(6px);
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 8px 16px;
    border-radius: 12px;
    font-size: 0.88em;
    color: rgba(255, 255, 255, 0.92);
}

.portal-highlight-pill svg {
    color: #d4a853;
}

/* Portal Section Title */
.portal-section-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 28px;
    padding-bottom: 14px;
    border-bottom: 2px solid #e2e8f0;
}

.portal-section-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.7em;
    font-weight: 700;
    color: #052e18;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 12px;
}

.portal-section-title::before {
    content: '';
    display: inline-block;
    width: 6px;
    height: 26px;
    background: linear-gradient(180deg, #10b865, #052e18);
    border-radius: 4px;
}

/* Journals Grid Layout */
.portal-journals-grid {
    display: flex;
    flex-direction: column;
    gap: 28px;
}

/* Journal Card */
.portal-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 18px;
    box-shadow: 0 4px 24px rgba(0, 0, 0, 0.04);
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    overflow: hidden;
    display: flex;
    flex-direction: row;
}

.portal-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(5, 46, 24, 0.12);
    border-color: #34d988;
}

/* Card Thumbnail / Cover Section */
.portal-card__cover {
    width: 270px;
    min-width: 270px;
    background: linear-gradient(135deg, #f8faf9 0%, #edf7f2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px;
    position: relative;
    border-right: 1px solid #f1f5f9;
}

.portal-card__img {
    max-width: 100%;
    max-height: 200px;
    object-fit: contain;
    border-radius: 8px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.portal-card:hover .portal-card__img {
    transform: scale(1.04);
}

.portal-card__fallback {
    width: 130px;
    height: 170px;
    background: linear-gradient(135deg, #052e18 0%, #10b865 100%);
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    box-shadow: 0 10px 24px rgba(5, 46, 24, 0.22);
    text-align: center;
    padding: 16px;
    position: relative;
}

.portal-card__fallback::after {
    content: '';
    position: absolute;
    top: 0;
    left: 10px;
    width: 3px;
    height: 100%;
    background: rgba(255, 255, 255, 0.25);
}

.portal-card__fallback-icon {
    margin-bottom: 10px;
    color: #d4a853;
}

.portal-card__fallback-text {
    font-family: 'Playfair Display', serif;
    font-size: 0.92em;
    font-weight: 700;
    line-height: 1.25;
}

/* Card Content Body */
.portal-card__body {
    padding: 30px;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.portal-card__header {
    margin-bottom: 14px;
}

.portal-card__title {
    font-family: 'Playfair Display', serif;
    font-size: 1.55em;
    font-weight: 700;
    margin: 0 0 12px 0;
    line-height: 1.35;
}

.portal-card__title a {
    color: #052e18;
    text-decoration: none;
    transition: color 0.2s ease;
}

.portal-card__title a:hover {
    color: #10b865;
}

/* ISSN Badges */
.portal-card__issns {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin-bottom: 16px;
}

.portal-card__issn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: #f1f5f9;
    border: 1px solid #e2e8f0;
    color: #475569;
    font-size: 0.8em;
    font-weight: 600;
    padding: 4px 12px;
    border-radius: 6px;
}

.portal-card__issn strong {
    color: #052e18;
}

/* Journal Description */
.portal-card__description {
    color: #475569;
    font-size: 0.96em;
    line-height: 1.65;
    margin-bottom: 22px;
}

/* Card Actions */
.portal-card__actions {
    display: flex;
    align-items: center;
    gap: 14px;
    flex-wrap: wrap;
    padding-top: 20px;
    border-top: 1px solid #f1f5f9;
}

.btn-portal-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #052e18 0%, #0c4a27 100%);
    color: #ffffff !important;
    font-weight: 600;
    font-size: 0.9em;
    padding: 10px 22px;
    border-radius: 10px;
    text-decoration: none !important;
    transition: all 0.25s ease;
    box-shadow: 0 4px 14px rgba(5, 46, 24, 0.18);
}

.btn-portal-primary:hover {
    background: linear-gradient(135deg, #0c4a27 0%, #10b865 100%);
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(16, 184, 101, 0.28);
    color: #ffffff !important;
}

.btn-portal-secondary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #ffffff;
    border: 1.5px solid #cbd5e1;
    color: #052e18 !important;
    font-weight: 600;
    font-size: 0.9em;
    padding: 10px 20px;
    border-radius: 10px;
    text-decoration: none !important;
    transition: all 0.25s ease;
}

.btn-portal-secondary:hover {
    background: #f8faf9;
    border-color: #10b865;
    color: #10b865 !important;
    transform: translateY(-2px);
}

/* About Portal Box */
.portal-about-box {
    background: #f8faf9;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 32px;
    margin-top: 40px;
}

.portal-about-box__title {
    font-family: 'Playfair Display', serif;
    font-size: 1.35em;
    font-weight: 700;
    color: #052e18;
    margin: 0 0 12px 0;
}

.portal-about-box__content {
    color: #475569;
    font-size: 0.95em;
    line-height: 1.7;
}

/* Empty State */
.portal-empty-state {
    text-align: center;
    padding: 64px 24px;
    background: #f8faf9;
    border: 2px dashed #cbd5e1;
    border-radius: 18px;
    color: #64748b;
}

.portal-empty-state__icon {
    width: 64px;
    height: 64px;
    margin: 0 auto 16px;
    color: #94a3b8;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .portal-card {
        flex-direction: column;
    }
    .portal-card__cover {
        width: 100%;
        min-width: 100%;
        height: 220px;
        border-right: none;
        border-bottom: 1px solid #f1f5f9;
    }
    .portal-hero {
        padding: 32px 24px;
    }
    .portal-hero__title {
        font-size: 1.9em;
    }
}
</style>

<div id="main-site" class="site-portal">

    {* Hero Header *}
    <header class="portal-hero">
        <div class="portal-hero__glow"></div>
        <div class="portal-hero__pattern"></div>
        <div class="portal-hero__content">
            <div class="portal-hero__badge">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                Central Bicol State University of Agriculture
            </div>
            <h1 class="portal-hero__title">
                {if $pageTitleTranslated}
                    {$pageTitleTranslated}
                {else}
                    Academic Journals Portal
                {/if}
            </h1>
            <p class="portal-hero__subtitle">
                Discover peer-reviewed research, open-access publications, and academic contributions advancing innovation, sustainable development, and community engagement.
            </p>
            <div class="portal-hero__highlights">
                <div class="portal-highlight-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/></svg>
                    Peer-Reviewed Journals
                </div>
                <div class="portal-highlight-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 9.9-1"/></svg>
                    Open Access
                </div>
                <div class="portal-highlight-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    Scholarly Excellence
                </div>
            </div>
        </div>
    </header>

    {* Section Title *}
    <div class="portal-section-header">
        <h2 class="portal-section-title">
            {translate key="journal.journals"}
        </h2>
    </div>

    {* Journals List *}
    {if ($journals && !count($journals))}
        <div class="portal-empty-state">
            <svg class="portal-empty-state__icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
            <h3>{translate key="site.noJournals"}</h3>
        </div>
    {else}
        <div class="portal-journals-grid">
            {iterate from=journals item=journal}
                {capture assign="url"}{url journal=$journal->getPath()}{/capture}
                {assign var="thumb" value=$journal->getLocalizedSetting('journalThumbnail')}
                {if !$thumb}
                    {assign var="thumb" value=$journal->getLocalizedData('journalThumbnail')}
                {/if}
                {assign var="description" value=$journal->getLocalizedDescription()}
                {assign var="printIssn" value=$journal->getData('printIssn')}
                {assign var="onlineIssn" value=$journal->getData('onlineIssn')}

                <article class="portal-card">
                    {* Cover / Image Column *}
                    <div class="portal-card__cover">
                        {if $thumb}
                            {assign var="altText" value=$journal->getLocalizedSetting('journalThumbnailAltText')}
                            <a href="{$url|escape}">
                                <img class="portal-card__img" src="{$journalFilesPath}{$journal->getId()}/{$thumb.uploadName|escape:"url"}"{if $altText} alt="{$altText|escape}"{/if}>
                            </a>
                        {else}
                            <a href="{$url|escape}" style="text-decoration: none;">
                                <div class="portal-card__fallback">
                                    <svg class="portal-card__fallback-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/></svg>
                                    <span class="portal-card__fallback-text">{$journal->getLocalizedName()|default:$journal->getPath()}</span>
                                </div>
                            </a>
                        {/if}
                    </div>

                    {* Content Column *}
                    <div class="portal-card__body">
                        <div class="portal-card__header">
                            <h3 class="portal-card__title">
                                <a href="{$url|escape}" rel="bookmark">
                                    {$journal->getLocalizedName()|default:$journal->getPath()}
                                </a>
                            </h3>

                            {* ISSN Badges *}
                            {if $printIssn || $onlineIssn}
                                <div class="portal-card__issns">
                                    {if $printIssn}
                                        <span class="portal-card__issn"><strong>P-ISSN</strong> {$printIssn|escape}</span>
                                    {/if}
                                    {if $onlineIssn}
                                        <span class="portal-card__issn"><strong>E-ISSN</strong> {$onlineIssn|escape}</span>
                                    {/if}
                                </div>
                            {/if}

                            {* Description *}
                            {if $description}
                                <div class="portal-card__description">
                                    {$description|strip_tags|truncate:320:"..."}
                                </div>
                            {/if}
                        </div>

                        {* Actions *}
                        <div class="portal-card__actions">
                            <a href="{$url|escape}" class="btn-portal-primary">
                                {translate key="site.journalView"|default:"Explore Journal"}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                            </a>
                            <a href="{url|escape journal=$journal->getPath() page="issue" op="current"}" class="btn-portal-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M21 9H3M21 15H3M12 3v18"/></svg>
                                {translate key="site.journalCurrent"|default:"Current Issue"}
                            </a>
                        </div>
                    </div>
                </article>
            {/iterate}
        </div>

        {* Pagination *}
        {if $journals->getPageCount() > 1}
            <div class="cmp_pagination" style="margin-top: 36px;">
                {page_info iterator=$journals}
                {page_links anchor="journals" name="journals" iterator=$journals}
            </div>
        {/if}
    {/if}

    {* About Site Section *}
    {if $about}
        <div class="portal-about-box">
            <h3 class="portal-about-box__title">About Our Publishing Portal</h3>
            <div class="portal-about-box__content">
                {$about|nl2br}
            </div>
        </div>
    {/if}

</div><!-- .site-portal -->

{include file="frontend/components/footer.tpl"}
