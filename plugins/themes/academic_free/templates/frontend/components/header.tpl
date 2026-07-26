{**
 * lib/pkp/templates/frontend/components/header.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Common frontend site header.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 * @uses $currentContext Journal|Press The current journal or press
 *}

{* Determine whether a logo or title string is being displayed *}
{assign var="showingLogo" value=true}
{if $displayPageHeaderTitle && !$displayPageHeaderLogo && is_string($displayPageHeaderTitle)}
	{assign var="showingLogo" value=false}
{/if}

{capture assign="homeUrl"}
	{if $currentContext && $multipleContexts}
		{url page="index" router=$smarty.const.ROUTE_PAGE}
	{else}
		{url context="index" router=$smarty.const.ROUTE_PAGE}
	{/if}
{/capture}

<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
{if !$pageTitleTranslated}{capture assign="pageTitleTranslated"}{translate key=$pageTitle}{/capture}{/if}
{include file="frontend/components/headerHead.tpl"}
<body class="pkp_page_{$requestedPage|escape|default:"index"} pkp_op_{$requestedOp|escape|default:"index"}{if $showingLogo} has_site_logo{/if}">

{* ========== MODERNIZED HEADER STYLES ========== *}
<style>
/* ── Google Fonts ── */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@600;700;800&display=swap');

/* ── CSS Custom Properties ── */
.badge{
	background-color: #eeff39ff;
	color: black;
	padding: 6px 12px;
	border-radius: 8px;
	font-size: 0.92em;
	font-weight: 500;
}
:root {
    --hdr-primary: #073f22;
    --hdr-primary-light: #0a5c33;
    --hdr-primary-dark: #052e18;
    --hdr-accent: #10b865;
    --hdr-accent-soft: #34d988;
    --hdr-gold: #d4a853;
    --hdr-text-white: #ffffff;
    --hdr-text-muted: rgba(255,255,255,0.72);
    --hdr-glass-bg: rgba(7, 63, 34, 0.55);
    --hdr-glass-border: rgba(255,255,255,0.12);
    --hdr-transition: cubic-bezier(0.4, 0, 0.2, 1);
    --hdr-radius: 12px;
    --hdr-shadow: 0 8px 32px rgba(5, 46, 24, 0.18);
}

/* ── Top Utility Bar ── */
.modern-topbar {
    background: var(--hdr-primary-dark);
    border-bottom: 1px solid rgba(255,255,255,0.06);
    position: relative;
    z-index: 1001;
}

.modern-topbar__inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
    min-height: 44px;
}

.modern-topbar__logo-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: var(--hdr-text-white);
    transition: opacity 0.25s var(--hdr-transition);
}

.modern-topbar__logo-link:hover {
    opacity: 0.85;
    text-decoration: none;
    color: var(--hdr-text-white);
}

.modern-topbar__logo-img {
    height: 32px;
    width: auto;
    border-radius: 4px;
}

.modern-topbar__logo-text {
    font-family: 'Inter', sans-serif;
    font-size: 0.78em;
    font-weight: 500;
    color: var(--hdr-text-muted);
    letter-spacing: 0.03em;
}

.modern-topbar__nav {
    display: flex;
    align-items: center;
    gap: 6px;
}

