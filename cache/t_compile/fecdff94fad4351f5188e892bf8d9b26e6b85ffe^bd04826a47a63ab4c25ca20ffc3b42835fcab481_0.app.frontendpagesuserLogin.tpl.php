<?php
/* Smarty version 4.3.1, created on 2025-11-19 07:36:40
  from 'app:frontendpagesuserLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_691d738860b6e5_27390819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd04826a47a63ab4c25ca20ffc3b42835fcab481' => 
    array (
      0 => 'app:frontendpagesuserLogin.tpl',
      1 => 1763537785,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
  ),
),false)) {
function content_691d738860b6e5_27390819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitle'=>"user.login"), 0, false);
?>

<style>
/* Full page wrapper */
html, body {
    height: 100%;
    margin: 0;
    background: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Hide OJS headers */
header.pkp_header,
.pkp_site_name,
.pkp_navigation_primary_wrapper,
.pkp_navigation_user,
.pkp_navbar,
.pkp_navigation_primary,
.pkp_structure_head,
.pkp_structure_page,
.pkp_site_nav_menu {
    display: none !important;
}

/* Container & row centering */
.container,
.container > .row{
    display: flex !important;
    justify-content: center;
    align-items: center;
    width: 650px;
    min-height: 100vh; /* full viewport height */
    padding: 0;
    box-sizing: border-box;
}


/* Login form card */
#login {
    width: 100%;        /* scales with viewport */
    max-width: 600px;  /* desktop width */
    padding: 40px;
    background: #fff;
    border: 1px solid #4caf50;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    box-sizing: border-box;
}



/* Logo above form */
.login-logo img {
    display: block;
    margin: 0 auto 25px;
    max-width: 220px;
    width: 100%;
    height: auto;
}

/* Inputs */
#login input.form-control {
    border: 1px solid #4caf50;
    border-radius: 8px;
    padding: 12px;
    width: 100%;
    box-sizing: border-box;
}

#login input.form-control:focus {
    border-color: #2d7f32;
    box-shadow: 0 0 6px rgba(76, 175, 80, 0.4);
}

/* Links */
#login a {
    color: #4caf50 !important;
    text-decoration: none !important;
}

#login a:hover {
    color: #2d7f32 !important;
}

/* Buttons */
#login .btn-primary {
    background: #4caf50 !important;
    border-color: #4caf50 !important;
    width: 100%;
    padding: 12px;
    border-radius: 8px;
}

#login .register-button {
    border: 1px solid #4caf50 !important;
    color: #4caf50 !important;
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    margin-top: 10px;
    font-weight: bold;
}

#login .register-button:hover {
    background: #4caf50 !important;
    color: #fff !important;
}

/* Alerts */
#login .alert {
    border-radius: 8px;
}

/* Responsive adjustments */
@media (max-width: 1024px) {
    #login {
        max-width: 600px; /* tablets/laptops */
        padding: 35px;
    }
    .login-logo img {
        max-width: 180px;
        margin-bottom: 20px;
    }
}

@media (max-width: 768px) {
    #login {
        max-width: 100%;
        padding: 30px;
    }
    .login-logo img {
        max-width: 160px;
        margin-bottom: 15px;
    }
}

@media (max-width: 450px) {
    body, html {
        overflow-x: hidden; /* prevent horizontal scroll */
    }

    #login {
        padding: 20px;
        width: 100%;
        box-sizing: border-box; /* include padding in width */
    }

    .login-logo img {
        max-width: 100%;
        margin-bottom: 15px;
    }

    .container {
        width: 100%; /* instead of fixed 300px */
        max-width: 350px; /* optional, keeps it from getting too wide */
        box-sizing: border-box;
		border-radius: 50px;
    }
}




</style>

<style>
/* Completely hide header area without breaking layout */
header.pkp_header,
.pkp_site_name,
.pkp_navigation_primary_wrapper,
.pkp_navigation_user,
.pkp_navbar,
.pkp_navigation_primary {
    display: none !important;
}

/* Remove empty space left by the header */
.pkp_structure_head {
    height: 0 !important;
    padding: 0 !important;
    margin: 0 !important;
}
</style>





		<?php if ($_smarty_tpl->tpl_vars['loginMessage']->value) {?>
		<div class="alert alert-info" role="alert">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['loginMessage']->value),$_smarty_tpl ) );?>

		</div>
	<?php }?>

	
<?php if ($_smarty_tpl->tpl_vars['loginMessage']->value) {?>
    <div class="alert alert-info" role="alert">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['loginMessage']->value),$_smarty_tpl ) );?>

    </div>
<?php }?>

<div class="login-logo" style="text-align:center; margin-bottom:20px;">
    <img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/plugins/themes/academic_free/images/top_logo_login.png" alt="Site Logo" style="max-width:180px; width:100%; height:auto;">
</div>

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

        <div class="form-group">
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







<?php }
}
