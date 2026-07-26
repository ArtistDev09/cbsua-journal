<?php
/* Smarty version 4.3.1, created on 2026-07-20 15:40:53
  from 'app:frontendpagessubmissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5e256599d741_98883754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f59ba25f4aae6a7b19033686947ff5a7d2a098e0' => 
    array (
      0 => 'app:frontendpagessubmissions.tpl',
      1 => 1784554837,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6a5e256599d741_98883754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"about.submissions"), 0, false);
?>

<style>
/* Hide default sidebars explicitly on this page for full presentation */
#sidebar, #leftSidebar {
    display: none !important;
}
/* Ensure main content takes full width when sidebars are hidden */
.pkp_structure_main {
    width: 100% !important;
    flex: 0 0 100% !important;
    max-width: 100% !important;
}

/* ── Premium Document Layout ── */
.page_submissions {
    background: #fbfdfc;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    color: #2c3e35;
    padding-bottom: 80px;
}

/* Hero Section */
.sub-hero {
    background: linear-gradient(135deg, #052e18 0%, #073f22 60%, #0d542e 100%);
    padding: 70px 20px 85px;
    text-align: center;
    color: #ffffff;
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(5, 46, 24, 0.15);
}

.sub-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    z-index: 1;
    background:
        /* Subtle dot grid */
        radial-gradient(circle, rgba(255,255,255,0.045) 1px, transparent 1px),
        /* Diagonal fine lines */
        repeating-linear-gradient(
            45deg,
            transparent,
            transparent 20px,
            rgba(255,255,255,0.018) 20px,
            rgba(255,255,255,0.018) 21px
        ),
        repeating-linear-gradient(
            -45deg,
            transparent,
            transparent 30px,
            rgba(255,255,255,0.012) 30px,
            rgba(255,255,255,0.012) 31px
        ),
        /* Large soft radial glow */
        radial-gradient(ellipse at 20% 50%, rgba(16,184,101,0.08) 0%, transparent 60%),
        radial-gradient(ellipse at 80% 30%, rgba(212,168,83,0.06) 0%, transparent 50%);
    background-size:
        24px 24px,
        auto,
        auto,
        auto,
        auto;
    pointer-events: none;
}

.sub-hero::after {
    content: '';
    position: absolute;
    bottom: -50px;
    left: 50%;
    transform: translateX(-50%);
    width: 200%;
    height: 90px;
    background: #fbfdfc;
    border-radius: 50%;
    z-index: 2;
}

.sub-hero-content {
    position: relative;
    z-index: 10;
    max-width: 900px;
    margin: 0 auto;
}

.sub-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.25);
    color: #d4a853;
    font-size: 0.85rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 6px 16px;
    border-radius: 30px;
    margin-bottom: 20px;
    backdrop-filter: blur(4px);
}

.sub-hero h1 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 3.2em;
    font-weight: 700;
    margin: 0 0 14px;
    letter-spacing: -0.02em;
    color: #ffffff;
    text-shadow: 0 2px 10px rgba(0,0,0,0.2);
}

.sub-hero p.journal-meta {
    font-size: 1.15em;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    margin: 0 0 18px;
    font-weight: 400;
}

.sub-hero-contact {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.15);
    padding: 8px 18px;
    border-radius: 20px;
    font-size: 0.95em;
    color: #ffffff;
}

.sub-hero-contact a {
    color: #fce3a0;
    text-decoration: none;
    font-weight: 600;
}

.sub-hero-contact a:hover {
    text-decoration: underline;
}

/* Layout Grid */
.sub-document-wrapper {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 24px;
    display: flex;
    gap: 50px;
    align-items: flex-start;
}

/* Sticky Navigation Table of Contents */
.sub-toc {
    flex: 0 0 280px;
    position: sticky;
    top: 90px;
    background: #ffffff;
    padding: 0;
    border-radius: 16px;
    border: 1px solid #e1ebe5;
    box-shadow: 0 4px 24px rgba(7, 63, 34, 0.05);
    overflow: hidden;
}