.modern-topbar__nav .nav {
    display: flex;
    align-items: center;
    gap: 4px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.modern-topbar__nav .nav li a,
.modern-topbar__nav .nav li a.btn {
    font-family: 'Inter', sans-serif;
    font-size: 0.82em;
    font-weight: 500;
    color: var(--hdr-text-muted) !important;
    background: transparent !important;
    border: 1px solid rgba(255,255,255,0.12) !important;
    border-radius: 8px;
    padding: 5px 16px !important;
    transition: all 0.25s var(--hdr-transition);
    text-decoration: none;
    line-height: 1.5;
    height: auto;
}

.modern-topbar__nav .nav li a:hover,
.modern-topbar__nav .nav li a.btn:hover {
    color: var(--hdr-text-white) !important;
    background: rgba(255,255,255,0.1) !important;
    border-color: rgba(255,255,255,0.2) !important;
    transform: translateY(-1px);
}

/* User Dropdown Menu Fix */
.modern-topbar__nav .nav .dropdown-menu {
    background-color: #ffffff;
    border: 1px solid #e2ebe6;
    border-radius: 8px;
    box-shadow: 0 8px 24px rgba(7, 63, 34, 0.15);
    padding: 8px 0;
    margin-top: 10px;
}

.modern-topbar__nav .nav .dropdown-menu > li > a {
    color: #073f22 !important;
    background: transparent !important;
    border: none !important;
    border-radius: 0;
    padding: 10px 24px !important;
    font-size: 0.9em;
    font-weight: 500;
}

.modern-topbar__nav .nav .dropdown-menu > li > a:hover,
.modern-topbar__nav .nav .dropdown-menu > li > a:focus {
    color: #10b865 !important;
    background: #f4fbf7 !important;
}

/* ── Main Navigation Bar ── */
.modern-navbar {
    background: var(--hdr-primary);
    position: sticky;
    top: 0;
    z-index: 1000;
    box-shadow: 0 2px 20px rgba(5, 46, 24, 0.15);
    transition: box-shadow 0.3s var(--hdr-transition), background 0.3s var(--hdr-transition);
}

.modern-navbar.scrolled {
    background: rgba(7, 63, 34, 0.97);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    box-shadow: 0 4px 30px rgba(5, 46, 24, 0.25);
}

.modern-navbar__inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
    min-height: 56px;
}

/* ── Hamburger Toggle ── */
.modern-navbar__toggle {
    display: none;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 5px;
    width: 42px;
    height: 42px;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 10px;
    cursor: pointer;
    transition: all 0.3s var(--hdr-transition);
    padding: 0;
}

.modern-navbar__toggle:hover {
    background: rgba(255,255,255,0.14);
}

.modern-navbar__toggle-bar {
    display: block;
    width: 20px;
    height: 2px;
    background: var(--hdr-text-white);
    border-radius: 2px;
    transition: all 0.3s var(--hdr-transition);
}

/* ── Nav Links ── */
.modern-navbar__menu {
    display: flex;
    align-items: center;
    gap: 2px;
    flex: 1;
}

.modern-navbar__menu .nav {
    display: flex;
    align-items: center;
    gap: 2px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.modern-navbar__menu .nav li a {
    font-family: 'Inter', sans-serif;
    font-size: 0.92em;
    font-weight: 500;
    color: rgba(255,255,255,0.82) !important;
    background: transparent !important;
    border: none;
    border-radius: 8px;
    padding: 8px 18px;
    transition: all 0.25s var(--hdr-transition);
    text-decoration: none;
    position: relative;
    white-space: nowrap;
}

.modern-navbar__menu .nav li a:hover,
.modern-navbar__menu .nav li a:focus {
    color: var(--hdr-text-white) !important;
    background: rgba(255,255,255,0.1) !important;
}

.modern-navbar__menu .nav li.active a,
.modern-navbar__menu .nav li a:active {
    color: var(--hdr-text-white) !important;
    background: rgba(255,255,255,0.14) !important;
    font-weight: 600;
}

/* ── Dropdown Menus ── */
.modern-navbar__menu .nav li.dropdown:hover .dropdown-menu {
    display: block;
}

.modern-navbar__menu .nav li .dropdown-menu {
    background: var(--hdr-primary) !important;
    border: 1px solid rgba(255,255,255,0.1) !important;
    border-radius: 10px !important;
    box-shadow: 0 16px 48px rgba(5, 46, 24, 0.35) !important;
    padding: 8px !important;
    margin-top: 6px !important;
    min-width: 200px;
    animation: dropdownSlide 0.25s var(--hdr-transition);
}

@keyframes dropdownSlide {
    from { opacity: 0; transform: translateY(-8px); }
    to   { opacity: 1; transform: translateY(0); }
}

.modern-navbar__menu .nav li .dropdown-menu > li > a {
    color: rgba(255,255,255,0.78) !important;
    border-radius: 6px !important;
    padding: 9px 14px !important;
    font-size: 0.88em !important;
}

.modern-navbar__menu .nav li .dropdown-menu > li > a:hover {
    background: rgba(255,255,255,0.1) !important;
    color: var(--hdr-text-white) !important;
}

/* ── Search Form ── */
.modern-navbar__search {
    margin-left: auto;
    position: relative;
}

.modern-navbar__search .navbar-form {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
}

.modern-navbar__search .form-group {
    margin: 0;
}

.modern-navbar__search .form-control {
    font-family: 'Inter', sans-serif;
    font-size: 0.85em;
    width: 200px;
    height: 36px;
    padding: 6px 14px;
    color: var(--hdr-text-white);
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 20px;
    outline: none;
    transition: all 0.3s var(--hdr-transition);
}

.modern-navbar__search .form-control::placeholder {
    color: rgba(255,255,255,0.45);
}

.modern-navbar__search .form-control:focus {
    width: 260px;
    background: rgba(255,255,255,0.14);
    border-color: var(--hdr-accent);
    box-shadow: 0 0 0 3px rgba(16, 184, 101, 0.15);
}

.modern-navbar__search .btn {
    display: none;
}

/* ── Hero Section ── */
/* ── Move Sidebar to Left (Desktop) & Top (Mobile) ── */
@media (min-width: 768px) {
    .pkp_structure_content.container > .row {
        display: flex;
        flex-direction: row-reverse;
    }
    .pkp_structure_content.container > .row::before,
    .pkp_structure_content.container > .row::after {
        display: none; /* Remove Bootstrap clearfix for flexbox to work */
    }
}

@media (max-width: 767px) {
    .pkp_structure_content.container > .row {
        display: flex;
        flex-direction: column-reverse;
    }
    .pkp_structure_content.container > .row::before,
    .pkp_structure_content.container > .row::after {
        display: none;
    }
    .pkp_structure_sidebar {
        margin-bottom: 24px;
    }
}

.modern-hero {
    position: relative;
    overflow: hidden;
    background-color: var(--hdr-primary);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 0;
    min-height: 280px;
}

.modern-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(160deg, rgba(5,46,24,0.72) 0%, rgba(7,63,34,0.67) 35%, rgba(10,92,51,0.62) 100%);
    z-index: 1;
    pointer-events: none;
}

