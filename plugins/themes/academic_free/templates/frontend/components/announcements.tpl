{**
 * templates/frontend/components/announcements.tpl
 * Modern Grid Layout
 *}
<style>
.announcements-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 30px;
    margin-top: 30px;
}
.announcements-empty {
    text-align: center;
    padding: 60px 20px;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(7, 63, 34, 0.05);
}
.announcements-empty svg {
    margin-bottom: 20px;
    color: #1a7b41;
    opacity: 0.5;
}
.announcements-empty h3 {
    font-family: 'Poppins', sans-serif;
    color: #073f22;
    margin-bottom: 10px;
}
.announcements-empty p {
    color: #667069;
}
</style>

<div class="announcements-grid">
    {if $announcements|@count == 0}
        </div>
        <div class="announcements-empty">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
            <h3>No Announcements Yet</h3>
            <p>Check back later for the latest news and updates.</p>
        </div>
    {else}
        {foreach from=$announcements item=announcement}
            {include file="frontend/objects/announcement_summary.tpl"}
        {/foreach}
        </div>
    {/if}
