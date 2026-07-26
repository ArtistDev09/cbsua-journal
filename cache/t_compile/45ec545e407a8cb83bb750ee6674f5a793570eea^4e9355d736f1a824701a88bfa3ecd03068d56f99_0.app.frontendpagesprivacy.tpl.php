<?php
/* Smarty version 4.3.1, created on 2026-07-20 15:42:23
  from 'app:frontendpagesprivacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5e25bf485ed9_32386058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e9355d736f1a824701a88bfa3ecd03068d56f99' => 
    array (
      0 => 'app:frontendpagesprivacy.tpl',
      1 => 1783932954,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_6a5e25bf485ed9_32386058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"about.privacyStatement"), 0, false);
?>

<style>
/* ── Premium Document-Style Layout ── */
/* Hide the sidebars explicitly on this page */
#sidebar, #leftSidebar {
    display: none !important;
}
/* Ensure main content takes full width when sidebars are hidden */
.pkp_structure_main {
    width: 100% !important;
    flex: 0 0 100% !important;
    max-width: 100% !important;
}

.page_privacy {
    background: #fbfdfc;
    font-family: 'Inter', sans-serif;
    color: #334139;
    padding-bottom: 80px;
}

.privacy-hero {
    background: linear-gradient(135deg, #052e18 0%, #073f22 100%);
    padding: 80px 20px;
    text-align: center;
    color: #ffffff;
    margin-bottom: 60px;
    position: relative;
    overflow: hidden;
}

.privacy-hero::after {
    content: '';
    position: absolute;
    bottom: -50px;
    left: 50%;
    transform: translateX(-50%);
    width: 200%;
    height: 100px;
    background: #fbfdfc;
    border-radius: 50%;
}

.privacy-hero-content {
    position: relative;
    z-index: 10;
    max-width: 800px;
    margin: 0 auto;
}

.privacy-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: 3.2em;
    font-weight: 700;
    margin: 0 0 16px;
    letter-spacing: -0.02em;
}

.privacy-document-wrapper {
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 24px;
}

.privacy-section h2 {
    font-family: 'Playfair Display', serif;
    font-size: 1.8em;
    color: #073f22;
    margin: 40px 0 16px;
    font-weight: 700;
    padding-bottom: 8px;
    border-bottom: 1px solid #e2ebe6;
}

.privacy-section p {
    font-size: 1.1em;
    line-height: 1.75;
    color: #44544a;
    margin-bottom: 20px;
    text-align: justify;
}

.privacy-section ul,
.privacy-section ol {
    margin: 0 0 24px 24px;
    padding: 0;
    font-size: 1.1em;
    line-height: 1.75;
    color: #44544a;
}

.privacy-section li {
    margin-bottom: 8px;
}
</style>

<div id="main-content" class="page page_privacy">

        <div class="privacy-hero">
        <div class="privacy-hero-content">
            <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.privacyStatement"),$_smarty_tpl ) );?>
