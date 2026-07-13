{**
 * plugins/blocks/information/block.tpl
 * Modernized Version — Premium sidebar block layout using #073f22 branding.
 *}
{if !empty($forReaders) || !empty($forAuthors) || !empty($forLibrarians) || $currentIssue}

<style>
/* ── Modern Sidebar Information Block ── */
.modern-sidebar-block {
    background: #ffffff;
    border: 1px solid #e2ebe6;
    border-radius: 12px;
    padding: 24px;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.05);
    font-family: 'Inter', sans-serif;
    margin-bottom: 30px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

/* Decorative top accent */
.modern-sidebar-block::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #073f22, #10b865);
}

.modern-sidebar-block h2 {
    font-family: 'Playfair Display', serif;
    color: #073f22;
    font-size: 1.35em;
    font-weight: 700;
    margin: 0 0 16px 0;
}

/* Issue Cover Image */
.modern-sidebar-issue-cover {
    display: block;
    margin: 0 auto 16px;
    border-radius: 6px;
    box-shadow: 0 4px 12px rgba(7, 63, 34, 0.12);
    overflow: hidden;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    max-width: 100%;
}

.modern-sidebar-issue-cover:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(7, 63, 34, 0.18);
}

.modern-sidebar-issue-cover img {
    display: block;
    width: 100%;
    height: auto;
}

/* Issue Metadata */
.modern-sidebar-issue-title {
    display: block;
    color: #1a2b21;
    font-weight: 700;
    font-size: 0.95em;
    margin-bottom: 8px;
    line-height: 1.4;
}

.modern-sidebar-issue-desc {
    color: #607064;
    font-size: 0.85em;
    line-height: 1.5;
    margin-bottom: 12px;
    text-align: justify;
}

.modern-sidebar-issue-date {
    display: inline-block;
    background: #f4fbf7;
    color: #073f22;
    border: 1px solid #cfe8d8;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 0.75em;
    font-weight: 600;
    margin-bottom: 20px;
}

/* Submission Button */
.modern-sidebar-btn {
    display: block;
    width: 100%;
    background: #073f22;
    color: #ffffff !important;
    padding: 12px 0;
    border-radius: 8px;
    text-decoration: none !important;
    font-weight: 600;
    font-size: 0.95em;
    transition: all 0.25s ease;
    box-shadow: 0 4px 12px rgba(7, 63, 34, 0.15);
}

.modern-sidebar-btn:hover,
.modern-sidebar-btn:focus {
    background: #10b865;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(16, 184, 101, 0.25);
}
</style>

<div class="modern-sidebar-block">

    {* --- Current Issue Section --- *}
    {if $currentIssue}
        {assign var=issueCover value=$currentIssue->getLocalizedCoverImageUrl()}
        <h2>Current Issue</h2>

        {if $issueCover}
            <a href="{url op='view' page='issue' path=$currentIssue->getBestIssueId()}" class="modern-sidebar-issue-cover">
                <img src="{$issueCover|escape}" alt="{$currentIssue->getLocalizedCoverImageAltText()|escape}">
            </a>
        {/if}

        <strong class="modern-sidebar-issue-title">
            {$currentIssue->getIssueIdentification()|strip_unsafe_html}
        </strong>

        {if $currentIssue->hasDescription()}
            <div class="modern-sidebar-issue-desc">
                {$currentIssue->getLocalizedDescription()|strip_unsafe_html}
            </div>
        {/if}

        {if $currentIssue->getDatePublished()}
            <div class="modern-sidebar-issue-date">
                Published: {$currentIssue->getDatePublished()|date_format:$dateFormatShort}
            </div>
        {/if}
    {/if}

    {* --- Submission Section --- *}
    <a href="{url page='about' op='submissions'}" class="modern-sidebar-btn">
        Make a Submission
    </a>

</div>
{/if}
