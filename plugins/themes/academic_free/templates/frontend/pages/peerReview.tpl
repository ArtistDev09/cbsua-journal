{**
 * templates/frontend/pages/peerReview.tpl
 * Modernized "Peer Review Policy" document-style design.
 *}
{include file="frontend/components/header.tpl" pageTitle="Peer Review Policy"}

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
.page_peer_review {
    background: #fbfdfc;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    color: #2c3e35;
    padding-bottom: 80px;
}

/* Hero Section */
.peer-hero {
    background: linear-gradient(135deg, #052e18 0%, #073f22 60%, #0d542e 100%);
    padding: 70px 20px 85px;
    text-align: center;
    color: #ffffff;
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(5, 46, 24, 0.15);
}

.peer-hero::after {
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

.peer-hero-content {
    position: relative;
    z-index: 10;
    max-width: 900px;
    margin: 0 auto;
}

.peer-hero-badge {
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

.peer-hero h1 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 3.2em;
    font-weight: 700;
    margin: 0 0 14px;
    letter-spacing: -0.02em;
    color: #ffffff;
    text-shadow: 0 2px 10px rgba(0,0,0,0.2);
}

.peer-hero p.journal-meta {
    font-size: 1.15em;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    margin: 0 0 18px;
    font-weight: 400;
}

.peer-hero-contact {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.15);
    padding: 8px 18px;
    border-radius: 20px;
    font-size: 0.95em;
    color: #ffffff;
}

.peer-hero-contact a {
    color: #fce3a0;
    text-decoration: none;
    font-weight: 600;
}

.peer-hero-contact a:hover {
    text-decoration: underline;
}

/* Layout Grid */
.peer-document-wrapper {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 24px;
    display: flex;
    gap: 50px;
    align-items: flex-start;
}

/* Sticky Navigation Table of Contents */
.peer-toc {
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

.peer-toc-header {
    background: linear-gradient(135deg, #073f22 0%, #0d542e 100%);
    padding: 18px 22px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.peer-toc-header svg {
    color: #d4a853;
    flex-shrink: 0;
}

.peer-toc-header h4 {
    font-size: 0.82em;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: #ffffff;
    margin: 0;
    font-weight: 700;
}

.peer-toc-header .toc-count {
    margin-left: auto;
    background: rgba(255,255,255,0.15);
    color: rgba(255,255,255,0.9);
    font-size: 0.72em;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 20px;
    letter-spacing: 0.04em;
}

.peer-toc ul {
    list-style: none;
    padding: 10px 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0;
    counter-reset: toc-counter;
}

.peer-toc li {
    counter-increment: toc-counter;
}

.peer-toc a {
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

.peer-toc a::before {
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

.peer-toc a:hover {
    color: #073f22;
    background: #f6fbf8;
    border-left-color: #10b865;
}

.peer-toc a:hover::before {
    background: #10b865;
    color: #ffffff;
    transform: scale(1.08);
}

.peer-toc a.toc-active {
    color: #073f22;
    font-weight: 600;
    background: #eef7f2;
    border-left-color: #10b865;
}

.peer-toc a.toc-active::before {
    background: #073f22;
    color: #ffffff;
}

/* Main Content Area */
.peer-content {
    flex: 1;
    min-width: 0;
}

/* Sections */
.peer-section {
    background: #ffffff;
    border: 1px solid #e4ede7;
    border-radius: 14px;
    padding: 36px 40px;
    margin-bottom: 36px;
    box-shadow: 0 4px 18px rgba(7, 63, 34, 0.03);
    scroll-margin-top: 100px;
}

.peer-section h2 {
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

.peer-section h2 svg {
    color: #10b865;
    width: 26px;
    height: 26px;
    flex-shrink: 0;
}

.peer-section h3 {
    font-size: 1.22em;
    color: #0e4c2b;
    margin: 26px 0 14px;
    font-weight: 600;
}

.peer-section h4 {
    font-size: 1.05em;
    color: #1a5e39;
    margin: 18px 0 10px;
    font-weight: 600;
}

.peer-section p {
    font-size: 1.04em;
    line-height: 1.75;
    color: #3b4e43;
    margin-bottom: 18px;
    text-align: justify;
}

.peer-section p:last-child {
    margin-bottom: 0;
}

/* Callout Box */
.policy-callout {
    background: #f2f9f5;
    border-left: 4px solid #10b865;
    padding: 18px 24px;
    border-radius: 0 10px 10px 0;
    margin: 20px 0 24px;
    display: flex;
    align-items: flex-start;
    gap: 14px;
}

.policy-callout-warning {
    background: #fffbf0;
    border-left-color: #e6a100;
}

.policy-callout-danger {
    background: #fdf2f2;
    border-left-color: #e53935;
}

.policy-callout-icon {
    color: #10b865;
    flex-shrink: 0;
    margin-top: 2px;
}

.policy-callout-warning .policy-callout-icon {
    color: #e6a100;
}

.policy-callout-danger .policy-callout-icon {
    color: #e53935;
}

.policy-callout p {
    margin: 0;
    font-size: 1.01em;
    color: #1c4d33;
    font-weight: 500;
}

/* Feature Grid / Cards */
.peer-card-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 18px;
    margin: 22px 0;
}

.peer-card {
    background: #fafdfb;
    border: 1px solid #e1ebe5;
    border-radius: 10px;
    padding: 20px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.peer-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(7, 63, 34, 0.06);
    border-color: #bee0cb;
}

.peer-card h4 {
    margin: 0 0 10px;
    font-size: 1.05em;
    color: #073f22;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px;
}

.peer-card p {
    font-size: 0.96em;
    line-height: 1.6;
    margin: 0;
    color: #43574b;
    text-align: left;
}

/* Bullet list style */
.peer-list {
    list-style: none;
    padding: 0;
    margin: 16px 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.peer-list li {
    position: relative;
    padding-left: 26px;
    font-size: 1.02em;
    line-height: 1.65;
    color: #3b4e43;
}

.peer-list li::before {
    content: '';
    position: absolute;
    left: 8px;
    top: 10px;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #10b865;
}

/* Timeline / Deadline Box */
.deadline-box {
    display: flex;
    gap: 16px;
    background: #f7faf8;
    border: 1px solid #e1ebe5;
    border-radius: 10px;
    padding: 16px 20px;
    margin: 14px 0;
    align-items: center;
}

.deadline-tag {
    background: #073f22;
    color: #ffffff;
    font-weight: 700;
    font-size: 0.88em;
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

/* Decision Cards Grid */
.decision-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 16px;
    margin: 22px 0;
}

.decision-card {
    border-radius: 12px;
    padding: 20px;
    border: 1px solid transparent;
}

.decision-card.accept {
    background: #eefbf4;
    border-color: #bcebce;
}

.decision-card.minor {
    background: #f0f7ff;
    border-color: #c0dcff;
}

.decision-card.major {
    background: #fffbf0;
    border-color: #ffe4b3;
}

.decision-card.reject {
    background: #fdf2f2;
    border-color: #f8c8c8;
}

.decision-badge {
    display: inline-block;
    font-size: 0.9em;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    padding: 4px 12px;
    border-radius: 14px;
    margin-bottom: 10px;
}

.accept .decision-badge { background: #10b865; color: #fff; }
.minor .decision-badge { background: #1e88e5; color: #fff; }
.major .decision-badge { background: #e6a100; color: #fff; }
.reject .decision-badge { background: #e53935; color: #fff; }

.decision-card h5 {
    margin: 0 0 8px;
    font-size: 1.05em;
    font-weight: 700;
    color: #1c3629;
}

.decision-card p {
    font-size: 0.94em;
    line-height: 1.55;
    margin: 0;
    text-align: left;
    color: #4a5e52;
}

/* References Section */
.ref-list {
    font-size: 0.92em;
    line-height: 1.65;
    color: #4c5d53;
    padding-left: 20px;
    margin: 16px 0 0;
}

.ref-list li {
    margin-bottom: 12px;
    word-break: break-word;
}

.ref-list a {
    color: #073f22;
    text-decoration: underline;
}

.ref-list a:hover {
    color: #10b865;
}

/* Responsive */
@media (max-width: 992px) {
    .peer-document-wrapper {
        flex-direction: column;
        gap: 30px;
    }
    
    .peer-toc {
        position: static;
        flex: auto;
        width: 100%;
        box-sizing: border-box;
    }

    .peer-section {
        padding: 26px 24px;
    }
    
    .peer-hero h1 {
        font-size: 2.3em;
    }
}
</style>

<div id="main-content" class="page page_peer_review">

    {* Hero Header *}
    <div class="peer-hero">
        <div class="peer-hero-content">
            <div class="peer-hero-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                Peer Review Framework
            </div>
            <h1>Peer Review Policy</h1>
            <p class="journal-meta">Central Bicol State University of Agriculture<br>Multidisciplinary Research and Extension Journal (MREJ-CBSUA)</p>
            <div class="peer-hero-contact">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Editorial Office: <a href="mailto:mrej.cbsua@cbsua.edu.ph">mrej.cbsua@cbsua.edu.ph</a>
            </div>
        </div>
    </div>

    <div class="peer-document-wrapper">

        {* Navigation Sidebar / TOC *}
        <nav class="peer-toc" aria-label="Peer Review Table of Contents">
            <div class="peer-toc-header">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
                <h4>Contents</h4>
                <span class="toc-count">15 sections</span>
            </div>
            <ul>
                <li><a href="#section-1">Introduction &amp; Purpose</a></li>
                <li><a href="#section-2">Peer Review Model</a></li>
                <li><a href="#section-3">Editorial Procedure</a></li>
                <li><a href="#section-4">Reviewer Eligibility</a></li>
                <li><a href="#section-5">Responsibilities &amp; Guidelines</a></li>
                <li><a href="#section-6">Review Report Structure</a></li>
                <li><a href="#section-7">Review Conduct &amp; Ethics</a></li>
                <li><a href="#section-8">Editorial Decision-Making</a></li>
                <li><a href="#section-9">Post-Acceptance Procedures</a></li>
                <li><a href="#section-10">Appeals &amp; Arbitration</a></li>
                <li><a href="#section-11">Recognition &amp; Benefits</a></li>
                <li><a href="#section-12">Special Considerations</a></li>
                <li><a href="#section-13">Journal Standards</a></li>
                <li><a href="#section-14">Continuous Improvement</a></li>
                <li><a href="#section-15">Contact &amp; References</a></li>
            </ul>
        </nav>

        {* Main Document Content *}
        <div class="peer-content">
            
            {* Section 1: Introduction and Purpose *}
            <section id="section-1" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
                    1. Introduction and Purpose
                </h2>
                <p>
                    Peer review plays a crucial role in scholarly publishing by guaranteeing the quality, validity, and integrity of research in the Multidisciplinary Research and Extension Journal of Central Bicol State University of Agriculture (MREJ-CBSUA). This policy provides clear guidelines for conducting peer reviews, outlines the roles and responsibilities of all involved, and promotes the highest standards of academic honesty and ethical behavior.
                </p>

                <p><strong>The purpose of the peer review process is to:</strong></p>
                <ul class="peer-list">
                    <li>Ensure that submitted research maintains scientific rigor and methodology.</li>
                    <li>Evaluate the uniqueness and significance of the research contributions.</li>
                    <li>Offer valuable feedback to authors to enhance their manuscripts.</li>
                    <li>Uphold the journal's credibility and reputation.</li>
                    <li>Maintain high ethical standards in research publication.</li>
                </ul>
            </section>

            {* Section 2: Peer Review Model *}
            <section id="section-2" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    2. Peer Review Model
                </h2>
                <p>
                    MREJ-CBSUA uses a <strong>double-blind peer review model</strong> to promote objectivity and reduce potential bias during evaluation.
                </p>

                <h3>2.1 Double-Blind Review Characteristics</h3>
                <ul class="peer-list">
                    <li>Reviewers are kept unaware of the authors' identities.</li>
                    <li>Author identities are kept anonymous from reviewers.</li>
                    <li>Manuscripts have all identifying information removed during the review process.</li>
                    <li>Reviewers should not disclose their identity in any comments or uploaded files.</li>
                </ul>

                <h3>2.2 Scope of Review</h3>
                <p>
                    All original research articles, review articles, and technical papers are subjected to a comprehensive peer review.
                </p>
            </section>

            {* Section 3: Editorial Procedure *}
            <section id="section-3" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                    3. Editorial Procedure
                </h2>

                <h3>3.1 Manuscript Submission and Initial Screening</h3>
                <p>Upon manuscript submission, the following process is followed:</p>

                <div class="peer-card-grid">
                    <div class="peer-card">
                        <h4>1. Technical Pre-check</h4>
                        <p>The Managing Editor performs an initial technical check to verify formatting standards compliance and essential component presence.</p>
                    </div>

                    <div class="peer-card">
                        <h4>2. Editorial Pre-check</h4>
                        <p>The Editor-in-Chief or Section Editor verifies scope, minimum quality standards, ethical guidelines, originality, and plagiarism.</p>
                    </div>

                    <div class="peer-card">
                        <h4>3. Decision Point</h4>
                        <p>The Editor-in-Chief decides to proceed to peer review, issue a desk rejection, or request pre-review revisions.</p>
                    </div>
                </div>

                <h3>3.2 Reviewer Selection and Invitation</h3>
                <p>
                    The assigned editor selects and invites at least two qualified peer reviewers based on subject matter expertise, publication record, current workload availability, and absence of conflicts of interest.
                </p>

                <div class="deadline-box">
                    <span class="deadline-tag">7 Days</span>
                    <p class="deadline-text">Reviewers have <strong>seven (7) days</strong> to respond to the review invitation.</p>
                </div>

                <div class="deadline-box">
                    <span class="deadline-tag">14 Days</span>
                    <p class="deadline-text">Reviewers have <strong>fourteen (14) days</strong> to complete their review after accepting.</p>
                </div>
            </section>

            {* Section 4: Reviewer Eligibility and Qualifications *}
            <section id="section-4" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    4. Reviewer Eligibility and Qualifications
                </h2>

                <h3>4.1 Minimum Requirements</h3>
                <ul class="peer-list">
                    <li>Possess a doctoral degree (such as a Ph.D. or an equivalent qualification) in a relevant field.</li>
                    <li>Maintain an active publication record in peer-reviewed journals.</li>
                    <li>Maintain current active research involvement in the manuscript's subject area.</li>
                    <li>Hold an official academic or research affiliation.</li>
                    <li>Declare that there are no conflicts of interest with the authors or research.</li>
                </ul>

                <h3>4.2 Disqualifying Conflicts of Interest</h3>
                <p>Reviewers should decline invitations if they:</p>
                <ul class="peer-list">
                    <li>Are affiliated with the same institution as any author.</li>
                    <li>Have collaborated with any author within the past three (3) years.</li>
                    <li>Have a close personal relationship, rivalry, or antipathy with any author.</li>
                    <li>Stand to gain or lose financially from the manuscript's publication.</li>
                    <li>Have any other conflicts (political, personal, religious, ideological, academic, or commercial) that compromise objectivity.</li>
                </ul>

                <h3>4.3 Previous Review Consideration</h3>
                <p>
                    If a reviewer has previously evaluated the same manuscript for a different journal, this does not create a conflict of interest. Reviewers should notify the editorial office and may provide comments on improvements made. However, if such a situation occurs, our journal must inform the other journal and will likely stop publication with us to prevent conflicts and potential plagiarism, protecting the integrity of both journals.
                </p>
            </section>

            {* Section 5: Reviewer Responsibilities and Guidelines *}
            <section id="section-5" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    5. Reviewer Responsibilities and Guidelines
                </h2>

                <h3>5.1 Confidentiality</h3>
                <ul class="peer-list">
                    <li>Handle all manuscript materials with strict confidentiality.</li>
                    <li>Refrain from discussing the manuscript with colleagues or contacting authors directly.</li>
                    <li>Avoid using any information from the manuscript in their own work before publication.</li>
                    <li>Destroy/delete manuscript copies once the review is finished.</li>
                    <li>Ensure uploaded review files are free of personal identifiers.</li>
                </ul>

                <h3>5.2 Timely Response</h3>
                <ul class="peer-list">
                    <li>Reply to invitations promptly within 7 days.</li>
                    <li>Request deadline extensions as early as possible if required.</li>
                    <li>Recommend alternative reviewers when declining an invitation.</li>
                    <li>Complete reviews within the agreed timeframe (usually 14 days).</li>
                </ul>

                <h3>5.3 Review Standards and Content</h3>
                <p><strong>First Read-Through:</strong> Evaluate research question significance/uniqueness, argument clarity, evidence-supported conclusions, methodological flaws, and make initial decision.</p>

                <p><strong>Detailed Review Points:</strong></p>
                <div class="peer-card-grid">
                    <div class="peer-card">
                        <h4>a. Originality &amp; Significance</h4>
                        <p>Assesses research question originality, contribution to knowledge, and comparison with published research.</p>
                    </div>

                    <div class="peer-card">
                        <h4>b. Methodology</h4>
                        <p>Evaluates scientific principles, detail for replication, sample size, controls, statistical rigor, and ethical standards.</p>
                    </div>

                    <div class="peer-card">
                        <h4>c. Results &amp; Data</h4>
                        <p>Verifies clarity of presentation, figure/table labeling, data sufficiency, and self-consistency free of contradictions.</p>
                    </div>

                    <div class="peer-card">
                        <h4>d. Discussion &amp; Conclusions</h4>
                        <p>Ensures conclusions follow logically, literature is adequately referenced, limitations acknowledged, and research aims answered.</p>
                    </div>

                    <div class="peer-card">
                        <h4>e. References</h4>
                        <p>Verifies reference accuracy, recency (preferably last 5 years), balance, and absence of excessive self-citation.</p>
                    </div>

                    <div class="peer-card">
                        <h4>f. Overall Quality</h4>
                        <p>Checks structure, language clarity, title representation, and abstract accessibility.</p>
                    </div>
                </div>

                <h3>5.4 Identifying Research Misconduct</h3>
                <p>Reviewers must notify the editorial office immediately upon suspicion of: plagiarism/self-plagiarism, data fabrication/falsification, undisclosed image manipulation, duplicate publication, unethical research practices, human/animal ethics violations, undisclosed conflicts, or authorship concerns.</p>

                <h3>5.5 Use of Artificial Intelligence Tools</h3>
                <div class="policy-callout policy-callout-warning">
                    <div class="policy-callout-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    </div>
                    <p>
                        Reviewers should refrain from using generative AI tools or LLMs (e.g. ChatGPT, Claude, Gemini) when preparing review reports to avoid confidentiality breaches. <strong>Limited acceptable use:</strong> AI tools are permitted only to enhance grammar, spelling, and formatting of the report and must be disclosed. Under no circumstances should reviewers upload manuscripts or content into AI tools.
                    </p>
                </div>
            </section>

            {* Section 6: Review Report Structure *}
            <section id="section-6" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                    6. Review Report Structure
                </h2>

                <h3>6.1 Required Components</h3>
                <ul class="peer-list">
                    <li><strong>Major Issues:</strong> Methodological flaws, conceptual mistakes, credibility concerns, ethical breaches, unacknowledged prior publications.</li>
                    <li><strong>Minor Issues:</strong> Unclear sections, factual/numerical inaccuracies, supplementary reference suggestions, figure/table formatting.</li>
                    <li><strong>Specific Comments:</strong> Line-numbered specific points, prioritizing scientific content over small formatting errors.</li>
                </ul>

                <h3>6.2 Overall Recommendation</h3>
                <div class="decision-grid">
                    <div class="decision-card accept">
                        <span class="decision-badge">Accept</span>
                        <h5>Accept as Is</h5>
                        <p>Suitable for publication in current form.</p>
                    </div>

                    <div class="decision-card minor">
                        <span class="decision-badge">Minor Revision</span>
                        <h5>Minor Changes</h5>
                        <p>Requires minor modifications (5-day revision period).</p>
                    </div>

                    <div class="decision-card major">
                        <span class="decision-badge">Major Revision</span>
                        <h5>Substantial Revision</h5>
                        <p>Substantial revisions needed; further review required (10-day revision period).</p>
                    </div>

                    <div class="decision-card reject">
                        <span class="decision-badge">Reject</span>
                        <h5>Rejection</h5>
                        <p>Serious flaws or no original contribution.</p>
                    </div>
                </div>

                <h3>6.3 Confidential Comments to Editors</h3>
                <p>Reviewers can provide confidential feedback on suspected plagiarism, misconduct, ethical concerns, or recommendation rationale. These comments must be written professionally as they may be shared under appropriate circumstances.</p>
            </section>

            {* Section 7: Review Conduct and Ethics *}
            <section id="section-7" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    7. Review Conduct and Ethics
                </h2>

                <h3>7.1 Tone and Constructiveness</h3>
                <ul class="peer-list">
                    <li>Maintain a neutral, professional, respectful tone concentrating on the research itself.</li>
                    <li>Refrain from derogatory, hostile, or insulting language.</li>
                    <li>Remain objective and evidence-based in all evaluations.</li>
                </ul>

                <h3>7.2 Prohibited Practices</h3>
                <ul class="peer-list">
                    <li>Avoid excessive self-citation demands or artificial citation boosting.</li>
                    <li>Do not delay publication to gain competitive advantage or use manuscript information for personal benefit.</li>
                    <li>Do not contact authors directly or allow decisions to be affected by author nationality, gender, or affiliation.</li>
                </ul>

                <h3>7.3 Delegation of Review</h3>
                <p>Involving a colleague requires prior approval from the editorial office, ensuring the colleague meets eligibility criteria, staying accountable for review quality, and recognizing input.</p>
            </section>

            {* Section 8: Editorial Decision-Making *}
            <section id="section-8" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    8. Editorial Decision-Making
                </h2>

                <h3>8.1 Review Compilation and Assessment</h3>
                <p>The handling editor evaluates completeness, quality, summarizes suggestions, verifies addressed concerns, and recommends a decision to the Editor-in-Chief.</p>

                <h3>8.2 Final Decision Authority</h3>
                <p>The Editor-in-Chief makes final accept/reject decisions based on reviewer reports, editor assessments, scope standards, and ethical considerations.</p>

                <h3>8.3 Decision Categories and Timelines</h3>
                <ul class="peer-list">
                    <li><strong>Accept:</strong> Manuscript ready for production.</li>
                    <li><strong>Minor Revision:</strong> Authors given <strong>5 days</strong> to respond; reviewed solely by handling editor.</li>
                    <li><strong>Major Revision:</strong> Authors given <strong>10 days</strong> to respond; maximum of two rounds permitted.</li>
                    <li><strong>Reject:</strong> Fundamental flaws or ethical non-compliance. No APC charges for rejected papers.</li>
                </ul>

                <h3>8.4 Author Response to Revisions</h3>
                <p>Authors must provide a point-by-point response letter, mark modifications clearly, and explain any unadopted suggestions.</p>
            </section>

            {* Section 9: Post-Acceptance Procedures *}
            <section id="section-9" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 11 12 14 22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
                    9. Post-Acceptance Procedures
                </h2>
                <h3>9.1 Quality Checks</h3>
                <p>Includes final technical validation, peer review process verification, ethical compliance confirmation, and missing document collection.</p>

                <h3>9.2 Provisional Acceptance Override</h3>
                <p>If significant problems arise during quality inspections, the editorial office may return the paper to review, request revisions, or override acceptance to reject the manuscript.</p>
            </section>

            {* Section 10: Appeals and Arbitration *}
            <section id="section-10" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                    10. Appeals and Arbitration
                </h2>
                <h3>10.1 Author-Initiated Appeals</h3>
                <p>Appeals must be submitted within <strong>30 days</strong> of rejection with factual responses and supporting documents maintaining a constructive tone.</p>

                <h3>10.2 Appeal Review Process</h3>
                <p>The editorial office evaluates appeals, consults handling editors, seeks independent expert evaluation if needed, and makes a determination within <strong>60–90 days</strong> with updates every 2–4 weeks.</p>

                <h3>10.3 Appeal Outcomes</h3>
                <p><strong>Upheld:</strong> Manuscript reinstated, new editor/reviewers assigned, or review re-initiated.<br><strong>Denied:</strong> Rejection remains final; resubmission in current form is not permitted.</p>
            </section>

            {* Section 11: Reviewer Recognition and Benefits *}
            <section id="section-11" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
                    11. Reviewer Recognition and Benefits
                </h2>
                <ul class="peer-list">
                    <li><strong>Acknowledgment:</strong> Annual reviewer list (when &gt;50 reviewers contribute), personalized certificates, Editorial Board appointment consideration, institutional recognition.</li>
                    <li><strong>Professional Development:</strong> Enhanced research understanding, evaluation skill growth, scholarly community networking.</li>
                    <li><strong>ORCID Integration:</strong> Reviewers are encouraged to link ORCID profiles and record reviewing activities.</li>
                </ul>
            </section>

            {* Section 12: Special Considerations *}
            <section id="section-12" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/></svg>
                    12. Special Considerations
                </h2>
                <p><strong>12.1 Consensus Conflicts:</strong> Reviewers must evaluate if evidence questioning established consensus is compelling and properly cited.</p>
                <p><strong>12.2 Interdisciplinary Research:</strong> Additional reviewers invited; boundary of expertise explicitly specified.</p>
                <p><strong>12.3 Human/Animal Subjects:</strong> Confirm ethics approval, international standards, informed consent, privacy, and animal welfare compliance.</p>
            </section>

            {* Section 13: Journal-Specific Standards *}
            <section id="section-13" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/></svg>
                    13. Journal-Specific Standards &amp; Reporting Guidelines
                </h2>
                <p>MREJ-CBSUA follows recognized international reporting guidelines:</p>
                <ul class="peer-list">
                    <li><strong>CONSORT Statement</strong> (for randomized trials): <a href="https://www.equator-network.org/reporting-guidelines/consort/" target="_blank" rel="noopener">EQUATOR Consort Guidelines</a></li>
                    <li><strong>PRISMA</strong> (for systematic reviews &amp; meta-analyses): <a href="https://www.prisma-statement.org/" target="_blank" rel="noopener">PRISMA Statement</a></li>
                    <li><strong>ARRIVE Guidelines</strong> (for animal research): <a href="https://arriveguidelines.org/arrive-guidelines" target="_blank" rel="noopener">ARRIVE Guidelines</a></li>
                    <li><strong>COPE Guidelines</strong> (Committee on Publication Ethics): <a href="https://publicationethics.org/guidance" target="_blank" rel="noopener">COPE Resources</a></li>
                </ul>
            </section>

            {* Section 14: Continuous Improvement *}
            <section id="section-14" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg>
                    14. Continuous Improvement
                </h2>
                <p><strong>14.1 Reviewer Performance Monitoring:</strong> Editorial office oversees review quality, timeliness, tone, and ethics. Low-quality or late reviewers are removed from the database.</p>
                <p><strong>14.2 Policy Re-evaluation:</strong> Policy is reevaluated annually to adopt publishing best practices and respond to community feedback.</p>
            </section>

            {* Section 15: Contact and Support & References *}
            <section id="section-15" class="peer-section">
                <h2>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    15. Contact, Support &amp; References
                </h2>
                <p><strong>Editorial Support:</strong> <a href="mailto:mrej.cbsua@cbsua.edu.ph">mrej.cbsua@cbsua.edu.ph</a></p>
                <p><strong>Ethics &amp; Misconduct Reporting:</strong> Confidential reports can be submitted to <a href="mailto:mrej.cbsua@cbsua.edu.ph">mrej.cbsua@cbsua.edu.ph</a>.</p>

                <h3 style="margin-top: 30px;">References</h3>
                <ol class="ref-list">
                    <li>Wiley Author Services, "Step by step guide to reviewing a manuscript," Wiley. <a href="https://authorservices.wiley.com/Reviewers/journal-reviewers/how-to-perform-a-peer-review/step-by-step-guide-to-reviewing-a-manuscript.html" target="_blank" rel="noopener">Link</a></li>
                    <li>MDPI, "Guidelines for Reviewers," MDPI. <a href="https://www.mdpi.com/reviewers" target="_blank" rel="noopener">Link</a></li>
                    <li>GSCARR, "Peer Review Policy and Guidelines," GSCARR Online Press. <a href="https://gsconlinepress.com/journals/gscarr/content/peer-review-policy-and-guidelines" target="_blank" rel="noopener">Link</a></li>
                    <li>Wiley Author Services, "Peer review," Ethics Guidelines. <a href="https://authorservices.wiley.com/ethics-guidelines/index.html#15" target="_blank" rel="noopener">Link</a></li>
                    <li>Frontiers, "Principles of peer review," Frontiers Guidelines. <a href="https://www.frontiersin.org/guidelines/peer-review-guidelines" target="_blank" rel="noopener">Link</a></li>
                    <li>Wiley, "Research Exchange Review: Reviewer Guide," Version 19.0, Dec. 2025.</li>
                    <li>Committee on Publication Ethics (COPE), "Ethical Guidelines for Peer Reviewers," COPE. <a href="https://publicationethics.org/resources/guidelines-new/cope-ethical-guidelines-peer-reviewers" target="_blank" rel="noopener">Link</a></li>
                    <li>I. Hames, <em>Peer Review and Manuscript Management in Scientific Journals: Guidelines for Good Practice</em>. Oxford, UK: Wiley-Blackwell, 2007.</li>
                    <li>NISO, "Peer Review Terminology Standard," NISO Z39.106-2023, 2023.</li>
                    <li>Publishing Research Consortium, "Peer Review: An Introduction and Guide." <a href="http://publishingresearchconsortium.com/index.php/prc-guides-main-menu/155-peer-review-an-introduction-and-guide" target="_blank" rel="noopener">Link</a></li>
                </ol>
            </section>

        </div>
    </div>

</div><!-- .page -->

<script>
(function() {
    var tocLinks = document.querySelectorAll('.peer-toc a');
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
</script>

{include file="frontend/components/footer.tpl"}