.sub-toc-header {
    background: linear-gradient(135deg, #073f22 0%, #0d542e 100%);
    padding: 18px 22px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.sub-toc-header svg {
    color: #d4a853;
    flex-shrink: 0;
}

.sub-toc-header h4 {
    font-size: 0.82em;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: #ffffff;
    margin: 0;
    font-weight: 700;
}

.sub-toc-header .toc-count {
    margin-left: auto;
    background: rgba(255,255,255,0.15);
    color: rgba(255,255,255,0.9);
    font-size: 0.72em;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 20px;
    letter-spacing: 0.04em;
}

.sub-toc ul {
    list-style: none;
    padding: 10px 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0;
    counter-reset: toc-counter;
}

.sub-toc li {
    counter-increment: toc-counter;
}

.sub-toc a {
    color: #4a5d52;
    text-decoration: none;
    font-size: 0.88em;
    font-weight: 500;
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    align-items: center;
    gap: 12px;
    line-height: 1.4;
    padding: 9px 20px;
    border-left: 3px solid transparent;
    position: relative;
}

.sub-toc a::before {
    content: counter(toc-counter, decimal-leading-zero);
    font-family: 'Inter', sans-serif;
    font-size: 0.78em;
    font-weight: 700;
    color: #b0c4b8;
    background: #f4f9f6;
    width: 28px;
    height: 28px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
}

.sub-toc a:hover {
    color: #073f22;
    background: #f6fbf8;
    border-left-color: #10b865;
}

.sub-toc a:hover::before {
    background: #10b865;
    color: #ffffff;
    transform: scale(1.08);
}

.sub-toc a.toc-active {
    color: #073f22;
    font-weight: 600;
    background: #eef7f2;
    border-left-color: #10b865;
}

.sub-toc a.toc-active::before {
    background: #073f22;
    color: #ffffff;
}

/* Main Content Area */
.sub-content {
    flex: 1;
    min-width: 0;
}

/* CTA Card */
.sub-cta-banner {
    background: linear-gradient(135deg, #ffffff 0%, #f4fbf7 100%);
    border: 1px solid #d2e7db;
    border-left: 5px solid #10b865;
    border-radius: 14px;
    padding: 24px 30px;
    margin-bottom: 36px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    box-shadow: 0 4px 20px rgba(16, 184, 101, 0.06);
}

.sub-cta-info h3 {
    margin: 0 0 6px;
    font-size: 1.25em;
    color: #073f22;
    font-weight: 700;
}

.sub-cta-info p {
    margin: 0;
    font-size: 0.98em;
    color: #455a4e;
}

.sub-cta-buttons {
    display: flex;
    gap: 12px;
    flex-shrink: 0;
}

.btn-sub-primary {
    background: #073f22;
    color: #ffffff !important;
    font-weight: 600;
    font-size: 0.92em;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
}

.btn-sub-primary:hover {
    background: #10b865;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(16, 184, 101, 0.25);
}

.btn-sub-secondary {
    background: #ffffff;
    color: #073f22 !important;
    border: 1px solid #c8ded1;
    font-weight: 600;
    font-size: 0.92em;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.2s ease;
}

.btn-sub-secondary:hover {
    background: #eef7f2;
    border-color: #073f22;
}

/* Sections */
.sub-section {
    background: #ffffff;
    border: 1px solid #e4ede7;
    border-radius: 14px;
    padding: 36px 40px;
    margin-bottom: 36px;
    box-shadow: 0 4px 18px rgba(7, 63, 34, 0.03);
    scroll-margin-top: 100px;
}

.sub-section h2 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 1.8em;
    color: #073f22;
    margin: 0 0 20px;
    font-weight: 700;
    padding-bottom: 14px;
    border-bottom: 2px solid #edf4ef;
    display: flex;
    align-items: center;
    gap: 12px;
}

.sub-section h2 svg {
    color: #10b865;
    width: 26px;
    height: 26px;
    flex-shrink: 0;
}

.sub-section h3 {
    font-size: 1.2em;
    color: #0e4c2b;
    margin: 26px 0 14px;
    font-weight: 600;
}

.sub-section p {
    font-size: 1.04em;
    line-height: 1.75;
    color: #3b4e43;
    margin-bottom: 18px;
    text-align: justify;
}

.sub-section p:last-child {
    margin-bottom: 0;
}

/* Feature Grid / Cards */
.sub-card-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
    gap: 16px;
    margin: 22px 0;
}

.sub-card {
    background: #fafdfb;
    border: 1px solid #e1ebe5;
    border-radius: 10px;
    padding: 20px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.sub-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(7, 63, 34, 0.06);
    border-color: #bee0cb;
}

.sub-card h4 {
    margin: 0 0 8px;
    font-size: 1.05em;
    color: #073f22;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
}

.sub-card p {
    font-size: 0.96em;
    line-height: 1.6;
    margin: 0;
    color: #43574b;
    text-align: left;
}

/* Bullet list style */
.sub-list {
    list-style: none;
    padding: 0;
    margin: 16px 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.sub-list li {
    position: relative;
    padding-left: 26px;
    font-size: 1.02em;
    line-height: 1.65;
    color: #3b4e43;
}

.sub-list li::before {
    content: '';
    position: absolute;
    left: 8px;
    top: 10px;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #10b865;
}

/* Code & Example Blocks */
.example-box {
    background: #f7faf8;
    border: 1px solid #dce8e1;
    border-radius: 10px;
    padding: 18px 22px;
    margin: 16px 0;
    font-size: 0.98em;
    line-height: 1.6;
    color: #2a3c31;
}

.example-box code {
    background: #eef6f1;
    color: #08522d;
    padding: 3px 8px;
    border-radius: 4px;
    font-family: 'Consolas', 'Courier New', monospace;
    font-size: 0.92em;
}

.example-title {
    font-weight: 700;
    color: #073f22;
    font-size: 0.9em;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 6px;
}

/* Checklist Items */
.checklist-grid {
    display: flex;
    flex-direction: column;
    gap: 14px;
    margin: 20px 0;
}

.checklist-card {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    background: #fafdfb;
    border: 1px solid #e1ebe5;
    border-radius: 10px;
    padding: 16px 20px;
}

.checklist-icon {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #eef7f2;
    color: #10b865;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-top: 2px;
}

.checklist-text {
    font-size: 1.01em;
    color: #3b4e43;
    line-height: 1.6;
}

/* Headings Format Table */
.heading-spec-card {
    background: #f9fbf9;
    border: 1px solid #e1ebe5;
    border-radius: 10px;
    padding: 16px 20px;
    margin-bottom: 12px;
}

.heading-spec-card h5 {
    margin: 0 0 6px;
    color: #073f22;
    font-size: 1.05em;
}

.heading-spec-card p {
    margin: 0;
    font-size: 0.95em;
    color: #4a5e52;
}

/* Template Download Card */
.sub-template-card {
    background: linear-gradient(135deg, #f4fbf7 0%, #ffffff 100%);
    border: 1px solid #c8e6d5;
    border-radius: 14px;
    padding: 24px 30px;
    margin-bottom: 36px;
    display: flex;
    align-items: center;
    gap: 20px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    box-shadow: 0 4px 18px rgba(7, 63, 34, 0.04);
}

.sub-template-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 28px rgba(7, 63, 34, 0.08);
}

.sub-template-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    background: linear-gradient(135deg, #073f22 0%, #10b865 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(16, 184, 101, 0.2);
}

.sub-template-info {
    flex: 1;
    min-width: 0;
}

.sub-template-info h3 {
    margin: 0 0 4px;
    font-size: 1.15em;
    color: #073f22;
    font-weight: 700;
}

.sub-template-info p {
    margin: 0;
    font-size: 0.92em;
    color: #4a5e52;
    line-height: 1.5;
}

.sub-template-info .template-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: #eef7f2;
    color: #0e6b3a;
    font-size: 0.78em;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 14px;
    margin-top: 8px;
    text-transform: uppercase;
    letter-spacing: 0.04em;
}

.btn-template-download {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #073f22;
    color: #ffffff !important;
    font-weight: 600;
    font-size: 0.92em;
    padding: 11px 22px;
    border-radius: 10px;
    text-decoration: none;
    white-space: nowrap;
    flex-shrink: 0;
    transition: all 0.2s ease;
    box-shadow: 0 2px 8px rgba(7, 63, 34, 0.15);
}

.btn-template-download:hover {
    background: #10b865;
    transform: translateY(-1px);
    box-shadow: 0 4px 16px rgba(16, 184, 101, 0.3);
}

/* Responsive */
@media (max-width: 992px) {
    .sub-document-wrapper {
        flex-direction: column;
        gap: 30px;
    }
    
    .sub-toc {
        position: static;
        flex: auto;
        width: 100%;
        box-sizing: border-box;
    }

    .sub-cta-banner {
        flex-direction: column;
        align-items: flex-start;
    }

    .sub-section {
        padding: 26px 24px;
    }
    
    .sub-hero h1 {
        font-size: 2.3em;
    }
}
</style>

<div id="main-content" class="page page_submissions">

        <div class="sub-hero">
        <div class="sub-hero-content">
            <div class="sub-hero-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                Author Center &amp; Submissions
            </div>
            <h1>Guidelines for Authors</h1>
            <p class="journal-meta">Central Bicol State University of Agriculture<br>Multidisciplinary Research and Extension Journal (MREJ-CBSUA)</p>
            <div class="sub-hero-contact">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Submission Emails: <a href="mailto:mrej.cbsua@cbsua.edu.ph">mrej.cbsua@cbsua.edu.ph</a> &bull; <a href="mailto:ramonaisabel.ramirez@cbsua.edu.ph">ramonaisabel.ramirez@cbsua.edu.ph</a>
            </div>
        </div>
    </div>

    <div class="sub-document-wrapper">

                <nav class="sub-toc" aria-label="Author Guidelines Table of Contents">
            <div class="sub-toc-header">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                <h4>Contents</h4>
                <span class="toc-count">10 sections</span>
            </div>
            <ul>
                <li><a href="#overview">Overview &amp; Guidelines</a></li>
                <li><a href="#paper-format">Paper Format &amp; Layout</a></li>
                <li><a href="#structure">Manuscript Structure</a></li>
                <li><a href="#tables-figures">Tables &amp; Figures</a></li>
                <li><a href="#citation-style">Numeric Citation Style</a></li>
                <li><a href="#reference-list">Reference List Rules</a></li>
                <li><a href="#reference-software">Reference Software</a></li>
                <li><a href="#headings-paragraphs">Headings &amp; Paragraphs</a></li>
                <li><a href="#checklist">Submission Checklist</a></li>
                <li><a href="#copyright">Copyright Notice</a></li>
            </ul>
        </nav>

                <div class="sub-content">

                        <?php if ($_smarty_tpl->tpl_vars['isUserLoggedIn']->value) {?>
                <div class="sub-cta-banner">
                    <div class="sub-cta-info">
                        <h3>Ready to Submit Your Research?</h3>
                        <p>You are logged in. Submit a new manuscript or view status of your existing submissions.</p>
                    </div>
                    <div class="sub-cta-buttons">
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submission",'op'=>"wizard"),$_smarty_tpl ) );?>
" class="btn-sub-primary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
                            Start New Submission
                        </a>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submissions"),$_smarty_tpl ) );?>
" class="btn-sub-secondary">
                            View Submissions
                        </a>
                    </div>
                </div>
            <?php } else { ?>
                <div class="sub-cta-banner">
                    <div class="sub-cta-info">
                        <h3>Submit Your Manuscript</h3>
                        <p>Registration and login are required to submit articles online and track peer review status.</p>
                    </div>
                    <div class="sub-cta-buttons">
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"login"),$_smarty_tpl ) );?>
" class="btn-sub-primary">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3"/></svg>
                            Login
                        </a>
                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"user",'op'=>"register"),$_smarty_tpl ) );?>
