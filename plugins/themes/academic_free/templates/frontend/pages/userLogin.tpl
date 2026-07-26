{**
 * templates/frontend/pages/userLogin.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2000-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * User login form.
 *
 *}

<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
{if !$pageTitleTranslated}{capture assign="pageTitleTranslated"}{translate key="user.login"}{/capture}{/if}
{include file="frontend/components/headerHead.tpl"}
<body class="pkp_page_{$requestedPage|escape|default:"index"} pkp_op_{$requestedOp|escape|default:"index"}">

<style>
/* ── Premium Split-Screen Login Layout ── */
html, body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    font-family: 'Inter', sans-serif;
    background: #ffffff;
}

/* Hide OJS headers and footers completely */
#headerNavigationContainer,
.journal_index,
footer[role="contentinfo"],
header.pkp_header,
.pkp_site_name,
.pkp_navigation_primary_wrapper,
.pkp_navigation_user,
.pkp_navbar,
.pkp_navigation_primary,
.pkp_structure_head,
.pkp_site_nav_menu,
.site-footer {
    display: none !important;
}

.pkp_structure_head {
    height: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
}

/* Reset OJS structural containers */
.pkp_page_login .pkp_structure_page,
.pkp_page_login .pkp_structure_content,
.pkp_page_login .pkp_structure_main,
.container,
.container > .row {
    width: 100% !important;
    max-width: none !important;
    min-height: 100vh !important;
    margin: 0 !important;
    padding: 0 !important;
    display: block !important;
    border: none !important;
    box-shadow: none !important;
    background: transparent !important;
}

/* Split Layout */
.login-split-layout {
    display: flex;
    min-height: 100vh;
    width: 100%;
}

/* Left Brand Panel */
.login-split-brand {
    flex: 1.2;
    background: linear-gradient(135deg, #052e18 0%, #073f22 100%);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 60px;
    position: relative;
    overflow: hidden;
}

/* Modern Animated Mesh Gradient Background */
.brand-grid-pattern {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: radial-gradient(rgba(255, 255, 255, 0.08) 1.5px, transparent 1.5px);
    background-size: 32px 32px;
    opacity: 0.6;
    animation: slowPan 60s linear infinite;
    z-index: 2;
}

.login-orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(100px);
    opacity: 0.45;
    mix-blend-mode: screen;
    z-index: 1;
}

.login-orb-1 {
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, #1a7b41 0%, transparent 70%);
    top: -150px;
    left: -150px;
    animation: orbit1 25s infinite alternate ease-in-out;
}

.login-orb-2 {
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, #d4a853 0%, transparent 70%);
    bottom: -200px;
    right: -150px;
    animation: orbit2 32s infinite alternate ease-in-out;
}

.login-orb-3 {
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, #10b865 0%, transparent 70%);
    top: 30%;
    right: 5%;
    animation: orbit3 22s infinite alternate ease-in-out;
}

.login-orb-4 {
    width: 350px;
    height: 350px;
    background: radial-gradient(circle, #052e18 0%, transparent 70%);
    bottom: 5%;
    left: 15%;
    animation: orbit4 18s infinite alternate ease-in-out;
}

@keyframes slowPan {
    0% { background-position: 0 0; }
    100% { background-position: 1000px 1000px; }
}

@keyframes orbit1 {
    0% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(120px, 90px) scale(1.15); }
    100% { transform: translate(-60px, 160px) scale(0.9); }
}

@keyframes orbit2 {
    0% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(-140px, -70px) scale(0.85); }
    100% { transform: translate(90px, -180px) scale(1.15); }
}

@keyframes orbit3 {
    0% { transform: translate(0, 0) scale(0.9); }
    50% { transform: translate(-90px, 110px) scale(1.1); }
    100% { transform: translate(130px, -60px) scale(1); }
}

@keyframes orbit4 {
    0% { transform: translate(0, 0) scale(1.1); }
    50% { transform: translate(70px, -95px) scale(0.9); }
    100% { transform: translate(-110px, 45px) scale(1.15); }
}

.brand-content {
    max-width: 500px;
    position: relative;
    z-index: 10;
    animation: fadeInBrand 1.2s cubic-bezier(0.16, 1, 0.3, 1) both;
}

.brand-content img {
    max-width: 260px;
    margin-bottom: 40px;
    filter: drop-shadow(0 8px 24px rgba(0,0,0,0.25));
}

.brand-content h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.8em;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 24px;
    color: #ffffff;
}

.brand-content p {
    font-size: 1.15em;
    color: rgba(255, 255, 255, 0.88);
    line-height: 1.6;
}

/* Right Form Panel */
.login-split-form {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #ffffff;
    padding: 40px 60px;
    box-shadow: -10px 0 30px rgba(0,0,0,0.03);
    position: relative;
    z-index: 20;
}

.form-wrapper {
    width: 100%;
    max-width: 400px;
    animation: fadeInUpForm 1s cubic-bezier(0.16, 1, 0.3, 1) 0.15s both;
}

