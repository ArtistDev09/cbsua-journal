{**
 * plugins/generic/webFeed/templates/block.tpl
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Feed plugin navigation sidebar — Announcements only.
 *
 *}
<div class="wf-announcements-block" style="
    padding: 16px;
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    border-left: 4px solid #10b865;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    text-align: left;
    margin-top: 15px;
">
    <h2 style="
        font-size: 1.05em;
        font-weight: 700;
        color: #073f22;
        margin: 0 0 12px 0;
        display: flex;
        align-items: center;
        gap: 7px;
    ">
        <span class="glyphicon glyphicon-bullhorn" style="color: #10b865; font-size: 0.9em;"></span>
        {translate key="announcement.announcements"}
    </h2>

    {if $webFeedAnnouncements && $webFeedAnnouncements|@count > 0}
        {foreach from=$webFeedAnnouncements item=wfAnnouncement name=wfLoop}
            {if $smarty.foreach.wfLoop.index >= 3}{break}{/if}
            <div style="padding: 8px 0; border-bottom: 1px solid #edf1ee;">
                <a href="{url router=$smarty.const.ROUTE_PAGE page="announcement" op="view" path=$wfAnnouncement->getId()}" style="
                    display: block;
                    color: #1a2b21;
                    font-size: 0.88em;
                    font-weight: 600;
                    line-height: 1.4;
                    text-decoration: none;
                    margin-bottom: 4px;
                " onmouseover="this.style.color='#10b865'" onmouseout="this.style.color='#1a2b21'">
                    {$wfAnnouncement->getLocalizedTitle()|escape}
                </a>
                <span style="font-size: 0.75em; color: #8a9e92;">
                    <span class="glyphicon glyphicon-calendar" style="font-size:0.85em;"></span>
                    {$wfAnnouncement->getDatePosted()|escape}
                </span>
            </div>
        {/foreach}
        <a href="{url router=$smarty.const.ROUTE_PAGE page="announcement"}" style="
            display: inline-block;
            margin-top: 10px;
            font-size: 0.82em;
            font-weight: 600;
            color: #10b865;
            text-decoration: none;
        " onmouseover="this.style.color='#073f22'" onmouseout="this.style.color='#10b865'">
            view all announcements &rsaquo;
        </a>
    {else}
        <p style="font-size: 0.85em; color: #8a9e92; margin: 0;">No announcements at this time.</p>
    {/if}
</div>
