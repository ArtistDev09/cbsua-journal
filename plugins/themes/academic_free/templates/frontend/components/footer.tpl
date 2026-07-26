{**
 * templates/frontend/components/footer.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Common site frontend footer.
 *
 * @uses $isFullWidth bool Should this page be displayed without sidebars? This
 *       represents a page-level override, and doesn't indicate whether or not
 *       sidebars have been configured for thesite.
 * @uses $currentContext Journal|Press The current journal or press
 * @uses $about 
 * @uses $mailingAddress string Mailing address for the journal/press
 * @uses $contactName string Primary contact name
 * @uses $contactTitle string Primary contact title
 * @uses $contactAffiliation string Primary contact affiliation
 * @uses $contactPhone string Primary contact phone number
 * @uses $contactEmail string Primary contact email address
 * @uses $supportName string Support contact name
 * @uses $supportPhone string Support contact phone number
 * @uses $supportEmail string Support contact email address
 *}

	        </main>
	
         {if empty($isFullWidth)}
            {capture assign="sidebarCode"}{call_hook name="Templates::Common::Sidebar"}{/capture}
            {if $sidebarCode}
                <aside id="sidebar" class="pkp_structure_sidebar col-xs-12 col-sm-3 col-md-2" role="complementary" aria-label="{translate|escape key="common.navigation.sidebar"}">
                    {$sidebarCode}
                </aside>
            {/if}
        {/if}
    </div><!-- /.row -->
</div><!-- /.container -->

<style>
/* ── Modern Footer ── */
.modern-footer {
    background: #052e18 !important;
    color: #ffffff;
    margin-top: 48px;
}

.modern-footer__accent {
    height: 3px;
    background: linear-gradient(90deg, #10b865, #d4a853, #10b865);
}

.modern-footer__main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 28px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    flex-wrap: wrap;
}

.modern-footer__brand {
    display: flex;
    align-items: center;
    gap: 12px;
}

.modern-footer__logo-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: #ffffff;
    transition: opacity 0.25s ease;
}

.modern-footer__logo-link:hover {
    opacity: 0.8;
    text-decoration: none;
    color: #ffffff;
}

.modern-footer__logo-img {
    height: 36px;
    width: auto;
    border-radius: 4px;
}

.modern-footer__copyright {
    font-family: 'Inter', sans-serif;
    font-size: 0.82em;
    font-weight: 400;
    color: rgba(255,255,255,0.6);
    letter-spacing: 0.01em;
}

.modern-footer__content {
    flex: 1 1 auto;
    font-family: 'Inter', sans-serif;
    font-size: 0.85em;
    font-weight: 300;
    color: rgba(255,255,255,0.7);
    line-height: 1.55;
    text-align: center;
}

.modern-footer__content a {
    color: #34d988;
    text-decoration: none;
    transition: color 0.2s ease;
}

.modern-footer__content a:hover {
    color: #ffffff;
}

.modern-footer__powered {
    font-family: 'Inter', sans-serif;
    font-size: 0.75em;
    font-weight: 400;
    color: rgba(255,255,255,0.35);
}

.modern-footer__powered a {
    color: rgba(255,255,255,0.5);
    text-decoration: none;
    transition: color 0.2s ease;
}

.modern-footer__powered a:hover {
    color: #34d988;
}

@media (max-width: 767px) {
    .modern-footer__main {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 24px 16px;
        gap: 14px;
    }

    .modern-footer__content {
        text-align: center;
    }
}
</style>

	<footer class="modern-footer" role="contentinfo">
		<div class="modern-footer__accent"></div>

		<div class="modern-footer__main">
			<div class="modern-footer__brand">
				<a href="{$homeUrl}" class="modern-footer__logo-link">
					<img src="{$baseUrl}/plugins/themes/academic_free/images/logo.png"
						 alt="CBSUA Logo"
						 class="modern-footer__logo-img">
					<span class="modern-footer__copyright">© {$smarty.now|date_format:"%Y"} VPRI CBSUA. All rights reserved.</span>
				</a>
			</div>

			{if $pageFooter}
				<div class="modern-footer__content">
					{$pageFooter}
				</div>
			{/if}

			<div class="modern-footer__powered">
				Developed by: <a href="https://pkp.sfu.ca/ojs/" target="_blank" rel="noopener"><span style="color: #d4a853; font-weight: 700;">R</span>esearch <span style="color: #d4a853; font-weight: 700;">I</span>nformation and <span style="color: #d4a853; font-weight: 700;">G</span>overnance <span style="color: #d4a853; font-weight: 700;">S</span>ystem</a>
			</div>
		</div>
	</footer>

</div><!-- pkp_structure_page -->

{load_script context="frontend" scripts=$scripts}

{call_hook name="Templates::Common::Footer::PageFooter"}
</body>
</html>
