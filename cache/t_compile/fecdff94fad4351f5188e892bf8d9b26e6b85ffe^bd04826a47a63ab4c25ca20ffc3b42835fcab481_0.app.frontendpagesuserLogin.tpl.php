<?php
/* Smarty version 4.3.1, created on 2026-07-13 07:08:54
  from 'app:frontendpagesuserLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6a5472e6ca90c6_78988626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd04826a47a63ab4c25ca20ffc3b42835fcab481' => 
    array (
      0 => 'app:frontendpagesuserLogin.tpl',
      1 => 1783914093,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/headerHead.tpl' => 1,
  ),
),false)) {
function content_6a5472e6ca90c6_78988626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cbsua-journal-git\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<!DOCTYPE html>
<html lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
" xml:lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['currentLocale']->value,"_","-");?>
">
<?php if (!$_smarty_tpl->tpl_vars['pageTitleTranslated']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pageTitleTranslated", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_subTemplateRender("app:frontend/components/headerHead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="pkp_page_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedPage']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);?>
 pkp_op_<?php echo (($tmp = call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['requestedOp']->value )) ?? null)===null||$tmp==='' ? "index" ?? null : $tmp);?>
">

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

/* Decorative glass shapes */
.login-split-brand::before, 
.login-split-brand::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.03);
}

.login-split-brand::before {
    width: 600px;
    height: 600px;
    top: -150px;
    left: -150px;
}

.login-split-brand::after {
    width: 800px;
    height: 800px;
    bottom: -200px;
    right: -200px;
    background: rgba(16, 184, 101, 0.05);
}

.brand-content {
    max-width: 500px;
    position: relative;
    z-index: 10;
}

.brand-content img {
    max-width: 260px;
    margin-bottom: 40px;
    filter: drop-shadow(0 4px 12px rgba(0,0,0,0.3));
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
    color: rgba(255, 255, 255, 0.85);
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
    transition: all 0.2s ease;
}

#login input.form-control:focus {
    border-color: #10b865;
    background: #ffffff;
    box-shadow: 0 0 0 4px rgba(16, 184, 101, 0.1);
    outline: none;
}

/* Links */
#login a {
    color: #10b865 !important;
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
    accent-color: #10b865;
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
    transition: all 0.25s ease;
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
    background: #10b865 !important;
    box-shadow: 0 6px 20px rgba(16, 184, 101, 0.25);
    transform: translateY(-2px);
}

#login .register-button {
    background: #f4fbf7 !important;
    color: #073f22 !important;
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
    border-left: 4px solid #10b865;
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
</style>

<div class="login-split-layout">
    
        <div class="login-split-brand">
        <div class="brand-content">
            <a href="<?php echo $_smarty_tpl->tpl_vars['homeUrl']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/plugins/themes/academic_free/images/top_logo.png" alt="CBSUA Journals Logo">
            </a>
            <h2>Academic Excellence &amp; Research Innovation</h2>
            <p>Join the Central Bicol State University of Agriculture's premier platform for peer-reviewed academic journals, open-access publications, and scholarly collaboration.</p>
        </div>
    </div>

        <div class="login-split-form">
        <div class="form-wrapper">
            
            <h3>Sign In</h3>
            <p class="subtitle">Please enter your credentials to proceed.</p>

                        <?php if ($_smarty_tpl->tpl_vars['loginMessage']->value) {?>
                <div class="alert alert-info" role="alert">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['loginMessage']->value),$_smarty_tpl ) );?>

                </div>
            <?php }?>

            <form class="pkp_form login" id="login" method="post" action="<?php echo $_smarty_tpl->tpl_vars['loginUrl']->value;?>
">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

                <input type="hidden" name="source" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value )) ));?>
" />

                                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['error']->value,'reason'=>$_smarty_tpl->tpl_vars['reason']->value),$_smarty_tpl ) );?>

                    </div>
                <?php }?>

                                <div class="form-group">
                    <label for="login-username"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.username"),$_smarty_tpl ) );?>
</label>
                    <input type="text" 
                           name="username" 
                           class="form-control" 
                           id="login-username" 
                           placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'user.username'),$_smarty_tpl ) );?>
" 
                           value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['username']->value ));?>
" 
                           maxlength="32" 
                           required>
                </div>

                                <div class="form-group">
                    <label for="login-password"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.password"),$_smarty_tpl ) );?>
</label>
                    <input type="password" 
                           name="password" 
                           class="form-control" 
                           id="login-password" 
                           placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'user.password'),$_smarty_tpl ) );?>
" 
                           maxlength="32" 
                           required>
                </div>

                                <div class="form-group" style="text-align: right; margin-top: -16px;">
                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"login",'op'=>"lostPassword"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.forgotPassword"),$_smarty_tpl ) );?>
</a>
                </div>

                                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" id="remember" value="1" checked="$remember">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.rememberUsernameAndPassword"),$_smarty_tpl ) );?>

                    </label>
                </div>

                                <div class="buttons">
                    <button type="submit" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login"),$_smarty_tpl ) );?>
</button>

                    <?php if (!$_smarty_tpl->tpl_vars['disableUserReg']->value) {?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "registerUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"user",'op'=>"register",'source'=>$_smarty_tpl->tpl_vars['source']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <a class="btn btn-default register-button" href="<?php echo $_smarty_tpl->tpl_vars['registerUrl']->value;?>
" role="button">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.registerNewAccount"),$_smarty_tpl ) );?>

                        </a>
                    <?php }?>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
<?php }
}