" class="btn-sub-secondary">
                            Register
                        </a>
                    </div>
                </div>
            <?php }?>

                        <div class="sub-template-card">
                <div class="sub-template-icon">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                </div>
                <div class="sub-template-info">
                    <h3>Manuscript Submission Template</h3>
                    <p>Use this official MREJ-CBSUA template to prepare your manuscript with the correct format, layout, and structure.</p>
                    <span class="template-badge">
                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                        Google Docs &bull; Word Template
                    </span>
                </div>
                <a href="https://docs.google.com/document/d/1Xk1AL0SnQz5wRyDS1PxlRBFDL5xHOseg/edit?usp=sharing&ouid=110688145141713811758&rtpof=true&sd=true" target="_blank" rel="noopener" class="btn-template-download">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    Open Template
                </a>
            </div>
            
                        <section id="overview" class="sub-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                    General Author Guidelines
                </h2>
                <p>
                    Articles submitted to MREJ-CBSUA should be written in a clear and straightforward style, free of technical jargon.
                </p>
                <ul class="sub-list">
                    <li><strong>Footnotes:</strong> Footnotes to the text must be avoided.</li>
                    <li><strong>Biographical Details:</strong> Author(s)' biographical details should not exceed <strong>35 words</strong> and should be provided on a separate cover page with other details, such as contact numbers and emails, as well as the article title.</li>
                    <li><strong>Grammar &amp; Style:</strong> The author(s) must ensure the grammar and spelling are correct and the style of presentation is satisfactory prior to submission.</li>
                </ul>
            </section>

                        <section id="paper-format" class="sub-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
                    Paper Format &amp; Specifications
                </h2>

                <div class="sub-card-grid">
                    <div class="sub-card">
                        <h4>Paper Size</h4>
                        <p><strong>A4</strong> (8.27 &times; 11.69 inches)</p>
                    </div>

                    <div class="sub-card">
                        <h4>Margins</h4>
                        <p><strong>1.5 inches</strong> (Left margin)<br><strong>1.0 inch</strong> (Right, Top, and Bottom)</p>
                    </div>

                    <div class="sub-card">
                        <h4>Line Spacing &amp; Numbers</h4>
                        <p>Typed with <strong>double spacing</strong> and numbered pages throughout.</p>
                    </div>

                    <div class="sub-card">
                        <h4>Font &amp; File Format</h4>
                        <p><strong>Arial (Regular), size 12</strong>. Saved as a <strong>Microsoft Word document (.doc/.docx)</strong>.</p>
                    </div>
                </div>

                <div class="example-box">
                    <div class="example-title">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        Submission Email &amp; File Verification
                    </div>
                    Manuscripts must be sent to <a href="mailto:mrej.cbsua@cbsua.edu.ph" style="color: #073f22; font-weight: 600;">mrej.cbsua@cbsua.edu.ph</a>. If you have not received an acknowledgment within <strong>10 working days</strong>, please re-send the article or contact the editor at <a href="mailto:ramonaisabel.ramirez@cbsua.edu.ph" style="color: #073f22; font-weight: 600;">ramonaisabel.ramirez@cbsua.edu.ph</a>. Please ensure all submitted files are <strong>VIRUS-FREE</strong>.
                </div>
            </section>

                        <section id="structure" class="sub-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
                    Manuscript Structure (Order of Elements)
                </h2>
                <p>The following elements are required in order:</p>

                <ul class="sub-list">
                    <li><strong>Title Page:</strong> Contains paper title (no longer than <strong>15 words</strong>), corresponding author names, affiliations, contact numbers, and emails. Author contact details should NOT appear on any other page.</li>
                    <li><strong>Abstract:</strong> Short abstract of between <strong>200 and 300 words</strong>, summarizing problem addressed, objectives, research methods, key findings, and major conclusions.</li>
                    <li><strong>Introduction:</strong> Background context, research problem, and study objectives.</li>
                    <li><strong>Materials and Methods:</strong> Detailed explanation of experimental design and methodology.</li>
                    <li><strong>Results and Discussion:</strong> Presentation of data, analysis, and logical discussions.</li>
                    <li><strong>References:</strong> Formatted list using Elsevier numeric citation system.</li>
                    <li><strong>Acknowledgments:</strong> Recognition of funding sources, technical assistance, or contributions.</li>
                </ul>
            </section>

                        <section id="tables-figures" class="sub-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M21 9H3M21 15H3M12 3v18"/></svg>
                    Tables &amp; Figures
                </h2>

                <h3>Tables</h3>
                <p>
                    Tables must be on <strong>separate pages</strong> and not included in the main text of the article. Table headings must be listed together on a separate page. Tables are to be numbered consecutively and their approximate placement indicated within the article.
                </p>

                <h3>Figures &amp; Artworks</h3>
                <p>
                    Diagrams, photographs, figures, and artworks must be supplied in <strong>high resolution</strong>, digital format suitable for reproduction. Diagrams will not normally be redrawn by the publisher. Submit each figure on a separate page with descriptive headings and indicate preferred position in the article.
                </p>
            </section>

                        <section id="citation-style" class="sub-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/></svg>
                    Elsevier Numeric Citation Style
                </h2>
                <p>MREJ-CBSUA utilizes Vancouver-style Elsevier numeric citations in square brackets.</p>

                <div class="sub-card-grid">
                    <div class="sub-card">
                        <h4>Single Citation</h4>
                        <p>Immediately after statement:<br><code>Mushroom cultivation improves rural livelihoods [1].</code></p>
                    </div>

                    <div class="sub-card">
                        <h4>Multiple (Non-consecutive)</h4>
                        <p>Separated by commas:<br><code>[2,5,7]</code></p>
                    </div>

                    <div class="sub-card">
                        <h4>Multiple (Consecutive)</h4>
                        <p>Joined by en-dash:<br><code>[8–10]</code></p>
                    </div>

                    <div class="sub-card">
                        <h4>Punctuation Position</h4>
                        <p>Citation appears before period:<br><code>Lactobacillus species exhibit activity [3].</code></p>
                    </div>
                </div>

                <h3>Narrative Author Citations</h3>
                <div class="example-box">
                    <div class="example-title">Correct Author In-Text Formats</div>
                    <ul style="margin: 0; padding-left: 20px;">
                        <li><code>Bellere et al. reported that mushrooms possess antioxidant properties [1].</code></li>
                        <li><code>According to Bellere and colleagues, citronella waste can support Pleurotus growth [2].</code></li>
                        <li><code>Yi and Bellere demonstrated an improvement in mycelial yield under optimized conditions [3].</code></li>
                        <li><code>Bellere et al. (2021) claimed that mushrooms have antioxidant potential [1].</code></li>
                    </ul>
                </div>

                <div class="policy-callout" style="background: #fffbf0; border-left: 4px solid #e6a100; padding: 14px 20px; border-radius: 8px; margin: 16px 0;">
                    <p style="margin: 0; color: #5a4100; font-size: 0.98em;">
                        <strong>Important Rule:</strong> Adding the year in parentheses in narrative text (e.g. <em>Bellere et al. (2021)</em>) does <strong>NOT</strong> replace the numeric citation. The number <code>[1]</code> must still be included to correspond to the entry in the Reference List.
                    </p>
                </div>
            </section>

                        <section id="reference-list" class="sub-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                    Reference List Formatting Rules
                </h2>
                <p>
                    Place the reference list at the end of the document under the heading <strong>References</strong>. Number references according to the order they appear in text. <strong>Do not rearrange alphabetically.</strong>
                </p>

                <h3>Reference Examples by Type</h3>

                <div class="example-box">
                    <div class="example-title">A. Journal Article</div>
                    <p style="margin: 0 0 6px;"><strong>Format:</strong> <code>[1] Author AA, Author BB. Title of article. Journal Name. Year;Volume(Issue):Page–Page.</code></p>
                    <p style="margin: 0;"><strong>Example:</strong> <code>[1] Bellere AD, Yi DT. Optimization of mycelial growth in Pleurotus species. Mycology Research. 2023;15(2):134–142.</code></p>
                </div>

                <div class="example-box">
                    <div class="example-title">B. Book</div>
                    <p style="margin: 0 0 6px;"><strong>Format:</strong> <code>[2] Author AA. Title of Book. Edition. Publisher; Year.</code></p>
                </div>

                <div class="example-box">
                    <div class="example-title">C. Book Chapter</div>
                    <p style="margin: 0 0 6px;"><strong>Format:</strong> <code>[3] Author AA. Title of chapter. In: Editor BB, editor. Title of Book. Publisher; Year. p. xx–xx.</code></p>
                </div>

                <div class="example-box">
                    <div class="example-title">D. Website</div>
                    <p style="margin: 0 0 6px;"><strong>Format:</strong> <code>[4] Author/Organization. Title. Year. Available from: URL (accessed Date).</code></p>
                </div>
            </section>

                        <section id="reference-software" class="sub-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
                    Using Reference Management Software
                </h2>
                <p>Authors are encouraged to use reference management software (<strong>Zotero, Mendeley, or EndNote</strong>):</p>

                <div class="checklist-grid">
                    <div class="checklist-card">
                        <div class="checklist-icon">1</div>
                        <div class="checklist-text"><strong>Select Citation Style:</strong> Choose <em>Elsevier – Vancouver</em> or <em>AMA</em> in your software settings.</div>
                    </div>
                    <div class="checklist-card">
                        <div class="checklist-icon">2</div>
                        <div class="checklist-text"><strong>Insert Citations:</strong> The software automatically generates square-bracketed numbers <code>[1]</code>, <code>[2]</code> in text.</div>
                    </div>
                    <div class="checklist-card">
                        <div class="checklist-icon">3</div>
                        <div class="checklist-text"><strong>Generate Bibliography:</strong> Automatically generate the formatted numeric reference list at the end.</div>
                    </div>
                </div>
            </section>

                        <section id="headings-paragraphs" class="sub-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 6h16M4 12h16M4 18h7"/></svg>
                    Headings &amp; Paragraph Formatting
                </h2>

                <p>The use of informative sub-headings is recommended. Please adhere strictly to the following specification:</p>

                <div class="heading-spec-card">
                    <h5>HEADING 1</h5>
                    <p>Font size 12, <strong>ALL CAPS</strong>, <strong>bold</strong>. Maintain one line space above and one line space below it.</p>
                </div>

                <div class="heading-spec-card">
                    <h5>Heading 2</h5>
                    <p>Font size 12, <strong>Sentence case</strong>, <strong>bold</strong>. Maintain one line space above it only.</p>
                </div>

                <div class="heading-spec-card">
                    <h5><em>Heading 3</em></h5>
                    <p>Font size 12, <strong>Sentence case</strong>, <strong>bold</strong>, <em>italicized</em>. Maintain one line space above it only.</p>
                </div>

                <h3>Paragraph Spacing</h3>
                <p>
                    Paragraphs should be separated by a blank line (one line space apart). <strong>Do NOT indent the first line of a paragraph.</strong>
                </p>
            </section>

                        <?php if ($_smarty_tpl->tpl_vars['submissionChecklist']->value) {?>
                <section id="checklist" class="sub-section">
                    <h2>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.submissionPreparationChecklist"),$_smarty_tpl ) );?>

                    </h2>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.submissionPreparationChecklist.description"),$_smarty_tpl ) );?>
</p>
                    
                    <div class="checklist-grid">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submissionChecklist']->value, 'checklistItem');
$_smarty_tpl->tpl_vars['checklistItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['checklistItem']->value) {
$_smarty_tpl->tpl_vars['checklistItem']->do_else = false;
?>
                            <div class="checklist-card">
                                <div class="checklist-icon">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                                </div>
                                <div class="checklist-text"><?php echo nl2br((string) $_smarty_tpl->tpl_vars['checklistItem']->value['content'], (bool) 1);?>
</div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </section>
            <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedSetting('copyrightNotice')) {?>
                <section id="copyright" class="sub-section">
                    <h2>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M14.83 14.83a4 4 0 1 1 0-5.66"/></svg>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.copyrightNotice"),$_smarty_tpl ) );?>

                    </h2>
                    <p><?php echo $_smarty_tpl->tpl_vars['currentJournal']->value->getLocalizedSetting('copyrightNotice');?>
</p>
                </section>
            <?php }?>

        </div>
    </div>

</div><!-- .page -->

<?php echo '<script'; ?>
>
(function() {
    var tocLinks = document.querySelectorAll('.sub-toc a');
    var sections = [];
    tocLinks.forEach(function(link) {
        var id = link.getAttribute('href').replace('#', '');
        var el = document.getElementById(id);
        if (el) sections.push({ id: id, el: el, link: link });
    });

    // Smooth scroll on click
    tocLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            var id = this.getAttribute('href').replace('#', '');
            var target = document.getElementById(id);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                history.replaceState(null, '', '#' + id);
            }
        });
    });

    // IntersectionObserver for active state
    if ('IntersectionObserver' in window && sections.length) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    tocLinks.forEach(function(l) { l.classList.remove('toc-active'); });
                    sections.forEach(function(s) {
                        if (s.id === entry.target.id) s.link.classList.add('toc-active');
                    });
                }
            });
        }, { rootMargin: '-80px 0px -60% 0px', threshold: 0.1 });

        sections.forEach(function(s) { observer.observe(s.el); });
    }
})();
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
