{**
 * templates/frontend/objects/announcement_full.tpl
 *}
<style>
/* Modern Full Announcement Object */
.announcement-full {
    background: #ffffff;
    border-radius: 16px;
    padding: 50px;
    box-shadow: 0 10px 40px rgba(7, 63, 34, 0.08);
    border: 1px solid #eef7f2;
}

.announcement-full-header {
    margin-bottom: 40px;
    border-bottom: 1px solid #e2ebe6;
    padding-bottom: 30px;
}

.announcement-full-title {
    font-family: 'Poppins', sans-serif;
    font-size: 2.5em;
    font-weight: 700;
    color: #073f22;
    line-height: 1.2;
    margin-bottom: 20px;
}

.announcement-full-meta {
    display: flex;
    align-items: center;
    gap: 20px;
    font-size: 0.95em;
    color: #667069;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.meta-item svg {
    color: #1a7b41;
}

.announcement-full-content {
    font-size: 1.1em;
    line-height: 1.8;
    color: #334139;
}

.announcement-full-content p {
    margin-bottom: 20px;
}

.announcement-full-content h2,
.announcement-full-content h3,
.announcement-full-content h4 {
    font-family: 'Poppins', sans-serif;
    color: #073f22;
    margin-top: 30px;
    margin-bottom: 15px;
}

.announcement-full-content ul,
.announcement-full-content ol {
    margin-bottom: 20px;
    padding-left: 20px;
}

.announcement-full-content li {
    margin-bottom: 10px;
}

.announcement-full-content a {
    color: #1a7b41;
    text-decoration: none;
    border-bottom: 1px solid rgba(26, 123, 65, 0.3);
    transition: all 0.2s ease;
}

.announcement-full-content a:hover {
    color: #10b865;
    border-bottom-color: #10b865;
}

.announcement-back {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 40px;
    padding: 10px 20px;
    background: #eef7f2;
    color: #1a7b41;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s ease;
}

.announcement-back:hover {
    background: #1a7b41;
    color: #ffffff;
}

@media (max-width: 768px) {
    .announcement-full {
        padding: 30px 20px;
    }
    .announcement-full-title {
        font-size: 2em;
    }
}
</style>

<article class="announcement-full">
    <header class="announcement-full-header">
        <h1 class="announcement-full-title">
            {$announcement->getLocalizedTitle()}
        </h1>
        <div class="announcement-full-meta">
            <span class="meta-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                {translate key="announcement.postedOn" postDate=$announcement->getDatePosted()|date_format:$dateFormatShort}
            </span>
        </div>
    </header>
    
    <div class="announcement-full-content">
        {if $announcement->getLocalizedDescription()}
            {$announcement->getLocalizedDescription()}
        {else}
            {$announcement->getLocalizedDescriptionShort()}
        {/if}
    </div>

    <a href="{url router=$smarty.const.ROUTE_PAGE page="announcement"}" class="announcement-back">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
        Back to Announcements
    </a>
</article>
