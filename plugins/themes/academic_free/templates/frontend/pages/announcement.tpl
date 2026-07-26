{**
 * templates/frontend/pages/announcement.tpl
 * Modernized Single Announcement Page
 *}
{include file="frontend/components/header.tpl" pageTitleTranslated=$announcement->getLocalizedTitle()|escape}

<style>
/* Modern Single Announcement Page Styles */
.page_announcement {
    background: #fbfdfc;
    font-family: 'Inter', sans-serif;
    color: #334139;
    padding-bottom: 80px;
}

.announcement-single-hero {
    background: linear-gradient(135deg, #052e18 0%, #073f22 100%);
    padding: 60px 20px 80px;
    color: #ffffff;
    margin-bottom: -40px;
    position: relative;
    overflow: hidden;
}

.announcement-single-hero::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 60px;
    background: #fbfdfc;
    clip-path: polygon(0 100%, 100% 100%, 100% 0);
}

.announcement-single-header {
    max-width: 900px;
    margin: 0 auto;
    position: relative;
    z-index: 10;
}

.announcement-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 20;
}
</style>

<div class="page page_announcement">

    <div class="announcement-single-hero">
        <div class="announcement-single-header">
            {include file="frontend/components/breadcrumbs_announcement.tpl" currentTitle=$announcement->getLocalizedTitle()}
        </div>
    </div>

    <div class="announcement-container">
        {include file="frontend/objects/announcement_full.tpl"}
    </div>

</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
