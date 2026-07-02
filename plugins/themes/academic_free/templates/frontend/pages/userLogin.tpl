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
{include file="frontend/components/header.tpl" pageTitle="user.login"}

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




{*	{include file="frontend/components/breadcrumbs.tpl" currentTitleKey="user.login"} *}

	{* A login message may be displayed if the user was redireceted to the
	   login page from another request. Examples include if login is required
	   before dowloading a file. *}
	{if $loginMessage}
		<div class="alert alert-info" role="alert">
			{translate key=$loginMessage}
		</div>
	{/if}

	{* Main container removed *}

{* Optional breadcrumb (commented) *}
{* {include file="frontend/components/breadcrumbs.tpl" currentTitleKey="user.login"} *}
{* Display login message if exists *}
{if $loginMessage}
    <div class="alert alert-info" role="alert">
        {translate key=$loginMessage}
    </div>
{/if}

{* Optional logo above the form *}
<div class="login-logo" style="text-align:center; margin-bottom:20px;">
    <img src="{$baseUrl}/plugins/themes/academic_free/images/top_logo_login.png" alt="Site Logo" style="max-width:180px; width:100%; height:auto;">
</div>

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
    <div class="form-group">
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







