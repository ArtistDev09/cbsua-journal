{**
 * templates/frontend/pages/about.tpl
 * Modernized "Editorial / Policy" document-style design.
 *}
{include file="frontend/components/header.tpl" pageTitle="about.aboutContext"}

<style>
/* Hide the sidebar explicitly on this page */
#sidebar {
    display: none !important;
}
/* Ensure main content takes full width when sidebar is hidden */
.pkp_structure_main {
    width: 100% !important;
    flex: 0 0 100% !important;
    max-width: 100% !important;
}

/* ── Premium Document-Style Layout (Inspired by Stripe / Notion) ── */
.page_about {
    background: #fbfdfc;
    font-family: 'Inter', sans-serif;
    color: #334139;
    padding-bottom: 80px;
}

/* Hero Section */
.about-hero {
    background: linear-gradient(135deg, #052e18 0%, #073f22 100%);
    padding: 80px 20px;
    text-align: center;
    color: #ffffff;
    margin-bottom: 60px;
    position: relative;
    overflow: hidden;
}

.about-hero::after {
    content: '';
    position: absolute;
    bottom: -50px;
    left: 50%;
    transform: translateX(-50%);
    width: 200%;
    height: 100px;
    background: #fbfdfc;
    border-radius: 50%;
}

.about-hero-content {
    position: relative;
    z-index: 10;
    max-width: 800px;
    margin: 0 auto;
}

.about-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: 3.2em;
    font-weight: 700;
    margin: 0 0 16px;
    letter-spacing: -0.02em;
}

.about-hero p {
    font-size: 1.2em;
    color: rgba(255, 255, 255, 0.85);
    line-height: 1.6;
    margin: 0;
    font-weight: 300;
}

/* Document Body */
.about-document-wrapper {
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 24px;
    display: flex;
    gap: 60px;
    align-items: flex-start;
}

/* Sidebar / Table of Contents */
.about-toc {
    flex: 0 0 240px;
    position: sticky;
    top: 100px;
    background: #ffffff;
    padding: 24px;
    border-radius: 12px;
    border: 1px solid #e2ebe6;
    box-shadow: 0 4px 20px rgba(7, 63, 34, 0.04);
}

.about-toc h4 {
    font-size: 0.85em;
    text-transform: uppercase;
    letter-spacing: 0.1em;
    color: #607064;
    margin: 0 0 16px;
    font-weight: 700;
}

.about-toc ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.about-toc a {
    color: #4c5c53;
    text-decoration: none;
    font-size: 0.95em;
    font-weight: 500;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
    gap: 8px;
}

.about-toc a:hover {
    color: #10b865;
    transform: translateX(4px);
}

.about-toc a::before {
    content: '';
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background: #d1dfd6;
    transition: background 0.2s ease;
}

.about-toc a:hover::before {
    background: #10b865;
}

/* Main Content Text */
.about-content {
    flex: 1;
    min-width: 0;
}

.about-section {
    margin-bottom: 60px;
    scroll-margin-top: 100px; /* For anchor links */
}

.about-section h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.2em;
    color: #073f22;
    margin: 0 0 24px;
    font-weight: 700;
    padding-bottom: 16px;
    border-bottom: 1px solid #e2ebe6;
    display: flex;
    align-items: center;
    gap: 12px;
}

.about-section h2 svg {
    color: #d4a853;
    width: 28px;
    height: 28px;
}

.about-section p {
    font-size: 1.1em;
    line-height: 1.75;
    color: #44544a;
    margin-bottom: 20px;
    text-align: justify;
}

.about-section p:last-child {
    margin-bottom: 0;
}

/* Custom Settings Block */
.about-custom {
    background: #ffffff;
    border: 1px solid #cfe8d8;
    border-left: 4px solid #10b865;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 8px 30px rgba(16, 184, 101, 0.05);
}

/* Responsive */
@media (max-width: 900px) {
    .about-document-wrapper {
        flex-direction: column;
        gap: 40px;
    }
    
    .about-toc {
        position: static;
        flex: auto;
        width: 100%;
        box-sizing: border-box;
    }
    
    .about-hero h1 {
        font-size: 2.4em;
    }
}
</style>

<div id="main-content" class="page page_about">

    {* Hero Header *}
    <div class="about-hero">
        <div class="about-hero-content">
            <h1>{translate key="about.aboutContext"}</h1>
            <p>Our commitment to open access, copyright integrity, and reader privacy.</p>
        </div>
    </div>

    <div class="about-document-wrapper">

        {* Main Document Content *}
        <div class="about-content">
            
            {* Copyright Section *}
            <section id="copyright" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M14.83 14.83a4 4 0 1 1 0-5.66"></path>
                    </svg>
                    Copyright Notice
                </h2>
                <p>
                    The copyright of the articles published in this journal is retained by the authors. The journal is an open access journal and all articles are distributed under the terms of the <strong>Creative Commons Attribution License 4.0 International License</strong>, which permits unrestricted use, distribution, and reproduction in any medium, provided that the original work is properly cited.
                </p>
                <p>
                    Authors retain all their rights to the published works, such as (but not limited to) the following rights; Copyright and other proprietary rights relating to the article, such as patent rights: right to use the substance of the article in own future works, including lectures and books, right to reproduce the article for own purposes, right to self-archive the article, right to enter into separate, additional contractual arrangements for the nonexclusive distribution of the article’s published version (e.g., post it to an institutional repository or publish it in a book), with an acknowledgment of its initial publication in this journal.
                </p>
                <p>
                    Articles published in the journal may be quoted without permission in other scholarly writing and in popular writing, as long as credit is given to the source. Cited content of the journal may be credited as a source (e.g., for tables and figures), in-text citation when applicable, and complete bibliographic citation, where it is appropriately located in the material. However, no article may be published in its entirety without written permission from the publisher, Central Bicol State University of Agriculture (CBSUA). Authors retain the copyright of their articles published in the journal. However, authors agree that their articles remain permanently open access under the terms of the Creative Commons Attribution License 4.0 International License.
                </p>
            </section>

            {* Privacy Section *}
            <section id="privacy" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="#10b865" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                    Privacy Statement
                </h2>
                <p>
                    We value the privacy of our readers, authors, reviewers, and other users. The personal information you provide on this journal site, including your name and email address, will be used only for the purposes of managing submissions, communication, publishing services, and related journal operations. We will not share, sell, or disclose your personal information to any third party except as required by law or as necessary to support the journal’s publishing and administrative functions.
                </p>
            </section>

            {* Dynamic Content Section *}
            {if $aboutContext}
                <section id="additional" class="about-section about-custom">
                    {$aboutContext}
                </section>
            {/if}

        </div>
    </div>

</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
