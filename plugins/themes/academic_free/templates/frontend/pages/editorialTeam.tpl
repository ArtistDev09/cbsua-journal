{**
 * templates/frontend/pages/editorialTeam.tpl
 * Modernized "Editorial Board" document-style design with dynamic admin management.
 *}
{include file="frontend/components/header.tpl" pageTitle="about.editorialTeam"}

<style>
/* Hide default sidebars for full-width presentation */
#sidebar, #leftSidebar {
    display: none !important;
}
.pkp_structure_main {
    width: 100% !important;
    flex: 0 0 100% !important;
    max-width: 100% !important;
}

/* ── Main Layout System ── */
.page_editorial_team {
    background: #fbfdfc;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    color: #2c3e35;
    padding-bottom: 80px;
}

/* ── Hero Section ── */
.team-hero {
    background: linear-gradient(135deg, #052e18 0%, #073f22 60%, #0d542e 100%);
    padding: 70px 20px 85px;
    text-align: center;
    color: #ffffff;
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(5, 46, 24, 0.15);
}

.team-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    z-index: 1;
    background:
        radial-gradient(circle, rgba(255,255,255,0.045) 1px, transparent 1px),
        repeating-linear-gradient(45deg, transparent, transparent 20px, rgba(255,255,255,0.018) 20px, rgba(255,255,255,0.018) 21px),
        repeating-linear-gradient(-45deg, transparent, transparent 30px, rgba(255,255,255,0.012) 30px, rgba(255,255,255,0.012) 31px),
        radial-gradient(ellipse at 20% 50%, rgba(16,184,101,0.08) 0%, transparent 60%),
        radial-gradient(ellipse at 80% 30%, rgba(212,168,83,0.06) 0%, transparent 50%);
    background-size: 24px 24px, auto, auto, auto, auto;
    pointer-events: none;
}

.team-hero::after {
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

.team-hero-content {
    position: relative;
    z-index: 10;
    max-width: 920px;
    margin: 0 auto;
}

.team-hero-badge-group {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 20px;
}

.team-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.25);
    color: #d4a853;
    font-size: 0.82rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 6px 16px;
    border-radius: 30px;
    backdrop-filter: blur(4px);
}

.effectivity-badge {
    background: linear-gradient(135deg, #d4a853 0%, #fce3a0 100%);
    color: #052e18;
    font-weight: 700;
    border: none;
    box-shadow: 0 2px 10px rgba(212, 168, 83, 0.3);
}

.team-hero h1 {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 3.2em;
    font-weight: 700;
    margin: 0 0 14px;
    letter-spacing: -0.02em;
    color: #ffffff;
    text-shadow: 0 2px 10px rgba(0,0,0,0.2);
}

.team-hero p.journal-meta {
    font-size: 1.15em;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    margin: 0 0 18px;
    font-weight: 400;
}

.team-hero-contact {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, 0.15);
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 0.95em;
    color: #ffffff;
}

.team-hero-contact a {
    color: #fce3a0;
    text-decoration: none;
    font-weight: 600;
}

/* ── Container ── */
.editorial-board-wrapper {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 24px;
}

/* ── Leadership Spotlight Cards ── */
.leadership-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 28px;
    margin-bottom: 50px;
}

@media (max-width: 768px) {
    .leadership-grid {
        grid-template-columns: 1fr;
    }
}

.leader-spotlight-card {
    background: linear-gradient(135deg, #ffffff 0%, #fafdfb 100%);
    border: 1px solid #d8e8de;
    border-radius: 16px;
    padding: 32px 28px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 6px 24px rgba(7, 63, 34, 0.05);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.leader-spotlight-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #073f22 0%, #10b865 50%, #d4a853 100%);
}

.leader-spotlight-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 32px rgba(7, 63, 34, 0.1);
}

.leader-avatar-badge {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: linear-gradient(135deg, #073f22 0%, #0d542e 100%);
    color: #d4a853;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
    box-shadow: 0 4px 14px rgba(7, 63, 34, 0.15);
    border: 3px solid #ffffff;
}

.leader-role-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #073f22;
    background: #eef7f2;
    padding: 5px 14px;
    border-radius: 20px;
    margin-bottom: 12px;
}

