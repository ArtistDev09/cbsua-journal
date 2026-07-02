{**
 * plugins/blocks/information/block.tpl
 * Fixed version — uses $currentIssue instead of undefined $issue
 *}
{if !empty($forReaders) || !empty($forAuthors) || !empty($forLibrarians)}
<div style="
    text-align: center;
    padding: 10px;
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
">

    {* --- Current Issue Section --- *}
    {if $currentIssue}
        {assign var=issueCover value=$currentIssue->getLocalizedCoverImageUrl()}
        <h2 style="color: #1f7b4cff; font-weight: 600; font-size: 1.2em; margin-bottom: 10px;">
            Current Issue
        </h2>

        {if $issueCover}
            <div style="margin-bottom: 15px;">
                <a href="{url op='view' page='issue' path=$currentIssue->getBestIssueId()}">
                    <img src="{$issueCover|escape}"
                         alt="{$currentIssue->getLocalizedCoverImageAltText()|escape}"
                         style="width: 100%; max-width: 200px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                </a>
            </div>
        {/if}

        <div style="margin-bottom: 15px; text-align: center; font-size: 0.80em;">
            <strong style="display: block; color: #333; margin-bottom: 8px;">
                {$currentIssue->getIssueIdentification()|strip_unsafe_html}
            </strong>

            {if $currentIssue->hasDescription()}
                <div style="color: #555; font-size: 0.80em; line-height: 1.4; margin-bottom: 10px;">
                    {$currentIssue->getLocalizedDescription()|strip_unsafe_html}
                </div>
            {/if}

            {if $currentIssue->getDatePublished()}
                <p style="font-size: 0.80em; color: #777; margin-bottom: 0;">
                    <strong>Published:</strong> {$currentIssue->getDatePublished()|date_format:$dateFormatShort}
                </p>
            {/if}
        </div>

    {/if}

    {* --- Submission Section --- *}

    <a href="{url page='about' op='submissions'}"
       class="btn btn-success"
       style="
            background-color: #4caf50;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            display: inline-block;
            transition: background 0.3s ease;
       "
       onmouseover="this.style.backgroundColor='#43a047';"
       onmouseout="this.style.backgroundColor='#4caf50';">
        Make a Submission
    </a>

</div>
{/if}