</h1>
        </div>
    </div>

    <div class="privacy-document-wrapper">
        <div class="privacy-section">

            <h2>Aims</h2>
            <p>The AGRIKULTURA CBSUA Research and Innovation Journal aims to serve as a knowledge hub by publishing ridge-to-reef and transdisciplinary research and development projects in agriculture and fisheries. This will focus on technology development and policies for smart agriculture and fisheries, fundamental changes in employing computerization as well as other technological breakthroughs, biotechnology, agriculture and food security, natural resources conservation and environmental protection.</p>
            
            <h2>Scope</h2>
            <p>Journal welcomes submission of quality researches in any of the following academic domains: Agriculture and Fisheries; Socio-economics, Policy and Ethics; Agricultural Technology and Biosystems; Food Technology and Nutrition; Environmental Sciences; Genetics and Biotechnology; and Innovative Extension Modalities. The journal has two (2) issues, one in December and the other in June, printed and on-line.</p>
            
            <h2>Recruiting Referees</h2>
            <p>Letters to the prospective referees will be done by the Editor-in-chief with the support of the Editorial Adviser. Once the invitation is accepted, these referees will be sent a confirmation and with the inclusion of the article which they will review. The peer reviewer must be in the same field as the author. They will be acknowledged by the university with their names printed in the journal issue as Associate Editor.</p>
            
            <h2>Peer Review Process</h2>
            <p>There are two or three referees for a given article. Two are experts of the topic of research and one is an expert in research and statistics who shall review the technical components of the research. These referees return to the board the evaluation of the work that indicates the observed weaknesses or problems along with suggestions for improvement. The board, then, evaluates the referees’ comments and notes opinion of the manuscript before passing the decision with the referees’ comments back to the author(s).</p>
            
            <h2>Criteria for Acceptance and Rejection</h2>
            <p>A manuscript is accepted when it is:</p>
            <ol>
                <li>endorsed for publication by 2 or 3 referees;</li>
                <li>the instructions of the reviewers are substantially complied;</li>
                <li>ethical standards and protocols are complied for studies involving humans and animals;</li>
                <li>the manuscript passed the plagiarism detection test with a score of at most 10% or less Similarity Index and a Grammarly Rating of 95% or more. Otherwise, the manuscript is returned back to the author(s).</li>
            </ol>
            
            <p>The referees’ evaluations include an explicit recommendation of what to do with the manuscript, chosen from options provided by the journal. Most recommendations are along the following lines:</p>
            <ul>
                <li>Accept without revisions</li>
                <li>Accept with minor revisions</li>
                <li>Accept with major revisions</li>
                <li>Reject with option to resubmit</li>
                <li>Reject</li>
            </ul>
            
            <p>In situations where the referees disagree substantially about the quality of a work, there are a number of strategies for reaching a decision. When the editor receives very positive and very negative reviews for the same manuscript, the board will solicit one or more additional reviews as a tie-breaker. In the case of ties, the board may invite authors to reply to a referee’s criticisms and permit a compelling rebuttal to break the tie. If the editor does not feel confident to weigh the persuasiveness of a rebuttal, the board may solicit a response from the referee who made the original criticism. In rare instances, the board will convey communications between an author and a referee, thereby, allowing them to debate on a point. Even in such a case, however, the board does not allow referees to confer with each other and the goal of the process is explicitly not to reach a consensus or to convince anyone to change his/ her opinions.</p>
            
            <h2>Comments</h2>
            <p>The Journal welcomes submission of comments on previous articles. Comments on articles previously published in the journal will generally be reviewed by two reviewers, usually an author of the original article (to assist the editor in evaluating whether the submitted comment represents the prior article’s accuracy) and an independent reviewer. If a comment is accepted for publication, the original author will be invited to reply. All other editorial requirements, as enumerated above, apply to proposed comments.</p>
            
            <h2>Policy on Retraction</h2>
            <p>Retraction is an act of the journal publisher to remove a published article from the digital file due to post publication discovery of fraudulent claims by the research, plagiarism or serious errors of methodology which escaped detection in the quality assurance process. Complaints by third party researchers on any of the grounds and validated by the editorial office trigger the retraction but only after the writer has been notified and allowed to present his side in compliance to due process.</p>
            
            <h2>Policy on Digital Preservation</h2>
            <p>Digital Preservation is the process of storing systematically electronic files in multiple formats such as compact discs; cloud computing, Google drive, email accounts, external hard drives, among others. This is to guarantee that in conditions where the website crashes, there is natural calamity, fire and other man made destructions, virus invasions, the files are preserved.</p>
            
            <h2>Policy on Handling Complaints</h2>
            <p>The issues brought forward by authors, as well as reviewers, and other individuals or entities directly related to publishing in AGRIKULTURA CBSUA Research and Innovation Journal are dealt with seriously, and individually responded to. In cases where the CBSUA Secretariat deem the case to be beyond the coverage of its existing guidelines, it may be elevated to the Editorial Board for consensus of response.</p>
            
            <h2>Policy on Use of Human Subjects in Research</h2>
            <p>The author should clearly identify in the manuscript if the work involves chemicals, procedures or equipment that have any unusual hazards inherent in their use.</p>
            
            <h2>Policy on Conflicts of Interest</h2>
            <p>All authors should clearly disclose in their manuscript any financial or other substantive conflict of interest that might be construed to influence the results or interpretation of their manuscript. All sources of financial support for the project should be disclosed. The Journal will only publish articles after the author(s) has/have disclosed and confirmed potential conflicts of interest.</p>

        </div>
    </div>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
