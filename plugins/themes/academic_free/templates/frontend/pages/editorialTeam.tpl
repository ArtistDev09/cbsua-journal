{**
 * templates/frontend/pages/editorialTeam.tpl
 * Modernized "Editorial Board" document-style design.
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
</style>

<div id="main-content" class="page page_editorial_team">

    {* Hero Header *}
    <div class="team-hero">
        <div class="team-hero-content">
            <div class="team-hero-badge-group">
                <div class="team-hero-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    Official Journal Directory
                </div>
                <div class="team-hero-badge effectivity-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    Effectivity Date: 2025
                </div>
            </div>
            <h1>Editorial Board</h1>
            <p class="journal-meta">Central Bicol State University of Agriculture<br>Multidisciplinary Research and Extension Journal (MREJ-CBSUA)</p>
            <div class="team-hero-contact">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                Editorial Office: <a href="mailto:mrej.cbsua@cbsua.edu.ph">mrej.cbsua@cbsua.edu.ph</a>
            </div>
        </div>
    </div>

    <div class="editorial-board-wrapper">

        {* ── LEADERSHIP SPOTLIGHT GRID ── *}
        <div class="leadership-grid">
            
            {* Editor-in-Chief *}
            <div class="leader-spotlight-card">
                <div class="leader-avatar-badge">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                </div>
                <span class="leader-role-tag">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    Editor-in-Chief / Managing Editor
                </span>
                <h3 class="leader-spotlight-name">Dr. Ramona Isabel S. Ramirez</h3>
                <div class="leader-spotlight-title">Managing Editor &bull; MREJ-CBSUA</div>
                <p class="leader-spotlight-inst">Central Bicol State University of Agriculture<br>Research and Innovation Journal</p>
            </div>

            {* Journal Adviser *}
            <div class="leader-spotlight-card">
                <div class="leader-avatar-badge" style="background: linear-gradient(135deg, #0d542e 0%, #10b865 100%); color: #ffffff;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <span class="leader-role-tag" style="background: #fff8e7; color: #8a6200;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                    Journal Adviser
                </span>
                <h3 class="leader-spotlight-name">Alberto N. Naperi, DPA</h3>
                <div class="leader-spotlight-title" style="color: #073f22;">University President</div>
                <p class="leader-spotlight-inst">Central Bicol State University of Agriculture<br>San Jose, Pili, Camarines Sur, Philippines</p>
            </div>

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
                    <span class="panel-count">15 Members</span>
                </div>

                <div class="reviewer-grid-list">
                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">01</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Jonathan P. Aguilar</div>
                            <div class="reviewer-inst-text">Kansas State University</div>
                            <span class="country-pill">United States of America</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">02</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Ernie C. Avila</div>
                            <div class="reviewer-inst-text">Polytechnic University of the Philippines</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">03</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Leonardo M. Florece</div>
                            <div class="reviewer-inst-text">University of the Philippines Los Baños</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">04</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Remil Galay</div>
                            <div class="reviewer-inst-text">University of the Philippines Los Baños</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">05</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Rafael D. Guerrero III</div>
                            <div class="reviewer-inst-text">National Academy of Science and Technology</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">06</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Julian F. Gonsalves</div>
                            <div class="reviewer-inst-text">International Institute of Rural Reconstruction</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">07</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Honeylet J. Nicolas</div>
                            <div class="reviewer-inst-text">Bulacan Agricultural State College</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">08</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Jupeth T. Pentang</div>
                            <div class="reviewer-inst-text">Western Philippines University</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">09</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Lynlei L. Pintor</div>
                            <div class="reviewer-inst-text">Ecosystems Research and Development Bureau</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">10</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Maria Ana T. Quimbo</div>
                            <div class="reviewer-inst-text">University of the Philippines Los Baños</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">11</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Roberto F. Rañola, Jr.</div>
                            <div class="reviewer-inst-text">University of the Philippines Los Baños</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">12</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Amy Lizbeth J. Rico</div>
                            <div class="reviewer-inst-text">Tarlac College of Agriculture</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">13</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Siti Aekbal Salleh Sr.</div>
                            <div class="reviewer-inst-text">Universiti Teknologi Mara</div>
                            <span class="country-pill">Malaysia</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">14</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Engr. Dr. Harold Jan R. Terano</div>
                            <div class="reviewer-inst-text">Camarines Sur Polytechnic Colleges</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">15</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Arvin L. Valderrama</div>
                            <div class="reviewer-inst-text">University of Tsukuba</div>
                            <span class="country-pill">Japan</span>
                        </div>
                    </div>
                </div>
            </div>

            {* Internal Reviewers *}
            <div class="reviewers-card-panel">
                <div class="panel-header">
                    <h3 class="panel-title">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                        <span>Internal Reviewers</span>
                    </h3>
                    <span class="panel-count">11 Members</span>
                </div>

                <div class="reviewer-grid-list">
                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">01</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Marilyn Balderas</div>
                            <div class="reviewer-inst-text">Central Bicol State University of Agriculture</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">02</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Prof. Arce D. Bellere</div>
                            <div class="reviewer-inst-text">Central Bicol State University of Agriculture</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">03</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Prof. Ma. Cresilda M. Caning</div>
                            <div class="reviewer-inst-text">Central Bicol State University of Agriculture</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">04</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Vladimir R. Foronda</div>
                            <div class="reviewer-inst-text">Central Bicol State University of Agriculture</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">05</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Hanilyn A. Hidalgo</div>
                            <div class="reviewer-inst-text">Central Bicol State University of Agriculture</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">06</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Prof. Ma. Teresa B. Lirag</div>
                            <div class="reviewer-inst-text">Central Bicol State University of Agriculture</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">07</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Engr. Ian Carlo M. Lositaño</div>
                            <div class="reviewer-inst-text">Central Bicol State University of Agriculture</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">08</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Ilene S. Basitan-Mirabeles</div>
                            <div class="reviewer-inst-text">Central Bicol State University of Agriculture</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">09</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Vergel P. Miraña</div>
                            <div class="reviewer-inst-text">Central Bicol State University of Agriculture</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">10</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Amelia R. Nicolas</div>
                            <div class="reviewer-inst-text">Central Bicol State University of Agriculture</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>

                    <div class="reviewer-profile-item">
                        <div class="reviewer-bullet">11</div>
                        <div class="reviewer-info">
                            <div class="reviewer-name-text">Dr. Dariel A. Palmiano</div>
                            <div class="reviewer-inst-text">Central Bicol State University of Agriculture</div>
                            <span class="country-pill">Philippines</span>
                        </div>
                    </div>
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
                <span class="panel-count">4 Members</span>
            </div>

            <div class="staff-cards-grid">
                <div class="staff-profile-card">
                    <div class="staff-avatar-mini">MG</div>
                    <div class="staff-person-name">Mark Jaypee C. Gonzales</div>
                    <div class="staff-person-role">DVM</div>
                </div>

                <div class="staff-profile-card">
                    <div class="staff-avatar-mini">GR</div>
                    <div class="staff-person-name">Glenn E. Redicilla</div>
                    <div class="staff-person-role">Support Staff</div>
                </div>

                <div class="staff-profile-card">
                    <div class="staff-avatar-mini">AB</div>
                    <div class="staff-person-name">Alvir E. Bausa</div>
                    <div class="staff-person-role">Support Staff</div>
                </div>

                <div class="staff-profile-card">
                    <div class="staff-avatar-mini">SP</div>
                    <div class="staff-person-name">Sherilyn R. Petil</div>
                    <div class="staff-person-role">Support Staff</div>
                </div>
            </div>
        </div>

    </div>

</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
