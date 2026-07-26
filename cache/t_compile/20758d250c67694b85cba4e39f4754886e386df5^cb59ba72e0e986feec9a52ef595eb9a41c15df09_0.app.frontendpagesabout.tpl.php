<?php
/* Smarty version 4.3.1, created on 2026-07-20 15:27:12
  from 'app:frontendpagesabout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5e2230a7ae34_54924929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb59ba72e0e986feec9a52ef595eb9a41c15df09' => 
    array (
      0 => 'app:frontendpagesabout.tpl',
      1 => 1784554015,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6a5e2230a7ae34_54924929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"Editorial Policy"), 0, false);
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
.page_about {
    background: #fbfdfc;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    color: #2c3e35;
    padding-bottom: 80px;
}

/* Hero Section */
.about-hero {
    background: linear-gradient(135deg, #052e18 0%, #073f22 60%, #0d542e 100%);
    padding: 70px 20px 85px;
    text-align: center;
    color: #ffffff;
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(5, 46, 24, 0.15);
}

.about-hero::after {
    content: '';
    position: absolute;
    bottom: -50px;
    left: 50%;
    transform: translateX(-50%);
    width: 200%;
    height: 90px;
    background: #fbfdfc;
    border-radius: 50%;
}

.about-hero-content {
    position: relative;
    z-index: 10;
    max-width: 900px;
    margin: 0 auto;
}

.about-hero-badge {
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

.about-hero h1 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 3.2em;
    font-weight: 700;
    margin: 0 0 14px;
    letter-spacing: -0.02em;
    color: #ffffff;
    text-shadow: 0 2px 10px rgba(0,0,0,0.2);
}

.about-hero p.journal-meta {
    font-size: 1.15em;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    margin: 0 0 18px;
    font-weight: 400;
}

.about-hero-contact {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.15);
    padding: 8px 18px;
    border-radius: 20px;
    font-size: 0.95em;
    color: #ffffff;
}

.about-hero-contact a {
    color: #fce3a0;
    text-decoration: none;
    font-weight: 600;
}

.about-hero-contact a:hover {
    text-decoration: underline;
}

/* Layout Grid */
.about-document-wrapper {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 24px;
    display: flex;
    gap: 50px;
    align-items: flex-start;
}