@keyframes fadeInBrand {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUpForm {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.form-wrapper h3 {
    font-family: 'Playfair Display', serif;
    font-size: 2.2em;
    color: #073f22;
    margin: 0 0 8px;
    font-weight: 700;
}

.form-wrapper .subtitle {
    color: #607064;
    margin-bottom: 36px;
    font-size: 1em;
}

/* Form Groups */
#login .form-group {
    margin-bottom: 24px;
}

#login label {
    display: block;
    font-weight: 600;
    color: #073f22;
    margin-bottom: 8px;
    font-size: 0.9em;
}

/* Inputs */
#login input.form-control {
    border: 1px solid #d1dfd6;
    border-radius: 8px;
    padding: 14px 16px;
    width: 100%;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
    font-size: 1em;
    color: #1f2e24;
    background: #fafcfb;
    transition: all 0.25s ease;
}

#login input.form-control:focus {
    border-color: #1a7b41;
    background: #ffffff;
    box-shadow: 0 0 0 4px rgba(26, 123, 65, 0.1);
    outline: none;
    transform: translateY(-1px);
}

/* Links */
#login a {
    color: #1a7b41 !important;
    text-decoration: none !important;
    font-size: 0.9em;
    font-weight: 500;
    transition: color 0.2s ease;
}

#login a:hover {
    color: #073f22 !important;
}

/* Checkbox */
#login .checkbox {
    margin-top: 16px;
    margin-bottom: 32px;
}

#login .checkbox label {
    display: flex;
    align-items: center;
    font-weight: 500;
    color: #4c5c53;
    font-size: 0.9em;
    cursor: pointer;
}

#login .checkbox input[type="checkbox"] {
    position: relative !important;
    margin: 0 10px 0 0 !important;
    width: 18px;
    height: 18px;
    accent-color: #1a7b41;
    cursor: pointer;
}

/* Buttons */
#login .buttons {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

#login .btn {
    font-family: 'Inter', sans-serif;
    font-size: 1.05em;
    font-weight: 600;
    width: 100%;
    padding: 14px;
    border-radius: 8px;
    text-align: center;
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    box-sizing: border-box;
    border: none;
}

#login .btn-primary {
    background: #073f22 !important;
    color: #ffffff !important;
    box-shadow: 0 4px 12px rgba(7, 63, 34, 0.15);
}

#login .btn-primary:hover,
#login .btn-primary:focus {
    background: #1a7b41 !important;
    box-shadow: 0 6px 20px rgba(26, 123, 65, 0.25);
    transform: translateY(-2px);
}

#login .register-button {
    background: #f4fbf7 !important;
    color: #1a7b41 !important;
    text-decoration: none !important;
    display: inline-block;
}

#login .register-button:hover,
#login .register-button:focus {
    background: #cfe8d8 !important;
    color: #052e18 !important;
}

/* Alerts */
#login .alert {
    border-radius: 8px;
    padding: 14px 16px;
    margin-bottom: 24px;
    font-size: 0.9em;
    border: none;
}

#login .alert-info {
    background: #eef7f2;
    color: #073f22;
    border-left: 4px solid #1a7b41;
}

#login .alert-danger {
    background: #fef2f2;
    color: #991b1b;
    border-left: 4px solid #dc2626;
}

/* Responsive */
@media (max-width: 992px) {
    .login-split-layout {
        flex-direction: column;
    }
    
    .login-split-brand {
        flex: none;
        padding: 40px 20px;
        text-align: center;
    }
    
    .brand-content img {
        margin: 0 auto 24px;
        max-width: 200px;
    }
    
    .brand-content h2 {
        font-size: 2em;
    }
    
    .login-split-form {
        flex: 1;
        padding: 40px 20px;
    }
}

#login-trail-canvas {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 3;
}
</style>

