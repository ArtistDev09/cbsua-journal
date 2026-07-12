{**
 * templates/frontend/pages/about.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display the page to view information about a journal.
 *
 * @uses $currentContext Journal|Press The current journal or press
 *}
{include file="frontend/components/header.tpl" pageTitle="about.aboutContext"}

<div id="main-content" class="page page_about">

	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="about.aboutContext"}

	{* Page Title *}
	<div class="page-header">
		<h1>{translate key="about.aboutContext"}</h1>
		</div>
		<p class="pages" style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: justify; line-height: 1.5;">
		<br><b>Copyright Notice</b><br><br>

		  The copyright of the articles published in this journal is retained by the authors. The journal is an open access journal and all articles are distributed under the terms of the Creative Commons Attribution License 4.0 International License, which permits unrestricted use, distribution, and reproduction in any medium, provided that the original work is properly cited.

         Authors retain all their rights to the published works, such as (but not limited to) the following rights; Copyright and other proprietary rights relating to the article, such as patent rights: right to use the substance of the article in own future works, including lectures and books, right to reproduce the article for own purposes, right to self-archive the article, right to enter into separate, additional contractual arrangements for the nonexclusive distribution of the article’s published version (e.g., post it to an institutional repository or publish it in a book), with an acknowledgment of its initial publication in this journal.

          Articles published in the journal may be quoted without permission in other scholarly writing and in popular writing, as long as credit is given to the source. Cited content of the journal may be credited as a source (e.g., for tables and figures), in-text citation when applicable, and complete bibliographic citation, where it is appropriately located in the material. However, no article may be published in its entirety without written permission from the publisher, Central Bicol State University of Agriculture (CBSUA). Authors retain the copyright of their articles published in the journal. However, authors agree that their articles remain permanently open access under the terms of the Creative Commons Attribution License 4.0 International License.

<br><br><b>Privacy Statement</b><br><br>

       We value the privacy of our readers, authors, reviewers, and other users. The personal information you provide on this journal site, including your name and email address, will be used only for the purposes of managing submissions, communication, publishing services, and related journal operations. We will not share, sell, or disclose your personal information to any third party except as required by law or as necessary to support the journal’s publishing and administrative functions.</p>
	
	{* /Page Title *}

	{$currentContext->getLocalizedSetting('about')}
</div><!-- .page -->

{include file="common/frontend/footer.tpl"}
