<?php
/* Smarty version 4.3.1, created on 2026-07-27 15:38:07
  from 'app:frontendpagesmessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a675f3f335f98_70920577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a0b83497d74c0106f788560158077e321405c52' => 
    array (
      0 => 'app:frontendpagesmessage.tpl',
      1 => 1784016368,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
  ),
),false)) {
function content_6a675f3f335f98_70920577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
<?php if (!$_smarty_tpl->tpl_vars['pageTitleTranslated']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="pkp_page_message">

<style>
html, body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    font-family: 'Inter', sans-serif;
    background: #052e18;
}

.message-page-wrapper {
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
.message-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 40px;
    width: 100%;
    max-width: 480px;
    box-sizing: border-box;
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    position: relative;
    z-index: 10;
    text-align: center;
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
    margin-bottom: 32px;
}

.brand-logo img {
    max-width: 200px;
    filter: drop-shadow(0 2px 8px rgba(0,0,0,0.05));
}

.message-icon-wrapper {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: #f4fbf7;
    color: #1a7b41;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
    box-shadow: 0 4px 12px rgba(26, 123, 65, 0.05);
}

.message-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.8em;
    color: #073f22;
    margin: 0 0 16px;
    font-weight: 700;
}

.message-content {
    font-size: 14px;
    line-height: 1.6;
    color: #506054;
    margin-bottom: 32px;
}

.message-content a {
    color: #1a7b41;
    text-decoration: underline;
    font-weight: 600;
}

.message-actions {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    background: #073f22 !important;
    color: #ffffff !important;
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    font-weight: 600;
    width: 100%;
    padding: 14px;
    border-radius: 8px;
    text-decoration: none !important;
    transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 4px 12px rgba(7, 63, 34, 0.15);
    border: none;
    cursor: pointer;
}

.btn-primary:hover,
.btn-primary:focus {
    background: #1a7b41 !important;
    box-shadow: 0 6px 20px rgba(26, 123, 65, 0.25);
    transform: translateY(-2px);
}

@media (max-width: 576px) {
    .message-card {
        padding: 24px;
    }
}
</style>

<div class="message-page-wrapper">
    <!-- Animated background pattern and orbs -->
    <div class="brand-grid-pattern"></div>
    <div class="login-orb login-orb-1"></div>
    <div class="login-orb login-orb-2"></div>
    <div class="login-orb login-orb-3"></div>
    <div class="login-orb login-orb-4"></div>
    
    <!-- Interactive Particle Trail Canvas -->
    <canvas id="login-trail-canvas"></canvas>

    <div class="message-card">
        <div class="brand-logo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/plugins/themes/academic_free/images/top_logo.png" alt="CBSUA Journals Logo">
            </a>
        </div>

        <div class="message-icon-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 17a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9.5C2 7 4 5 6.5 5H18c2.2 0 4 1.8 4 4v8Z"/><path d="m22 9-8.02 5.01a2.23 2.23 0 0 1-2.4 0L2 9"/></svg>
        </div>

        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['pageTitle']->value),$_smarty_tpl ) );?>
</h3>
        
        <div class="message-content">
            <?php if ($_smarty_tpl->tpl_vars['messageTranslated']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['messageTranslated']->value;?>

            <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['message']->value),$_smarty_tpl ) );?>

            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['backLink']->value) {?>
            <div class="message-actions">
                <a href="<?php echo $_smarty_tpl->tpl_vars['backLink']->value;?>
" class="btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['backLinkLabel']->value),$_smarty_tpl ) );?>
</span>
                </a>
            </div>
        <?php }?>
    </div>
</div>

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