.leader-spotlight-name {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 1.55em;
    font-weight: 700;
    color: #073f22;
    margin: 0 0 6px;
}

.leader-spotlight-title {
    font-size: 0.95em;
    font-weight: 600;
    color: #10b865;
    margin: 0 0 10px;
}

.leader-spotlight-inst {
    font-size: 0.92em;
    color: #506456;
    line-height: 1.5;
    margin: 0;
}

/* ── Reviewers Dual Section ── */
.reviewers-section-wrapper {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 32px;
    margin-bottom: 50px;
}

@media (max-width: 992px) {
    .reviewers-section-wrapper {
        grid-template-columns: 1fr;
    }
}

.reviewers-card-panel {
    background: #ffffff;
    border: 1px solid #e1ebe5;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 4px 20px rgba(7, 63, 34, 0.04);
}

.panel-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 16px;
    margin-bottom: 22px;
    border-bottom: 2px solid #eef4f0;
}

.panel-title {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 1.4em;
    font-weight: 700;
    color: #073f22;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.panel-title svg {
    color: #10b865;
}

.panel-count {
    background: #eef7f2;
    color: #073f22;
    font-size: 0.76em;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 20px;
    letter-spacing: 0.04em;
}

.reviewer-grid-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.reviewer-profile-item {
    background: #fbfdfc;
    border: 1px solid #e8f0eb;
    border-radius: 10px;
    padding: 14px 18px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

.reviewer-profile-item:hover {
    background: #ffffff;
    border-color: #bee0cb;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.06);
    transform: translateX(3px);
}

.reviewer-bullet {
    width: 26px;
    height: 26px;
    border-radius: 8px;
    background: #eef7f2;
    color: #10b865;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 0.75em;
    font-weight: 700;
    margin-top: 1px;
}

.reviewer-info {
    flex: 1;
    min-width: 0;
}

.reviewer-name-text {
    font-weight: 600;
    font-size: 0.96em;
    color: #073f22;
    margin: 0 0 3px;
    line-height: 1.35;
}

.reviewer-inst-text {
    font-size: 0.85em;
    color: #5c7063;
    line-height: 1.45;
    margin: 0;
}

.country-pill {
    display: inline-block;
    font-size: 0.72em;
    font-weight: 600;
    color: #3b5c48;
    background: #edf4ef;
    padding: 2px 7px;
    border-radius: 4px;
    margin-top: 4px;
}

/* ── Support Staff Section ── */
.support-staff-section {
    background: #ffffff;
    border: 1px solid #e1ebe5;
    border-radius: 16px;
    padding: 32px 30px;
    box-shadow: 0 4px 20px rgba(7, 63, 34, 0.04);
}

.staff-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 16px;
    margin-top: 20px;
}

.staff-profile-card {
    background: #fbfdfc;
    border: 1px solid #e8f0eb;
    border-radius: 12px;
    padding: 18px 20px;
    text-align: center;
    transition: all 0.2s ease;
}

.staff-profile-card:hover {
    background: #ffffff;
    border-color: #bee0cb;
    box-shadow: 0 4px 16px rgba(7, 63, 34, 0.06);
    transform: translateY(-2px);
}

.staff-avatar-mini {
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: #eef7f2;
    color: #073f22;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    font-weight: 700;
    font-size: 0.9em;
}

.staff-person-name {
    font-weight: 600;
    font-size: 0.95em;
    color: #073f22;
    margin: 0 0 4px;
}

.staff-person-role {
    font-size: 0.82em;
    color: #607567;
    font-weight: 500;
}