.modern-hero__bg-pattern {
    position: absolute;
    inset: 0;
    z-index: 2;
    background:
        radial-gradient(ellipse 600px 300px at 10% 80%, rgba(16,184,101,0.12) 0%, transparent 70%),
        radial-gradient(ellipse 500px 250px at 85% 20%, rgba(212,168,83,0.08) 0%, transparent 70%);
    pointer-events: none;
}

/* Floating decorative shapes */
.modern-hero__shape {
    position: absolute;
    border-radius: 50%;
    opacity: 0.06;
    pointer-events: none;
    z-index: 2;
}

.modern-hero__shape--1 {
    width: 400px;
    height: 400px;
    background: var(--hdr-accent);
    top: -120px;
    right: -80px;
    animation: heroFloat 20s ease-in-out infinite;
}

.modern-hero__shape--2 {
    width: 250px;
    height: 250px;
    background: var(--hdr-gold);
    bottom: -60px;
    left: -40px;
    animation: heroFloat 25s ease-in-out infinite reverse;
}

.modern-hero__shape--3 {
    width: 160px;
    height: 160px;
    background: var(--hdr-text-white);
    top: 40%;
    left: 55%;
    animation: heroFloat 18s ease-in-out infinite 5s;
}

@keyframes heroFloat {
    0%, 100% { transform: translate(0, 0) scale(1); }
    25%      { transform: translate(15px, -20px) scale(1.05); }
    50%      { transform: translate(-10px, 10px) scale(0.97); }
    75%      { transform: translate(8px, 15px) scale(1.03); }
}

/* Grid lines decoration */
.modern-hero__grid {
    position: absolute;
    inset: 0;
    z-index: 2;
    background-image:
        linear-gradient(rgba(255,255,255,0.025) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,0.025) 1px, transparent 1px);
    background-size: 60px 60px;
    pointer-events: none;
}

.modern-hero__content {
    position: relative;
    z-index: 3;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    max-width: 900px;
    margin: 0 auto;
    padding: 56px 24px 48px;
    text-align: center;
}

.modern-hero__title {
    font-family: 'Playfair Display', serif;
    font-size: 3em;
    font-weight: 800;
    color: var(--hdr-text-white);
    line-height: 1.15;
    margin: 0 0 16px;
    letter-spacing: -0.02em;
    text-shadow: 0 2px 24px rgba(5, 46, 24, 0.3);
}

