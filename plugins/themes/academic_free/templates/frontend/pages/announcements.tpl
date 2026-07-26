{**
 * templates/frontend/pages/announcements.tpl
 * Modernized Announcements Page
 *}
{include file="frontend/components/header.tpl" pageTitle="announcement.announcements"}

<style>
/* Modern Announcements Page Styles */
.page_announcements {
    background: #fbfdfc;
    font-family: 'Inter', sans-serif;
    color: #334139;
    padding-bottom: 80px;
}

/* Hero Section */
.announcements-hero {
    background: linear-gradient(135deg, #052e18 0%, #073f22 100%);
    padding: 80px 20px;
    text-align: center;
    color: #ffffff;
    margin-bottom: 60px;
    position: relative;
    overflow: hidden;
}

.announcements-hero::after {
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

.announcements-hero-content {
    position: relative;
    z-index: 10;
    max-width: 800px;
    margin: 0 auto;
}

.announcements-tag {
    display: inline-block;
    background: rgba(255,255,255,0.15);
    color: #eab308;
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 0.85em;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    margin-bottom: 20px;
    backdrop-filter: blur(4px);
    border: 1px solid rgba(255,255,255,0.1);
}

.announcements-title {
    font-family: 'Poppins', sans-serif;
    font-size: 3em;
    font-weight: 700;
    margin-bottom: 20px;
    line-height: 1.2;
}

.announcements-subtitle {
    font-size: 1.15em;
    color: #e2ebe6;
    opacity: 0.9;
    line-height: 1.6;
    max-width: 600px;
    margin: 0 auto;
}

.announcements-container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Introduction block */
.announcements-introduction {
    background: #ffffff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(7, 63, 34, 0.05);
    margin-bottom: 40px;
    border-left: 4px solid #1a7b41;
    font-size: 1.05em;
    line-height: 1.6;
}
</style>

<div class="page page_announcements">
    
    {* Hero Section *}
    <div class="announcements-hero">
        <div class="announcements-hero-content">
            <span class="announcements-tag">{translate key="announcement.announcements"}</span>
            <h1 class="announcements-title">Stay Updated</h1>
            <p class="announcements-subtitle">Discover the latest news, updates, and calls for papers from our editorial team.</p>
        </div>
    </div>

    <div class="announcements-container">
        {include file="frontend/components/breadcrumbs.tpl" currentTitleKey="announcement.announcements"}
        
        {include file="frontend/components/editLink.tpl" page="management" op="settings" path="announcements" anchor="announcements" sectionTitleKey="announcement.announcements"}

        {if $announcementsIntroduction}
            <div class="announcements-introduction">
                {$announcementsIntroduction}
            </div>
        {/if}

        {include file="frontend/components/announcements.tpl"}
    </div>

</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