/* ── Admin Management Controls & Modals ── */
.admin-bar-header {
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    color: #ffffff;
    padding: 14px 24px;
    border-radius: 12px;
    margin-bottom: 28px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
    border: 1px solid rgba(255,255,255,0.1);
}
.admin-badge {
    background: #d4a853;
    color: #0f172a;
    font-size: 0.75rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    padding: 4px 12px;
    border-radius: 20px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.btn-admin {
    background: #10b865;
    color: #ffffff;
    border: none;
    padding: 7px 16px;
    border-radius: 8px;
    font-size: 0.85rem;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.2s ease;
}
.btn-admin:hover {
    background: #0d9652;
    transform: translateY(-1px);
}
.btn-admin-secondary {
    background: #475569;
}
.btn-admin-secondary:hover {
    background: #334155;
}
.admin-card-actions {
    position: absolute;
    top: 10px;
    right: 10px;
    display: flex;
    gap: 6px;
    z-index: 15;
}
.btn-action-icon {
    width: 30px;
    height: 30px;
    border-radius: 8px;
    border: 1px solid #cbd5e1;
    background: #ffffff;
    color: #334155;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
    box-shadow: 0 2px 5px rgba(0,0,0,0.06);
}
.btn-action-icon:hover {
    background: #073f22;
    color: #ffffff;
    border-color: #073f22;
}
.btn-action-icon.btn-delete:hover {
    background: #e11d48;
    color: #ffffff;
    border-color: #e11d48;
}

/* Modal Overlay & Card */
.edit-modal-backdrop {
    position: fixed;
    inset: 0;
    background: rgba(15, 23, 42, 0.65);
    backdrop-filter: blur(4px);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.25s ease;
}
.edit-modal-backdrop.active {
    opacity: 1;
    pointer-events: auto;
}
.edit-modal-card {
    background: #ffffff;
    border-radius: 16px;
    width: 100%;
    max-width: 520px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.25);
    overflow: hidden;
    transform: translateY(20px);
    transition: transform 0.25s ease;
}
.edit-modal-backdrop.active .edit-modal-card {
    transform: translateY(0);
}
.modal-card-header {
    background: #073f22;
    color: #ffffff;
    padding: 18px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.modal-card-header h3 {
    margin: 0;
    font-size: 1.15rem;
    font-weight: 700;
    color: #ffffff;
}
.modal-card-body {
    padding: 24px;
}
.form-group-admin {
    margin-bottom: 16px;
}
.form-group-admin label {
    display: block;
    font-size: 0.85rem;
    font-weight: 600;
    color: #334155;
    margin-bottom: 6px;
}
.form-control-admin {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    font-size: 0.92rem;
    color: #0f172a;
    transition: border-color 0.2s ease;
}
.form-control-admin:focus {
    outline: none;
    border-color: #10b865;
    box-shadow: 0 0 0 3px rgba(16, 184, 101, 0.15);
}
.modal-card-footer {
    padding: 16px 24px;
    background: #f8fafc;
    border-top: 1px solid #e2e8f0;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 10px;
}
</style>

<!-- Floating Admin Notification Toast -->
<div id="adminToastPrompt" style="position: fixed; top: 24px; right: 24px; z-index: 10000; display: none; min-width: 320px; max-width: 440px; padding: 14px 20px; border-radius: 12px; font-size: 0.92rem; font-weight: 600; box-shadow: 0 12px 30px rgba(0,0,0,0.25); transition: opacity 0.3s ease;">
    <div style="display: flex; align-items: center; gap: 10px;" id="adminToastContent"></div>
</div>

<div id="main-content" class="page page_editorial_team">

    {* Hero Header *}
    <div class="team-hero">
        <div class="team-hero-content">
            <div class="team-hero-badge-group">
                <div class="team-hero-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    Official Journal Directory
                </div>
                <div class="team-hero-badge effectivity-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    <span id="display-effectivity">{$editorialBoardData.header.effectivityDate|default:"Effectivity Date: 2025"}</span>
                </div>
            </div>
            <h1>Editorial Board</h1>
            <p class="journal-meta" id="display-meta">{$editorialBoardData.header.journalMeta|default:"Central Bicol State University of Agriculture<br>Multidisciplinary Research and Extension Journal (MREJ-CBSUA)"}</p>
            <div class="team-hero-contact">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Editorial Office: <a href="mailto:{$editorialBoardData.header.officeEmail|default:'mrej.cbsua@cbsua.edu.ph'}" id="display-email-link"><span id="display-email">{$editorialBoardData.header.officeEmail|default:"mrej.cbsua@cbsua.edu.ph"}</span></a>
            </div>
        </div>
    </div>

    <div class="editorial-board-wrapper">

        {if $isAdmin}
        <!-- Admin Floating Bar -->
        <div class="admin-bar-header">
            <div style="display: flex; align-items: center; gap: 12px;">
                <span class="admin-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
                    Admin Mode Active
                </span>
                <span style="font-size: 0.88rem; color: #94a3b8;">Full edit rights: Add, Update, & Delete members in real-time.</span>
            </div>
            <div>
                <button class="btn-admin" onclick="openHeaderModal()">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                    Edit Header Info
                </button>
            </div>
        </div>
        {/if}

        {* ── LEADERSHIP SPOTLIGHT GRID ── *}
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 20px;">
            <h2 style="font-size: 1.35rem; color: #073f22; margin:0; font-family: 'Playfair Display', Georgia, serif; font-weight:700;">Leadership Spotlight</h2>
            {if $isAdmin}
            <button class="btn-admin" onclick="openAddMemberModal('leadership')">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                Add Leadership Member
            </button>
            {/if}
        </div>

        <div class="leadership-grid">
            {foreach from=$editorialBoardData.leadership item=leader key=idx}
            <div class="leader-spotlight-card" data-id="{$leader.id}">
                {if $isAdmin}
                <div class="admin-card-actions">
                    <button class="btn-action-icon" title="Edit Member" onclick="openEditMemberModal('leadership', '{$leader.id|escape:javascript}')">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                    </button>
                    <button class="btn-action-icon btn-delete" title="Delete Member" onclick="confirmDeleteMember('leadership', '{$leader.id|escape:javascript}')">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><line x1="10" y1="11" x2="10" y2="17"/><line x1="14" y1="11" x2="14" y2="17"/></svg>
                    </button>
                </div>
                {/if}

                <div class="leader-avatar-badge" {if $idx % 2 == 1}style="background: linear-gradient(135deg, #0d542e 0%, #10b865 100%); color: #ffffff;"{/if}>
                    {if $idx % 2 == 1}
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    {else}
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    {/if}
                </div>
                <span class="leader-role-tag" {if $idx % 2 == 1}style="background: #fff8e7; color: #8a6200;"{/if}>
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    {$leader.role}
                </span>
                <h3 class="leader-spotlight-name">{$leader.name}</h3>
                <div class="leader-spotlight-title" {if $idx % 2 == 1}style="color: #073f22;"{/if}>{$leader.title}</div>
                <p class="leader-spotlight-inst">{$leader.institution|nl2br}</p>
            </div>
            {/foreach}
        </div>

        {* ── REVIEWERS DUAL PANEL ── *}
        <div class="reviewers-section-wrapper">
            
            {* External Reviewers *}
            <div class="reviewers-card-panel">
                <div class="panel-header">
                    <h3 class="panel-title">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        <span>External Reviewers</span>
                    </h3>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span class="panel-count">{if $editorialBoardData.externalReviewers}{$editorialBoardData.externalReviewers|@count}{else}0{/if} Members</span>
                        {if $isAdmin}
                        <button class="btn-admin" style="padding: 4px 10px; font-size: 0.78rem;" onclick="openAddMemberModal('externalReviewers')">
                            + Add
                        </button>
                        {/if}
                    </div>
                </div>

                <div class="reviewer-grid-list">
                    {foreach from=$editorialBoardData.externalReviewers item=rev key=idx}
                    <div class="reviewer-profile-item" data-id="{$rev.id}">
                        <div class="reviewer-bullet">{($idx+1)|string_format:"%02d"}</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">{$rev.name}</div>
                            <div class="reviewer-inst-text">{$rev.institution}</div>
                            <span class="country-pill">{$rev.country}</span>
                        </div>
                        {if $isAdmin}
                        <div style="display: flex; gap: 4px; align-self: center;">
                            <button class="btn-action-icon" style="width: 26px; height: 26px;" title="Edit" onclick="openEditMemberModal('externalReviewers', '{$rev.id|escape:javascript}')">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                            </button>
                            <button class="btn-action-icon btn-delete" style="width: 26px; height: 26px;" title="Delete" onclick="confirmDeleteMember('externalReviewers', '{$rev.id|escape:javascript}')">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                            </button>
                        </div>
                        {/if}
                    </div>
                    {/foreach}
                </div>
            </div>

            {* Internal Reviewers *}
            <div class="reviewers-card-panel">
                <div class="panel-header">
                    <h3 class="panel-title">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span>Internal Reviewers</span>
                    </h3>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span class="panel-count">{if $editorialBoardData.internalReviewers}{$editorialBoardData.internalReviewers|@count}{else}0{/if} Members</span>
                        {if $isAdmin}
                        <button class="btn-admin" style="padding: 4px 10px; font-size: 0.78rem;" onclick="openAddMemberModal('internalReviewers')">
                            + Add
                        </button>
                        {/if}
                    </div>
                </div>

                <div class="reviewer-grid-list">
                    {foreach from=$editorialBoardData.internalReviewers item=rev key=idx}
                    <div class="reviewer-profile-item" data-id="{$rev.id}">
                        <div class="reviewer-bullet">{($idx+1)|string_format:"%02d"}</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">{$rev.name}</div>
                            <div class="reviewer-inst-text">{$rev.institution}</div>
                            <span class="country-pill">{$rev.country}</span>
                        </div>
                        {if $isAdmin}
                        <div style="display: flex; gap: 4px; align-self: center;">
                            <button class="btn-action-icon" style="width: 26px; height: 26px;" title="Edit" onclick="openEditMemberModal('internalReviewers', '{$rev.id|escape:javascript}')">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                            </button>
                            <button class="btn-action-icon btn-delete" style="width: 26px; height: 26px;" title="Delete" onclick="confirmDeleteMember('internalReviewers', '{$rev.id|escape:javascript}')">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                            </button>
                        </div>
                        {/if}
                    </div>
                    {/foreach}
                </div>
            </div>

        </div>

        {* ── EDITORIAL SUPPORT STAFF ── *}
        <div class="support-staff-section">
            <div class="panel-header" style="border-bottom: 2px solid #eef4f0; margin-bottom: 16px;">
                <h3 class="panel-title">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    <span>Editorial Support Staff</span>
                </h3>
                <div style="display: flex; align-items: center; gap: 8px;">
                    <span class="panel-count">{if $editorialBoardData.supportStaff}{$editorialBoardData.supportStaff|@count}{else}0{/if} Members</span>
                    {if $isAdmin}
                    <button class="btn-admin" style="padding: 4px 10px; font-size: 0.78rem;" onclick="openAddMemberModal('supportStaff')">
                        + Add
                    </button>
                    {/if}
                </div>
            </div>

            <div class="staff-cards-grid">
                {foreach from=$editorialBoardData.supportStaff item=staff key=idx}
                <div class="staff-profile-card" data-id="{$staff.id}" style="position: relative;">
                    {if $isAdmin}
                    <div class="admin-card-actions" style="top: 8px; right: 8px;">
                        <button class="btn-action-icon" style="width: 24px; height: 24px;" title="Edit" onclick="openEditMemberModal('supportStaff', '{$staff.id|escape:javascript}')">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                        </button>
                        <button class="btn-action-icon btn-delete" style="width: 24px; height: 24px;" title="Delete" onclick="confirmDeleteMember('supportStaff', '{$staff.id|escape:javascript}')">
                            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/></svg>
                        </button>
                    </div>
                    {/if}

                    <div class="staff-avatar-mini">{$staff.initials}</div>
                    <div class="staff-person-name">{$staff.name}</div>
                    <div class="staff-person-role">{$staff.role}</div>
                </div>
                {/foreach}
            </div>
        </div>

    </div>

</div><!-- .page -->

{if $isAdmin}
<!-- Edit Header Modal -->
<div class="edit-modal-backdrop" id="headerModal">
    <div class="edit-modal-card">
        <div class="modal-card-header">
            <h3>Edit Journal Header Meta</h3>
            <button type="button" onclick="closeModal('headerModal')" style="background:none; border:none; color:#fff; font-size:1.4rem; cursor:pointer;">&times;</button>
        </div>
        <div class="modal-card-body">
            <div class="form-group-admin">
                <label>Effectivity Date Text</label>
                <input type="text" id="hdrEffectivityDate" class="form-control-admin" placeholder="Effectivity Date: 2025">
            </div>
            <div class="form-group-admin">
                <label>Journal Metadata Subtitle (HTML allowed)</label>
                <textarea id="hdrJournalMeta" class="form-control-admin" rows="3"></textarea>
            </div>
            <div class="form-group-admin">
                <label>Editorial Office Email</label>
                <input type="email" id="hdrOfficeEmail" class="form-control-admin" placeholder="mrej.cbsua@cbsua.edu.ph">
            </div>
        </div>
        <div class="modal-card-footer">
            <button type="button" class="btn-admin btn-admin-secondary" onclick="closeModal('headerModal')">Cancel</button>
            <button type="button" class="btn-admin" onclick="saveHeaderModal()">Save Header</button>
        </div>
    </div>
</div>

<!-- Add / Edit Member Modal -->
<div class="edit-modal-backdrop" id="memberModal">
    <div class="edit-modal-card">
        <div class="modal-card-header">
            <h3 id="memberModalTitle">Add Board Member</h3>
            <button type="button" onclick="closeModal('memberModal')" style="background:none; border:none; color:#fff; font-size:1.4rem; cursor:pointer;">&times;</button>
        </div>
        <div class="modal-card-body">
            <input type="hidden" id="modalCategory">
            <input type="hidden" id="modalMemberId">

            <div class="form-group-admin">
                <label>Full Name *</label>
                <input type="text" id="modalName" class="form-control-admin" placeholder="Dr. Jane Doe">
            </div>

            <!-- Leadership specific fields -->
            <div id="fieldsLeadership" style="display:none;">
                <div class="form-group-admin">
                    <label>Role Tag *</label>
                    <input type="text" id="modalLeaderRole" class="form-control-admin" placeholder="Editor-in-Chief">
                </div>
                <div class="form-group-admin">
                    <label>Title / Position</label>
                    <input type="text" id="modalLeaderTitle" class="form-control-admin" placeholder="Managing Editor • MREJ-CBSUA">
                </div>
                <div class="form-group-admin">
                    <label>Institution / Affiliation</label>
                    <textarea id="modalLeaderInstitution" class="form-control-admin" rows="2"></textarea>
                </div>
            </div>

            <!-- Reviewer specific fields -->
            <div id="fieldsReviewer" style="display:none;">
                <div class="form-group-admin">
                    <label>Institution / Affiliation *</label>
                    <input type="text" id="modalRevInstitution" class="form-control-admin" placeholder="University Name">
                </div>
                <div class="form-group-admin">
                    <label>Country *</label>
                    <input type="text" id="modalRevCountry" class="form-control-admin" placeholder="Philippines">
                </div>
            </div>

            <!-- Support Staff specific fields -->
            <div id="fieldsSupport" style="display:none;">
                <div class="form-group-admin">
                    <label>Role / Position *</label>
                    <input type="text" id="modalStaffRole" class="form-control-admin" placeholder="Support Staff / DVM">
                </div>
                <div class="form-group-admin">
                    <label>Initials (for Avatar Badge) *</label>
                    <input type="text" id="modalStaffInitials" class="form-control-admin" placeholder="JD" maxlength="3">
                </div>
            </div>
        </div>
        <div class="modal-card-footer">
            <button type="button" class="btn-admin btn-admin-secondary" onclick="closeModal('memberModal')">Cancel</button>
            <button type="button" class="btn-admin" onclick="saveMemberModal()">Save Member</button>
        </div>
    </div>
</div>

<script>
let boardData = {$editorialBoardData|json_encode};
let saveEndpointUrl = "{url page="about" op="saveEditorialTeam" escape=false}";

function showAdminToast(message, type = 'info', autoHide = 4000) {
    let toast = document.getElementById('adminToastPrompt');
    let content = document.getElementById('adminToastContent');
    if (!toast || !content) return;

    let bgColor = '#1e293b';
    let textColor = '#ffffff';
    let icon = 'ℹ️';

    if (type === 'success') {
        bgColor = '#052e18';
        textColor = '#10b865';
        icon = '✅';
    } else if (type === 'error') {
        bgColor = '#450a0a';
        textColor = '#f87171';
        icon = '❌';
    } else if (type === 'loading') {
        bgColor = '#0f172a';
        textColor = '#60a5fa';
        icon = '⏳';
    }

    toast.style.background = bgColor;
    toast.style.color = textColor;
    toast.style.border = '1px solid ' + textColor;
    content.innerHTML = '<span style="font-size: 1.2rem;">' + icon + '</span> <span>' + message + '</span>';

    toast.style.display = 'block';
    toast.style.opacity = '1';

    if (autoHide > 0 && type !== 'loading') {
        setTimeout(() => {
            toast.style.opacity = '0';
            setTimeout(() => { toast.style.display = 'none'; }, 300);
        }, autoHide);
    }
}

function openModal(id) {
    document.getElementById(id).classList.add('active');
}
function closeModal(id) {
    document.getElementById(id).classList.remove('active');
}

function openHeaderModal() {
    if (!boardData.header) boardData.header = {};
    document.getElementById('hdrEffectivityDate').value = boardData.header.effectivityDate || '';
    document.getElementById('hdrJournalMeta').value = boardData.header.journalMeta || '';
    document.getElementById('hdrOfficeEmail').value = boardData.header.officeEmail || '';
    openModal('headerModal');
}

function saveHeaderModal() {
    boardData.header.effectivityDate = document.getElementById('hdrEffectivityDate').value;
    boardData.header.journalMeta = document.getElementById('hdrJournalMeta').value;
    boardData.header.officeEmail = document.getElementById('hdrOfficeEmail').value;
    
    closeModal('headerModal');
    saveBoardDataToServer('Header information updated successfully!');
}

function openAddMemberModal(category) {
    document.getElementById('modalCategory').value = category;
    document.getElementById('modalMemberId').value = '';
    document.getElementById('modalName').value = '';

    let catName = category === 'leadership' ? 'Leadership Member' : (category === 'supportStaff' ? 'Support Staff' : 'Reviewer');
    document.getElementById('memberModalTitle').textContent = 'Add New ' + catName;
    toggleCategoryFields(category);
    openModal('memberModal');
}

function openEditMemberModal(category, id) {
    document.getElementById('modalCategory').value = category;
    document.getElementById('modalMemberId').value = id;
    
    let item = (boardData[category] || []).find(m => m.id === id);
    if (!item) {
        alert('Prompt Notification: Could not find member with ID: ' + id);
        return;
    }

    document.getElementById('modalName').value = item.name || '';
    document.getElementById('memberModalTitle').textContent = 'Edit Member Details';
    
    toggleCategoryFields(category);

    if (category === 'leadership') {
        document.getElementById('modalLeaderRole').value = item.role || '';
        document.getElementById('modalLeaderTitle').value = item.title || '';
        document.getElementById('modalLeaderInstitution').value = item.institution || '';
    } else if (category === 'externalReviewers' || category === 'internalReviewers') {
        document.getElementById('modalRevInstitution').value = item.institution || '';
        document.getElementById('modalRevCountry').value = item.country || '';
    } else if (category === 'supportStaff') {
        document.getElementById('modalStaffRole').value = item.role || '';
        document.getElementById('modalStaffInitials').value = item.initials || '';
    }

    openModal('memberModal');
}

function toggleCategoryFields(category) {
    document.getElementById('fieldsLeadership').style.display = (category === 'leadership') ? 'block' : 'none';
    document.getElementById('fieldsReviewer').style.display = (category === 'externalReviewers' || category === 'internalReviewers') ? 'block' : 'none';
    document.getElementById('fieldsSupport').style.display = (category === 'supportStaff') ? 'block' : 'none';
}

function saveMemberModal() {
    let category = document.getElementById('modalCategory').value;
    let id = document.getElementById('modalMemberId').value;
    let name = document.getElementById('modalName').value.trim();

    if (!name) {
        alert('Prompt Notification: Please enter full name for member.');
        return;
    }

    if (!boardData[category]) boardData[category] = [];

    let actionText = id ? 'Member details updated successfully!' : 'New member added successfully!';

    if (id) {
        // Edit existing
        let item = boardData[category].find(m => m.id === id);
        if (item) {
            item.name = name;
            if (category === 'leadership') {
                item.role = document.getElementById('modalLeaderRole').value;
                item.title = document.getElementById('modalLeaderTitle').value;
                item.institution = document.getElementById('modalLeaderInstitution').value;
            } else if (category === 'externalReviewers' || category === 'internalReviewers') {
                item.institution = document.getElementById('modalRevInstitution').value;
                item.country = document.getElementById('modalRevCountry').value;
            } else if (category === 'supportStaff') {
                item.role = document.getElementById('modalStaffRole').value;
                item.initials = document.getElementById('modalStaffInitials').value || name.split(' ').map(n => n[0]).join('').substring(0,2).toUpperCase();
            }
        }
    } else {
        // Add new
        let newId = category.substring(0,3) + '_' + Date.now();
        let newItem = { id: newId, name: name };

        if (category === 'leadership') {
            newItem.role = document.getElementById('modalLeaderRole').value || 'Editorial Board Member';
            newItem.title = document.getElementById('modalLeaderTitle').value || '';
            newItem.institution = document.getElementById('modalLeaderInstitution').value || '';
        } else if (category === 'externalReviewers' || category === 'internalReviewers') {
            newItem.institution = document.getElementById('modalRevInstitution').value || '';
            newItem.country = document.getElementById('modalRevCountry').value || 'Philippines';
        } else if (category === 'supportStaff') {
            newItem.role = document.getElementById('modalStaffRole').value || 'Support Staff';
            newItem.initials = document.getElementById('modalStaffInitials').value || name.split(' ').map(n => n[0]).join('').substring(0,2).toUpperCase();
        }

        boardData[category].push(newItem);
    }

    closeModal('memberModal');
    saveBoardDataToServer(actionText);
}

function confirmDeleteMember(category, id) {
    let item = (boardData[category] || []).find(m => m.id === id);
    let memberName = item ? item.name : 'this member';

    if (confirm('Confirmation Prompt:\nAre you sure you want to delete "' + memberName + '" from the editorial board?')) {
        if (boardData[category]) {
            boardData[category] = boardData[category].filter(m => m.id !== id);
            saveBoardDataToServer('Member "' + memberName + '" was successfully deleted!');
        }
    }
}

function saveBoardDataToServer(successPromptMessage = 'Changes saved successfully!') {
    showAdminToast('Saving changes to server...', 'loading', 0);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', saveEndpointUrl, true);
    
    let formData = new FormData();
    formData.append('editorialData', JSON.stringify(boardData));

    xhr.onload = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
            try {
                let data = JSON.parse(xhr.responseText);
                if (data.status === 'success') {
                    showAdminToast('✅ ' + successPromptMessage + ' Reloading page...', 'success', 2000);
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000);
                    return;
                } else {
                    let msg = data.message || 'Server error occurred.';
                    showAdminToast('❌ Error: ' + msg, 'error', 6000);
                    alert('Prompt Notification: Action Failed!\n\nReason: ' + msg);
                    return;
                }
            } catch(e) {
                console.error('JSON parse error:', e, xhr.responseText);
                showAdminToast('❌ Invalid server response', 'error', 6000);
                alert('Prompt Notification: Invalid Server Response!\n\nResponse preview:\n' + xhr.responseText.substring(0, 200));
                return;
            }
        }
        showAdminToast('❌ HTTP ' + xhr.status + ' Error', 'error', 6000);
        alert('Prompt Notification: HTTP Error ' + xhr.status + '\n\nResponse:\n' + xhr.responseText.substring(0, 200));
    };

    xhr.onerror = function() {
        showAdminToast('❌ Connection error', 'error', 6000);
        alert('Prompt Notification: Connection Error!\nCould not reach server endpoint: ' + saveEndpointUrl);
    };

    xhr.send(formData);
}
</script>
{/if}

{include file="frontend/components/footer.tpl"}