.modern-hero__title a {
    color: inherit;
    text-decoration: none;
    transition: opacity 0.3s var(--hdr-transition);
}

.modern-hero__title a:hover {
    opacity: 0.88;
    text-decoration: none;
    color: inherit;
}

.modern-hero__subtitle {
    font-family: 'Inter', sans-serif;
    font-size: 1.08em;
    font-weight: 300;
    color: rgba(255,255,255,0.72);
    line-height: 1.7;
    max-width: 620px;
    margin: 0 0 24px;
    letter-spacing: 0.01em;
}

/* ── ISSN Badge ── */
.modern-hero__issn {
    display: inline-flex;
    gap: 18px;
    padding: 10px 24px;
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 40px;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}

.modern-hero__issn-item {
    font-family: 'Inter', sans-serif;
    font-size: 0.82em;
    font-weight: 500;
    color: rgba(255,255,255,0.65);
    letter-spacing: 0.04em;
}

.modern-hero__issn-item strong {
    color: var(--hdr-accent-soft);
    font-weight: 600;
}

/* ── Accent Divider ── */
.modern-hero__divider {
    width: 48px;
    height: 3px;
    background: linear-gradient(90deg, var(--hdr-accent), var(--hdr-gold));
    border-radius: 3px;
    margin: 0 0 20px;
    border: none;
}

/* ── Responsive ── */
@media (max-width: 991px) {
    .modern-hero__title { font-size: 2.4em; }
    .modern-hero__content { padding: 44px 20px 38px; }
}

