{**
 * templates/frontend/pages/userLostPassword.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2000-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Password reset form.
 *
 *}
<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
{if !$pageTitleTranslated}{capture assign="pageTitleTranslated"}{translate key="user.login.resetPassword"}{/capture}{/if}
{include file="frontend/components/headerHead.tpl"}
<body class="pkp_page_lost_password">

<style>
html, body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    font-family: 'Inter', sans-serif;
    background: #052e18;
}

.lost-password-wrapper {
    min-height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 24px;
    box-sizing: border-box;
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #052e18 0%, #073f22 100%);
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

/* Card */
.lost-password-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 40px;
    width: 100%;
    max-width: 460px;
    box-sizing: border-box;
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    position: relative;
    z-index: 10;
    animation: fadeInUpCard 0.8s cubic-bezier(0.16, 1, 0.3, 1) both;
}

@keyframes fadeInUpCard {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.brand-logo {
    text-align: center;
    margin-bottom: 24px;
}

.brand-logo img {
    max-width: 200px;
    filter: drop-shadow(0 2px 8px rgba(0,0,0,0.05));
}

.back-to-login {
    margin-bottom: 24px;
}

.back-to-login a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #1a7b41 !important;
    text-decoration: none !important;
    font-size: 13px;
    font-weight: 600;
    transition: all 0.25s ease;
}

.back-to-login a:hover {
    color: #073f22 !important;
    transform: translateX(-2px);
}

.lost-password-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.8em;
    color: #073f22;
    margin: 0 0 16px;
    font-weight: 700;
}

.instruction-box {
    display: flex;
    gap: 10px;
    background: #f4fbf7;
    border-left: 4px solid #1a7b41;
    padding: 12px 16px;
    border-radius: 6px;
    margin-bottom: 28px;
    color: #2b3a30;
}

.instruction-box svg {
    color: #1a7b41;
    flex-shrink: 0;
    margin-top: 2px;
}

.instruction-box p {
    margin: 0;
    font-size: 13px;
    line-height: 1.5;
}

/* Form inputs & buttons styling */
.form-group {
    margin-bottom: 24px;
}

label {
    display: block;
    font-weight: 600;
    color: #073f22;
    margin-bottom: 8px;
    font-size: 0.9em;
}

input.form-control {
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

input.form-control:focus {
    border-color: #1a7b41;
    background: #ffffff;
    box-shadow: 0 0 0 4px rgba(26, 123, 65, 0.1);
    outline: none;
    transform: translateY(-1px);
}

.buttons {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.btn {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
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

.btn-primary {
    background: #073f22 !important;
    color: #ffffff !important;
    box-shadow: 0 4px 12px rgba(7, 63, 34, 0.15);
}

.btn-primary:hover,
.btn-primary:focus {
    background: #1a7b41 !important;
    box-shadow: 0 6px 20px rgba(26, 123, 65, 0.25);
    transform: translateY(-2px);
}

.register-button {
    background: #f4fbf7 !important;
    color: #1a7b41 !important;
    text-decoration: none !important;
    display: inline-block;
}

.register-button:hover,
.register-button:focus {
    background: #cfe8d8 !important;
    color: #052e18 !important;
}

.alert {
    border-radius: 8px;
    padding: 12px 16px;
    margin-bottom: 20px;
    font-size: 13px;
    border: none;
}

.alert-danger {
    background: #fef2f2;
    color: #991b1b;
    border-left: 4px solid #dc2626;
}

@media (max-width: 576px) {
    .lost-password-card {
        padding: 24px;
    }
}
</style>

<div class="lost-password-wrapper">
    <!-- Animated background pattern and orbs -->
    <div class="brand-grid-pattern"></div>
    <div class="login-orb login-orb-1"></div>
    <div class="login-orb login-orb-2"></div>
    <div class="login-orb login-orb-3"></div>
    <div class="login-orb login-orb-4"></div>
    
    <!-- Interactive Particle Trail Canvas -->
    <canvas id="login-trail-canvas"></canvas>

    <div class="lost-password-card">
        <div class="brand-logo">
            <a href="{$homeUrl}">
                <img src="{$baseUrl}/plugins/themes/academic_free/images/top_logo.png" alt="CBSUA Journals Logo">
            </a>
        </div>
        
        <div class="back-to-login">
            <a href="{url page="login"}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                <span>Back to Sign In</span>
            </a>
        </div>

        <h3>Reset Password</h3>
        
        <div class="instruction-box">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg>
            <p>{translate key="user.login.resetPasswordInstructions"}</p>
        </div>

        <form class="pkp_form lost_password" id="lostPasswordForm" action="{url page="login" op="requestResetPassword"}" method="post">
            {csrf}

            {if $error}
                <div class="alert alert-danger" role="alert">
                    {translate key=$error}
                </div>
            {/if}

            <div class="form-group">
                <label for="login-email">
                    {translate key="user.login.registeredEmail"}
                </label>
                <input type="email" name="email" class="form-control" id="login-email" placeholder="{translate key='user.login.registeredEmail'}" value="{$email|escape}" maxlength="64" required>
            </div>

            <div class="buttons">
                <button type="submit" class="btn btn-primary">
                    {translate key="user.login.resetPassword"}
                </button>

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
