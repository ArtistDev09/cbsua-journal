<?php

/**
 * @file plugins/blocks/information/InformationBlockPlugin.inc.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class InformationBlockPlugin
 * @ingroup plugins_blocks_information
 *
 * @brief Class for information block plugin
 */

import('lib.pkp.classes.plugins.BlockPlugin');

class InformationBlockPlugin extends BlockPlugin {
	/**
	 * Install default settings on journal creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return __('plugins.block.information.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.block.information.description');
	}

	/**
	 * @see BlockPlugin::getContents
	 */
	function getContents($templateMgr, $request = null) {
		// If no request passed, try to get the current one from the application
		if ($request === null && class_exists('Application')) {
			$app = Application::get();
			if ($app) $request = $app->getRequest();
		}

		// If still no request or no journal, return empty to avoid fatal errors
		if ($request === null) return parent::getContents($templateMgr, $request);

		$journal = $request->getJournal();
		if (!$journal) return parent::getContents($templateMgr, $request);

		// Try to get current issue (safe checks)
		$currentIssue = null;
		// Ensure IssueDAO is available
		if (class_exists('DAORegistry')) {
			import('classes.issue.IssueDAO');
			try {
				$issueDao = DAORegistry::getDAO('IssueDAO');
				if ($issueDao) {
					// getCurrent($journalId, $publishedOnly = true)
					$currentIssue = $issueDao->getCurrent($journal->getId(), true);
				}
			} catch (Exception $e) {
				// swallow — template will just not show current issue
				$currentIssue = null;
			}
		}

		// Assign variables to the template safely
		$templateMgr->assign(array(
			'forReaders' => $journal->getLocalizedData('readerInformation'),
			'forAuthors' => $journal->getLocalizedData('authorInformation'),
			'forLibrarians' => $journal->getLocalizedData('librarianInformation'),
			'currentIssue' => $currentIssue,
		));

		return parent::getContents($templateMgr, $request);
	}
}