@media (max-width: 767px) {
    .modern-topbar__inner {
        flex-direction: column;
        gap: 8px;
        padding: 8px 16px;
        min-height: auto;
    }

    .modern-topbar__nav .nav {
        flex-wrap: wrap;
        justify-content: center;
    }

    .modern-navbar__toggle { display: flex; }

    .modern-navbar__inner {
        flex-wrap: wrap;
        padding: 10px 16px;
        min-height: auto;
    }

    .modern-navbar__menu {
        display: none;
        width: 100%;
        padding: 12px 0 8px;
        border-top: 1px solid rgba(255,255,255,0.1);
        margin-top: 10px;
    }

    .modern-navbar__menu.is-open {
        display: block;
    }

    .modern-navbar__menu .nav {
        flex-direction: column;
        gap: 2px;
    }

    .modern-navbar__menu .nav li a {
        padding: 10px 16px;
        border-radius: 8px;
        width: 100%;
    }

    .modern-navbar__search {
        width: 100%;
        margin: 8px 0 0;
    }

    .modern-navbar__search .form-control,
    .modern-navbar__search .form-control:focus {
        width: 100%;
    }

    .modern-hero__title { font-size: 1.9em; }
    .modern-hero__subtitle { font-size: 0.95em; }
    .modern-hero__content { padding: 36px 16px 32px; }
    .modern-hero { min-height: 220px; }

    .modern-hero__issn {
        flex-direction: column;
        gap: 4px;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .modern-hero__title { font-size: 1.55em; }
    .modern-hero__content { padding: 28px 12px 24px; }
}
</style>

	<div class="pkp_structure_page">

		<nav id="accessibility-nav" class="sr-only" role="navigation" aria-labelled-by="accessible-menu-label">
			<div id="accessible-menu-label">
				{translate|escape key="plugins.themes.academic_free.accessible_menu.label"}
			</div>
			<ul>
			  <li><a href="#main-navigation">{translate|escape key="plugins.themes.academic_free.accessible_menu.main_navigation"}</a></li>
			  <li><a href="#main-content">{translate|escape key="plugins.themes.academic_free.accessible_menu.main_content"}</a></li>
			  <li><a href="#sidebar">{translate|escape key="plugins.themes.academic_free.accessible_menu.sidebar"}</a></li>
			</ul>
		</nav>

		{* ========== TOP UTILITY BAR ========== *}
		<header id="headerNavigationContainer" role="banner">

			<div class="modern-topbar">
				<div class="modern-topbar__inner">
					<a href="{$homeUrl}" class="modern-topbar__logo-link">
						<img src="{$baseUrl}/plugins/themes/academic_free/images/logo.png"
							 alt="Site Logo"
							 class="modern-topbar__logo-img">
						<span class="modern-topbar__logo-text">Central Bicol State University of Agriculture</span>
					</a>
					<nav class="modern-topbar__nav" aria-label="{translate|escape key="common.navigation.user"}">
						{load_menu name="user" id="navigationUser" ulClass="nav" linkClass="btn"}
					</nav>
				</div>
			</div>

			{* ========== MAIN NAVIGATION BAR ========== *}
			<div class="modern-navbar" id="modernNavbar">
				<div class="modern-navbar__inner">

					{* Mobile toggle *}
					<button type="button" class="modern-navbar__toggle" id="navToggleBtn" aria-expanded="false" aria-controls="modernNavMenu" aria-label="Toggle navigation">
						<span class="modern-navbar__toggle-bar"></span>
						<span class="modern-navbar__toggle-bar"></span>
						<span class="modern-navbar__toggle-bar"></span>
					</button>

					{* Primary navigation *}
					{capture assign="primaryMenu"}
						{load_menu name="primary" id="main-navigation" ulClass="nav navbar-nav"}
					{/capture}

					{* Journals Dropdown Menu *}
					{capture assign="journalsDropdown"}
						{assign var="allJournalsList" value=$siteJournals|default:$journals}
						{if $allJournalsList && $allJournalsList|@count > 0}
							<li class="dropdown modern-nav-journals-dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 4px; vertical-align: -2px;"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/></svg>
									{translate key="context.contexts"|default:"Journals"} <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									{foreach from=$allJournalsList item=journalItem}
										<li{if $currentContext && $currentContext->getId() == $journalItem->getId()} class="active"{/if}>
											<a href="{url journal=$journalItem->getPath()}">{$journalItem->getLocalizedName()|default:$journalItem->getPath()|escape}</a>
										</li>
									{/foreach}
								</ul>
							</li>
						{/if}
					{/capture}

					{if !empty(trim($journalsDropdown))}
						{if !empty(trim($primaryMenu))}
							{if $primaryMenu|strpos:"announcement" !== false}
								{assign var="dropdownReplace" value='$1'|cat:$journalsDropdown}
								{assign var="primaryMenu" value=$primaryMenu|regex_replace:'/(<li[^>]*>(?:(?!<\/li>).)*?announcement(?:(?!<\/li>).)*?<\/li>)/is':$dropdownReplace}
							{else}
								{assign var="primaryMenu" value=$primaryMenu|replace:"</ul>":"`$journalsDropdown`</ul>"}
							{/if}
						{else}
							{capture assign="primaryMenu"}
								<ul id="main-navigation" class="nav navbar-nav">
									{$journalsDropdown}
								</ul>
							{/capture}
						{/if}
					{/if}

					{if !empty(trim($primaryMenu)) || !$noContextsConfigured}
						<nav id="modernNavMenu" class="modern-navbar__menu" aria-label="{translate|escape key="common.navigation.site"}">
							{$primaryMenu}

							{if !$noContextsConfigured}
								<div class="modern-navbar__search">
									{include file="frontend/components/searchForm_simple.tpl"}
								</div>
							{/if}
						</nav>
					{/if}

				</div>
			</div>

		</header>

		{* ========== HERO SECTION ========== *}
		<section class="modern-hero" style="background-image: url('{$baseUrl}/plugins/themes/academic_free/styles/header/header_new.png');">
        
			{* Background decorations *}
			<div class="modern-hero__bg-pattern"></div>
			<div class="modern-hero__grid"></div>
			<div class="modern-hero__shape modern-hero__shape--1"></div>
			<div class="modern-hero__shape modern-hero__shape--2"></div>
			<div class="modern-hero__shape modern-hero__shape--3"></div>

			<div class="modern-hero__content">
				{* Title *}
				{if $requestedOp == 'index'}
					<h1 class="modern-hero__title">
				{else}
					<div class="modern-hero__title">
				{/if}
					{if $displayPageHeaderTitle && is_string($displayPageHeaderTitle)}
						<a href="{$homeUrl}">{$displayPageHeaderTitle}</a>
					{elseif $displayPageHeaderTitle && is_array($displayPageHeaderTitle)}
						<a href="{$homeUrl}">{$pageTitleTranslated}</a>
					{else}
						<a href="{$homeUrl}">OJS Site Name</a>
					{/if}
				{if $requestedOp == 'index'}
					</h1>
				{else}
					</div>
				{/if}

				<hr class="modern-hero__divider">

				<p class="modern-hero__subtitle">
					Advancing research, innovation, and sustainable development through collaboration,
					scholarship, and community engagement.
				</p>

				{if $currentContext}
					{assign var="printIssn" value=$currentContext->getData('printIssn')}
					{assign var="onlineIssn" value=$currentContext->getData('onlineIssn')}
					{if $printIssn || $onlineIssn}
						<div class="modern-hero__issn">
							{if $printIssn}
								<span class="modern-hero__issn-item"><strong>P-ISSN</strong> {$printIssn|escape}</span>
							{/if}
							{if $onlineIssn}
								<span class="modern-hero__issn-item"><strong>E-ISSN</strong> {$onlineIssn|escape}</span>
							{/if}
						</div>
					{/if}
				{/if}
			</div>
		</section>

		{* ========== MAIN CONTENT WRAPPER ========== *}
		<div class="pkp_structure_content container main_content" style="max-width: 1500px; width: 98%;">
    <div class="row">
        {if empty($isFullWidth)}
        <aside id="leftSidebar" class="pkp_structure_sidebar col-xs-12 col-sm-3 col-md-2" role="complementary" aria-label="Left Sidebar">
            {* Custom Journal Menu Block *}
            <div class="journal-sidebar-card journal-menu-card">
                <h2 class="journal-sidebar-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="sidebar-title-icon"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                    Journal Menu
                </h2>
                <ul class="journal-sidebar-list">
                    <li>
                        <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}" class="journal-sidebar-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-item-icon"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M21 9H3M21 15H3M12 3v18"/></svg>
                            <span>Articles</span>
                        </a>
                    </li>
                    <li>
                        <a href="{url router=$smarty.const.ROUTE_PAGE page="about"}" class="journal-sidebar-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-item-icon"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
                            <span>Editorial Policy</span>
                        </a>
                    </li>
                    <li>
                        <a href="{url router=$smarty.const.ROUTE_PAGE page="about" op="peerReview"}" class="journal-sidebar-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-item-icon"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                            <span>Peer Review Policy</span>
                        </a>
                    </li>
                    <li>
                        <a href="{url router=$smarty.const.ROUTE_PAGE page="about" op="editorialTeam"}" class="journal-sidebar-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-item-icon"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            <span>Editorial Team</span>
                        </a>
                    </li>
                </ul>
            </div>

            {* Published Vol by Year Block *}
            <div class="journal-sidebar-card journal-vol-card">
                <h2 class="journal-sidebar-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="sidebar-title-icon"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/><path d="M6 6h10M6 10h10"/></svg>
                    Published Vol. by Year
                </h2>
                <ul class="journal-sidebar-list">
                    <li>
                        <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive"}" class="journal-sidebar-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sidebar-item-icon"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/></svg>
                            <span>2025 (Vol 1)</span>
                        </a>
                    </li>
                    <li class="journal-sidebar-archive-link">
                        <a href="{url router=$smarty.const.ROUTE_PAGE page="issue" op="archive" class="journal-sidebar-more"}" class="journal-sidebar-more">
                            <span>View All Archives</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        {/if}

        <main class="pkp_structure_main col-xs-12 {if $isFullWidth}col-md-12{else}col-sm-6 col-md-8{/if}" role="main">

{* ========== HEADER SCRIPTS ========== *}
<script>
(function() {
    // Sticky navbar scroll effect
    var navbar = document.getElementById('modernNavbar');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 20) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Mobile menu toggle
    var toggleBtn = document.getElementById('navToggleBtn');
    var navMenu = document.getElementById('modernNavMenu');
    if (toggleBtn && navMenu) {
        toggleBtn.addEventListener('click', function() {
            var isOpen = navMenu.classList.toggle('is-open');
            toggleBtn.setAttribute('aria-expanded', isOpen);
        });
    }
})();
</script>