/* Sticky Navigation Table of Contents */
.about-toc {
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

.about-toc-header {
    background: linear-gradient(135deg, #073f22 0%, #0d542e 100%);
    padding: 18px 22px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.about-toc-header svg {
    color: #d4a853;
    flex-shrink: 0;
}

.about-toc-header h4 {
    font-size: 0.82em;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: #ffffff;
    margin: 0;
    font-weight: 700;
}

.about-toc-header .toc-count {
    margin-left: auto;
    background: rgba(255,255,255,0.15);
    color: rgba(255,255,255,0.9);
    font-size: 0.72em;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 20px;
    letter-spacing: 0.04em;
}

.about-toc ul {
    list-style: none;
    padding: 10px 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0;
    counter-reset: toc-counter;
}

.about-toc li {
    counter-increment: toc-counter;
}

.about-toc a {
    color: #4a5d52;
    text-decoration: none;
    font-size: 0.9em;
    font-weight: 500;
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    align-items: center;
    gap: 12px;
    line-height: 1.4;
    padding: 10px 22px;
    border-left: 3px solid transparent;
    position: relative;
}

.about-toc a::before {
    content: counter(toc-counter, decimal-leading-zero);
    font-family: 'Inter', sans-serif;
    font-size: 0.78em;
    font-weight: 700;
    color: #b0c4b8;
    background: #f4f9f6;
    width: 30px;
    height: 30px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
}

.about-toc a:hover {
    color: #073f22;
    background: #f6fbf8;
    border-left-color: #10b865;
}

.about-toc a:hover::before {
    background: #10b865;
    color: #ffffff;
    transform: scale(1.08);
}

.about-toc a.toc-active {
    color: #073f22;
    font-weight: 600;
    background: #eef7f2;
    border-left-color: #10b865;
}

.about-toc a.toc-active::before {
    background: #073f22;
    color: #ffffff;
}

/* Main Content Area */
.about-content {
    flex: 1;
    min-width: 0;
}

/* Sections */
.about-section {
    background: #ffffff;
    border: 1px solid #e4ede7;
    border-radius: 14px;
    padding: 36px 40px;
    margin-bottom: 36px;
    box-shadow: 0 4px 18px rgba(7, 63, 34, 0.03);
    scroll-margin-top: 100px;
}

.about-section h2 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 1.9em;
    color: #073f22;
    margin: 0 0 20px;
    font-weight: 700;
    padding-bottom: 14px;
    border-bottom: 2px solid #edf4ef;
    display: flex;
    align-items: center;
    gap: 12px;
}

.about-section h2 svg {
    color: #10b865;
    width: 26px;
    height: 26px;
    flex-shrink: 0;
}

.about-section h3 {
    font-size: 1.25em;
    color: #0e4c2b;
    margin: 28px 0 14px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
}

.about-section p {
    font-size: 1.05em;
    line-height: 1.75;
    color: #3b4e43;
    margin-bottom: 18px;
    text-align: justify;
}

.about-section p:last-child {
    margin-bottom: 0;
}

/* Callout Box */
.policy-callout {
    background: #f2f9f5;
    border-left: 4px solid #10b865;
    padding: 18px 24px;
    border-radius: 0 10px 10px 0;
    margin: 20px 0 26px;
    display: flex;
    align-items: flex-start;
    gap: 14px;
}

.policy-callout-icon {
    color: #10b865;
    flex-shrink: 0;
    margin-top: 2px;
}

.policy-callout p {
    margin: 0;
    font-size: 1.02em;
    color: #1c4d33;
    font-weight: 500;
}

/* Feature Grid / Cards */
.policy-card-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 18px;
    margin: 24px 0;
}

.policy-card {
    background: #fafdfb;
    border: 1px solid #e1ebe5;
    border-radius: 10px;
    padding: 20px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.policy-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(7, 63, 34, 0.06);
    border-color: #bee0cb;
}

.policy-card h4 {
    margin: 0 0 10px;
    font-size: 1.1em;
    color: #073f22;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
}

.policy-card p {
    font-size: 0.98em;
    line-height: 1.6;
    margin: 0;
    color: #43574b;
    text-align: left;
}

/* Plagiarism Matrix Badges */
.plagiarism-matrix {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 16px;
    margin: 24px 0 10px;
}

.plagiarism-item {
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    border: 1px solid transparent;
}

.plagiarism-item.accept {
    background: #eefbf4;
    border-color: #bcebce;
}

.plagiarism-item.revise {
    background: #fffbf0;
    border-color: #ffe4b3;
}

.plagiarism-item.reject {
    background: #fdf2f2;
    border-color: #f8c8c8;
}

.plagiarism-badge {
    display: inline-block;
    font-size: 1.4em;
    font-weight: 800;
    padding: 4px 14px;
    border-radius: 20px;
    margin-bottom: 10px;
}

.accept .plagiarism-badge {
    background: #10b865;
    color: #ffffff;
}

.revise .plagiarism-badge {
    background: #e6a100;
    color: #ffffff;
}

.reject .plagiarism-badge {
    background: #e53935;
    color: #ffffff;
}

.plagiarism-item h5 {
    margin: 0 0 8px;
    font-size: 1.05em;
    font-weight: 700;
    color: #2c3e35;
}

.plagiarism-item p {
    font-size: 0.95em;
    line-height: 1.5;
    margin: 0;
    text-align: center;
    color: #4a5e52;
}

/* Bullet list style */
.policy-list {
    list-style: none;
    padding: 0;
    margin: 18px 0;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.policy-list li {
    position: relative;
    padding-left: 28px;
    font-size: 1.03em;
    line-height: 1.65;
    color: #3b4e43;
}

.policy-list li::before {
    content: '';
    position: absolute;
    left: 8px;
    top: 10px;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #10b865;
}

/* Timeline / Deadlines */
.deadline-box {
    display: flex;
    gap: 16px;
    background: #f7faf8;
    border: 1px solid #e1ebe5;
    border-radius: 10px;
    padding: 16px 20px;
    margin: 16px 0;
    align-items: center;
}

.deadline-tag {
    background: #073f22;
    color: #ffffff;
    font-weight: 700;
    font-size: 0.9em;
    padding: 6px 14px;
    border-radius: 6px;
    white-space: nowrap;
    flex-shrink: 0;
}

.deadline-text {
    font-size: 0.98em;
    color: #3b4e43;
    line-height: 1.5;
    margin: 0;
}

/* Custom Settings Block */
.about-custom {
    background: #ffffff;
    border-left: 4px solid #10b865;
}

/* Responsive Styles */
@media (max-width: 992px) {
    .about-document-wrapper {
        flex-direction: column;
        gap: 30px;
    }
    
    .about-toc {
        position: static;
        flex: auto;
        width: 100%;
        box-sizing: border-box;
    }

    .about-section {
        padding: 26px 24px;
    }
    
    .about-hero h1 {
        font-size: 2.3em;
    }
}
</style>

<div id="main-content" class="page page_about">

        <div class="about-hero">
        <div class="about-hero-content">
            <div class="about-hero-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                Official Publications Policy
            </div>
            <h1>Editorial Policy</h1>
            <p class="journal-meta">Central Bicol State University of Agriculture<br>Multidisciplinary Research and Extension Journal</p>
            <div class="about-hero-contact">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Managing Editor Contact: <a href="mailto:mrej.cbsua@cbsua.edu.ph">mrej.cbsua@cbsua.edu.ph</a>
            </div>
        </div>
    </div>

    <div class="about-document-wrapper">

                <nav class="about-toc" aria-label="Policy Table of Contents">
            <div class="about-toc-header">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                <h4>Contents</h4>
                <span class="toc-count">11 sections</span>
            </div>
            <ul>
                <li><a href="#overview">Overview &amp; Process</a></li>
                <li><a href="#submission">Submission &amp; Authorship</a></li>
                <li><a href="#peer-review">Peer Review Process</a></li>
                <li><a href="#revisions">Revisions &amp; Proofreading</a></li>
                <li><a href="#copyright">Copyright &amp; Erratum</a></li>
                <li><a href="#misconduct">Scientific Misconduct</a></li>
                <li><a href="#plagiarism">Plagiarism Policy</a></li>
                <li><a href="#retraction">Retraction Policy</a></li>
                <li><a href="#conflict">Conflict of Interest</a></li>
                <li><a href="#ethics">Ethical Policies</a></li>
                <li><a href="#appeals">Appeals &amp; Complaints</a></li>
            </ul>
        </nav>

                <div class="about-content">
            
                        <section id="overview" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 17 12 22 22 17"></polyline>
                        <polyline points="2 12 12 17 22 12"></polyline>
                    </svg>
                    Overview of the Editorial Process
                </h2>
                
                <div class="policy-callout">
                    <div class="policy-callout-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                    </div>
                    <p>For detailed submission guidelines, please contact the Managing Editor of the journal at <a href="mailto:mrej.cbsua@cbsua.edu.ph" style="color: #073f22; text-decoration: underline;">mrej.cbsua@cbsua.edu.ph</a>.</p>
                </div>
            </section>

                        <section id="submission" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    Submission &amp; Authorship
                </h2>

                <h3>Submission Guidelines</h3>
                <p>
                    The articles to be submitted must have a cover letter stating the authority of the author(s) to publish their scientific work, and the paper (or one with substantially the same content by any of the authors) has not been previously published (in any language) anywhere. It is not under simultaneous consideration by other journals. All authors of the submitted article are responsible for the content; they must have agreed to its publication, and the corresponding author has the authority to act on behalf of all matters regarding the publication. Thus, the corresponding author must inform their co-authors throughout the status of submission, review, and production process of their article.
                </p>

                <h3>Authorship Criteria</h3>
                <p>
                    The article's authorship must be limited to those who contribute significantly to the conception, design, execution, or interpretation of the reported study. All those who have made significant contributions to the development of the study should be listed as co-authors. Those who do not meet the cited criteria should be acknowledged. The contributors' sole responsibility is to determine the corresponding author and co-authors of the article submitted to the journal. Authors must ensure that anyone named in the acknowledgments agrees to be named.
                </p>

                <h3>Addition or Removal of Authors</h3>
                <p>
                    The authors are entitled to request for addition or removal of an author and should be appropriately justified. In case of changing the authorship (order of listing, addition or deletion of a name, or corresponding author designation) after submission of the article, any changes will only be implemented after a receipt of signed statements of agreement between involved parties (all listed authors and the author to be removed or added).
                </p>
            </section>

                        <section id="peer-review" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    Peer Review Process
                </h2>
                <p>
                    Each article submitted to the Managing Editor must receive an acknowledgment receipt issued in correspondence to the publication process. However, the Managing Editor may decline the submitted article without review if the studies are not sufficiently novel or important to merit publication in the journal. Papers deemed unsuitable are returned to the author(s) without any review. The Managing Editor may appoint a particular Editor (with expertise in the relevant field) who can further handle the article and create an ultimate decision about its acceptance/rejection.
                </p>

                <p>
                    The reviewers must make an objective and impartial evaluation of the submitted article. They are asked to comment on the following aspects of the submitted article:
                </p>

                <div class="policy-card-grid">
                    <div class="policy-card">
                        <h4>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b865" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                            Novelty &amp; Originality
                        </h4>
                        <p>Evaluates the freshness and originality of the scientific work presented.</p>
                    </div>

                    <div class="policy-card">
                        <h4>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b865" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                            Community Relevance
                        </h4>
                        <p>Relevance and significance of the study to the community of researchers.</p>
                    </div>

                    <div class="policy-card">
                        <h4>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b865" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                            Field Significance
                        </h4>
                        <p>Pertinent impact of results, conceptual or methodological developments described.</p>
                    </div>

                    <div class="policy-card">
                        <h4>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b865" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="9" y1="3" x2="9" y2="21"/></svg>
                            Study Design &amp; Clarity
                        </h4>
                        <p>Clarity, design quality, and structure of the research study.</p>
                    </div>

                    <div class="policy-card">
                        <h4>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b865" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            Substantial Evidence
                        </h4>
                        <p>Sufficient evidentiary support for all claims and conclusions made.</p>
                    </div>

                    <div class="policy-card">
                        <h4>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b865" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                            Rigorous Methodology
                        </h4>
                        <p>Adherence to high standards of methodological rigor and scientific precision.</p>
                    </div>
                </div>

                <p>
                    Once all the reviews have been received and considered, the Editorial Board will draft a communication letter to the author. The possible types of decisions are: <strong>accept without revision</strong>, <strong>minor revision</strong>, <strong>major revision</strong>, and <strong>reject</strong>.
                </p>
            </section>

                        <section id="revisions" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    Revised Manuscript Submission &amp; Final Proofreading
                </h2>

                <h3>Revised Manuscript Submission</h3>
                <p>
                    When revision of an article is requested, the Authors should return the revised version as soon as possible to ensure prompt action before its acceptance for publication.
                </p>

                <div class="deadline-box">
                    <span class="deadline-tag">First Revision</span>
                    <p class="deadline-text">Authors must return their revised article within <strong>ten (10) working days</strong>.</p>
                </div>

                <div class="deadline-box">
                    <span class="deadline-tag">Second Revision</span>
                    <p class="deadline-text">Authors must return their revised article within <strong>five (5) working days</strong>.</p>
                </div>

                <p>
                    If the deadlines mentioned above are not met and no specific arrangements have been made with the Editor, the article will be treated as a new one and processed for the next issue. The final decision will be made by the Managing Editor, or in case of conflict, by the Editor-in-Chief.
                </p>

                <h3>Final Proofreading</h3>
                <p>
                    The authors will receive a PDF file with the edited version of their article for final proofreading before its publication. No changes or modifications can be introduced once the article is published.
                </p>

                <div class="deadline-box">
                    <span class="deadline-tag">3 Working Days</span>
                    <p class="deadline-text">Authors must check their proof pages carefully against the submitted article within <strong>three (3) working days</strong> and prepare a separate document containing all changes to be introduced. Authors are asked to provide additional comments and explanations in response to remarks and queries from technical editors.</p>
                </div>
            </section>

                        <section id="copyright" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M14.83 14.83a4 4 0 1 1 0-5.66"></path>
                    </svg>
                    Copyright Policy &amp; Erratum
                </h2>

                <h3>Copyright Policy</h3>
                <p>
                    The authors are entitled to retain their rights to the published works, such as (but not limited to): copyright and other proprietary rights relating to the published article, usage of the substance of the article in their future works, reproduce the published article for own purposes, self-archiving of the article, and additional contractual arrangements for the non-exclusive distribution of the published article with an acknowledgment to the journal.
                </p>

                <h3>Erratum</h3>
                <p>
                    Any errors detected in the published materials should be reported to the Managing Editor, and the corresponding authors should send appropriate corrected material via email.
                </p>
            </section>

                        <section id="misconduct" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                        <line x1="12" y1="9" x2="12" y2="13"></line>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    Scientific Misconduct &amp; Other Fraud
                </h2>
                <p>
                    In case of any suspicion or allegation of scientific misconduct or fraudulent research in the submitted and published article, the Editors have the right to impose sanctions on the authors, such as:
                </p>

                <ul class="policy-list">
                    <li>An immediate rejection of the article</li>
                    <li>Banning author(s) from submitting articles to the journal for a period of time</li>
                    <li>Retracting the article</li>
                    <li>Alerting editors of other journals and publishers</li>
                    <li>Bringing the concerns to the author’s sponsoring or funding agencies or other appropriate authority for investigation</li>
                </ul>

                <p>
                    The journal publishes only original articles that are not issued or published elsewhere. Any multiple submissions/publications, or redundant publications (limited to re-packaging the paper in different words or data by the same authors) will be rejected. If the above is only detected after publication, the journal has the right to publish a Retraction Note.
                </p>
            </section>

                        <section id="plagiarism" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                    </svg>
                    Plagiarism Policy
                </h2>
                <p>
                    The journal performs a plagiarism check on the submitted article before peer-reviewing. If plagiarism is detected, the extent of the article will be assessed. The journal uses standard software to check the plagiarism of the submitted paper. Thus, the authors will be provided with a copy of the result from the plagiarism checker. Based on the assessment, the following measures are taken:
                </p>

                <div class="plagiarism-matrix">
                    <div class="plagiarism-item accept">
                        <span class="plagiarism-badge">&le; 12%</span>
                        <h5>Accepted with Revision</h5>
                        <p>The article is accepted, but the author will be asked to revise the content or cite accordingly.</p>
                    </div>

                    <div class="plagiarism-item revise">
                        <span class="plagiarism-badge">12% &ndash; 25%</span>
                        <h5>Revision &amp; Resubmission</h5>
                        <p>The article must be revised, and the authors should resubmit the content.</p>
                    </div>

                    <div class="plagiarism-item reject">
                        <span class="plagiarism-badge">&gt; 25%</span>
                        <h5>Rejection</h5>
                        <p>The article will be rejected following the decision of the Editor.</p>
                    </div>
                </div>
            </section>

                        <section id="retraction" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line>
                    </svg>
                    Retraction Policy
                </h2>
                <p>
                    The article will be retracted if serious errors like professional and ethical code infringements are detected. Retraction will occur if the article has defamatory or infringed others' legal rights. In many cases, all co-authors will be informed about the retraction. A Retraction Note that stipulates the reason for retraction will be linked to the original article.
                </p>
            </section>

                        <section id="conflict" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="18" y1="8" x2="23" y2="13"></line>
                        <line x1="23" y1="8" x2="18" y2="13"></line>
                    </svg>
                    Conflict of Interest
                </h2>
                <p>
                    To encourage transparency, all authors, referees, and editors must declare any association that poses a conflict of interest in the submitted article without impeding the publication. Any contractual or proprietary considerations are not permitted, which can affect the publication of the information in the submitted paper. Potential conflicts of interest occur when an author, editor, or reviewer has financial, personal, or professional interests in the publication, which might influence their scientific judgments.
                </p>
                <p>
                    Editors should consider whether any area of conflict of interest is relevant to them and the article under consideration. Editor who believes the conflict will impede an impaired judgment should disclose the nature of the conflict and decline the submitted paper. Reviewers are encouraged to consider whether any of the above-mentioned applies to them and must declare any competing interests. If they feel they cannot review an article because of competing interests, they must inform the Editorial Board.
                </p>
            </section>

                        <section id="ethics" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                    Ethical Policies
                </h2>
                <p>
                    The journal is committed to upholding its highest publication ethics standards against publication malpractice. Any case of non-conformity to the ethical regulations of the journals is considered seriously. All parties involved in the act of publishing (the authors, Editorial Board, reviewer, and publisher) are necessary to agree upon standards of expected ethical behavior.
                </p>
            </section>

                        <section id="appeals" class="about-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                    </svg>
                    Appeals and Complaints
                </h2>

                <h3>Appeals</h3>
                <p>
                    Authors who want to appeal the rejection of their submitted article must contact the journal's Managing Editor. The appeals should refer to the paper's scientific content and its suitability for publication. The Managing Editor will make the final decision.
                </p>

                <h3>Complaints</h3>
                <p>
                    The authors who want to complain about the journal must first contact the Managing Editor. If the Managing Editor cannot resolve the complaint, the authors can directly contact the Editor-in-Chief.
                </p>
            </section>

                        <?php if ($_smarty_tpl->tpl_vars['aboutContext']->value) {?>
                <section id="additional" class="about-section about-custom">
                    <?php echo $_smarty_tpl->tpl_vars['aboutContext']->value;?>

                </section>
            <?php }?>

        </div>
    </div>

</div><!-- .page -->

<?php echo '<script'; ?>
>
(function() {
    var tocLinks = document.querySelectorAll('.about-toc a');
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