<div class="login-split-layout">
    
    {* Left Side: Brand Panel *}
    <div class="login-split-brand">
        <!-- Modern Animated Mesh Gradient Background -->
        <div class="brand-grid-pattern"></div>
        <div class="login-orb login-orb-1"></div>
        <div class="login-orb login-orb-2"></div>
        <div class="login-orb login-orb-3"></div>
        <div class="login-orb login-orb-4"></div>

        <!-- Interactive Particle Trail Canvas -->
        <canvas id="login-trail-canvas"></canvas>

        <div class="brand-content">
            <a href="{$homeUrl}">
                <img src="{$baseUrl}/plugins/themes/academic_free/images/top_logo.png" alt="CBSUA Journals Logo">
            </a>
            <h2>Academic Excellence &amp; Research Innovation</h2>
            <p>Join the Central Bicol State University of Agriculture's premier platform for peer-reviewed academic journals, open-access publications, and scholarly collaboration.</p>
        </div>
    </div>

    {* Right Side: Form Panel *}
    <div class="login-split-form">
        <div class="form-wrapper">
            
            <h3>Sign In</h3>
            <p class="subtitle">Please enter your credentials to proceed.</p>

            {* Display login message if exists *}
            {if $loginMessage}
                <div class="alert alert-info" role="alert">
                    {translate key=$loginMessage}
                </div>
            {/if}

            <form class="pkp_form login" id="login" method="post" action="{$loginUrl}">
                {csrf}
                <input type="hidden" name="source" value="{$source|strip_unsafe_html|escape}" />

                {* Display error message if login failed *}
                {if $error}
                    <div class="alert alert-danger" role="alert">
                        {translate key=$error reason=$reason}
                    </div>
                {/if}

                {* Username field *}
                <div class="form-group">
                    <label for="login-username">{translate key="user.username"}</label>
                    <input type="text" 
                           name="username" 
                           class="form-control" 
                           id="login-username" 
                           placeholder="{translate key='user.username'}" 
                           value="{$username|escape}" 
                           maxlength="32" 
                           required>
                </div>

                {* Password field *}
                <div class="form-group">
                    <label for="login-password">{translate key="user.password"}</label>
                    <input type="password" 
                           name="password" 
                           class="form-control" 
                           id="login-password" 
                           placeholder="{translate key='user.password'}" 
                           maxlength="32" 
                           required>
                </div>

                {* Forgot password link *}
                <div class="form-group" style="text-align: right; margin-top: -16px;">
                    <a href="{url page="login" op="lostPassword"}">{translate key="user.login.forgotPassword"}</a>
                </div>

                {* Remember me checkbox *}
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" id="remember" value="1" checked="$remember">
                        {translate key="user.login.rememberUsernameAndPassword"}
                    </label>
                </div>

                {* Buttons *}
                <div class="buttons">
                    <button type="submit" class="btn btn-primary">{translate key="user.login"}</button>

                    {if !$disableUserReg}
                        {capture assign="registerUrl"}{url page="user" op="register" source=$source}{/capture}
                        <a class="btn btn-default register-button" href="{$registerUrl}" role="button">
                            {translate key="user.login.registerNewAccount"}
                        </a>
                    {/if}
                </div>
            </form>
        </div>
    </div>
</div>

<script>
(function() {
    const canvas = document.getElementById('login-trail-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    const brandPanel = canvas.parentElement;

    let width = canvas.width = brandPanel.clientWidth;
    let height = canvas.height = brandPanel.clientHeight;

    window.addEventListener('resize', () => {
        width = canvas.width = brandPanel.clientWidth;
        height = canvas.height = brandPanel.clientHeight;
    });

    const particles = [];
    const colors = ['#1a7b41', '#34d988', '#d4a853', '#f4fbf7'];
    let mouse = { x: null, y: null };

    brandPanel.addEventListener('mousemove', (e) => {
        const rect = brandPanel.getBoundingClientRect();
        mouse.x = e.clientX - rect.left;
        mouse.y = e.clientY - rect.top;

        // Spawn stardust particles
        for (let i = 0; i < 2; i++) {
            particles.push({
                x: mouse.x,
                y: mouse.y,
                vx: (Math.random() - 0.5) * 1.2,
                vy: -Math.random() * 0.8 - 0.3,
                ay: -0.025, // Upward acceleration (defies gravity)
                life: Math.random() * 100, // Random phase offset for swaying
                alpha: 1,
                size: Math.random() * 4 + 1.5,
                color: colors[Math.floor(Math.random() * colors.length)]
            });
        }
    });

    brandPanel.addEventListener('mouseleave', () => {
        mouse.x = null;
        mouse.y = null;
    });

    function animate() {
        ctx.clearRect(0, 0, width, height);

        for (let i = particles.length - 1; i >= 0; i--) {
            const p = particles[i];
            
            // Antigravity physics: pull upward & add gentle horizontal wave sway
            p.vy += p.ay;
            p.x += p.vx + Math.sin(p.life * 0.08) * 0.4;
            p.y += p.vy;
            p.life += 1;
            p.size = Math.max(0.5, p.size * 0.985);
            p.alpha -= 0.014;

            if (p.alpha <= 0) {
                particles.splice(i, 1);
                continue;
            }

            // Draw glowing connections (constellation effect)
            for (let j = i - 1; j >= 0; j--) {
                const p2 = particles[j];
                const dx = p.x - p2.x;
                const dy = p.y - p2.y;
                const dist = Math.sqrt(dx * dx + dy * dy);

                if (dist < 65) {
                    ctx.save();
                    ctx.beginPath();
                    ctx.moveTo(p.x, p.y);
                    ctx.lineTo(p2.x, p2.y);
                    ctx.strokeStyle = p.color;
                    ctx.globalAlpha = (1 - dist / 65) * 0.18 * Math.min(p.alpha, p2.alpha);
                    ctx.lineWidth = 0.7;
                    ctx.stroke();
                    ctx.restore();
                }
            }

            // Draw individual particle
            ctx.save();
            ctx.globalAlpha = p.alpha;
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
            ctx.shadowBlur = 6;
            ctx.shadowColor = p.color;
            ctx.fillStyle = p.color;
            ctx.fill();
            ctx.restore();
        }

        requestAnimationFrame(animate);
    }

    requestAnimationFrame(animate);
})();
</script>

</body>
</html>
