<?php

/**
 * @file pages/about/AboutHandler.inc.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class AboutHandler
 * @ingroup pages_about
 *
 * @brief Handle requests for journal about functions.
 */

import('lib.pkp.pages.about.AboutContextHandler');

class AboutHandler extends AboutContextHandler {
	/**
	 * Check if current user is admin or manager.
	 * @param $request PKPRequest
	 * @return boolean
	 */
	function isUserAdmin($request) {
		$user = $request->getUser();
		if (!$user) return false;

		$journal = $request->getJournal();
		$journalId = $journal ? $journal->getId() : 0;
		$userId = $user->getId();
		$adminRoles = array(ROLE_ID_SITE_ADMIN, ROLE_ID_MANAGER);

		// Check Site Admin and Journal Manager roles via RoleDAO
		$roleDao = DAORegistry::getDAO('RoleDAO');
		if ($roleDao->userHasRole(0, $userId, ROLE_ID_SITE_ADMIN)) {
			return true;
		}
		if ($journalId && $roleDao->userHasRole($journalId, $userId, ROLE_ID_MANAGER)) {
			return true;
		}

		// Check authorized context roles if available
		$contextRoles = $this->getAuthorizedContextObject(ASSOC_TYPE_USER_ROLES);
		if (!empty($contextRoles)) {
			foreach ((array)$contextRoles as $role) {
				$roleId = is_object($role) ? $role->getRoleId() : (int)$role;
				if (in_array($roleId, $adminRoles)) return true;
			}
		}

		// Check user groups for current context
		$userGroupDao = DAORegistry::getDAO('UserGroupDAO');
		$userGroups = $userGroupDao->getByUserId($userId, $journalId);
		if ($userGroups) {
			while ($userGroup = $userGroups->next()) {
				if (in_array($userGroup->getRoleId(), $adminRoles)) {
					return true;
				}
			}
		}

		return false;
	}

	/**
	 * Get default editorial board structure if none exists in settings.
	 * @return array
	 */
	function getDefaultEditorialBoardData() {
		return array(
			'header' => array(
				'effectivityDate' => 'Effectivity Date: 2025',
				'journalMeta' => 'Central Bicol State University of Agriculture<br>Multidisciplinary Research and Extension Journal (MREJ-CBSUA)',
				'officeEmail' => 'mrej.cbsua@cbsua.edu.ph'
			),
			'leadership' => array(
				array(
					'id' => 'lead_1',
					'role' => 'Editor-in-Chief / Managing Editor',
					'name' => 'Dr. Ramona Isabel S. Ramirez',
					'title' => 'Managing Editor • MREJ-CBSUA',
					'institution' => "Central Bicol State University of Agriculture\nResearch and Innovation Journal"
				),
				array(
					'id' => 'lead_2',
					'role' => 'Journal Adviser',
					'name' => 'Alberto N. Naperi, DPA',
					'title' => 'University President',
					'institution' => "Central Bicol State University of Agriculture\nSan Jose, Pili, Camarines Sur, Philippines"
				)
			),
			'externalReviewers' => array(
				array('id' => 'ext_1', 'name' => 'Dr. Jonathan P. Aguilar', 'institution' => 'Kansas State University', 'country' => 'United States of America'),
				array('id' => 'ext_2', 'name' => 'Dr. Ernie C. Avila', 'institution' => 'Polytechnic University of the Philippines', 'country' => 'Philippines'),
				array('id' => 'ext_3', 'name' => 'Dr. Leonardo M. Florece', 'institution' => 'University of the Philippines Los Baños', 'country' => 'Philippines'),
				array('id' => 'ext_4', 'name' => 'Dr. Remil Galay', 'institution' => 'University of the Philippines Los Baños', 'country' => 'Philippines'),
				array('id' => 'ext_5', 'name' => 'Dr. Rafael D. Guerrero III', 'institution' => 'National Academy of Science and Technology', 'country' => 'Philippines'),
				array('id' => 'ext_6', 'name' => 'Dr. Julian F. Gonsalves', 'institution' => 'International Institute of Rural Reconstruction', 'country' => 'Philippines'),
				array('id' => 'ext_7', 'name' => 'Dr. Honeylet J. Nicolas', 'institution' => 'Bulacan Agricultural State College', 'country' => 'Philippines'),
				array('id' => 'ext_8', 'name' => 'Dr. Jupeth T. Pentang', 'institution' => 'Western Philippines University', 'country' => 'Philippines'),
				array('id' => 'ext_9', 'name' => 'Dr. Lynlei L. Pintor', 'institution' => 'Ecosystems Research and Development Bureau', 'country' => 'Philippines'),
				array('id' => 'ext_10', 'name' => 'Dr. Maria Ana T. Quimbo', 'institution' => 'University of the Philippines Los Baños', 'country' => 'Philippines'),
				array('id' => 'ext_11', 'name' => 'Dr. Roberto F. Rañola, Jr.', 'institution' => 'University of the Philippines Los Baños', 'country' => 'Philippines'),
				array('id' => 'ext_12', 'name' => 'Dr. Amy Lizbeth J. Rico', 'institution' => 'Tarlac College of Agriculture', 'country' => 'Philippines'),
				array('id' => 'ext_13', 'name' => 'Dr. Siti Aekbal Salleh Sr.', 'institution' => 'Universiti Teknologi Mara', 'country' => 'Malaysia'),
				array('id' => 'ext_14', 'name' => 'Engr. Dr. Harold Jan R. Terano', 'institution' => 'Camarines Sur Polytechnic Colleges', 'country' => 'Philippines'),
				array('id' => 'ext_15', 'name' => 'Dr. Arvin L. Valderrama', 'institution' => 'University of Tsukuba', 'country' => 'Japan')
			),
			'internalReviewers' => array(
				array('id' => 'int_1', 'name' => 'Dr. Marilyn Balderas', 'institution' => 'Central Bicol State University of Agriculture', 'country' => 'Philippines'),
				array('id' => 'int_2', 'name' => 'Prof. Arce D. Bellere', 'institution' => 'Central Bicol State University of Agriculture', 'country' => 'Philippines'),
				array('id' => 'int_3', 'name' => 'Prof. Ma. Cresilda M. Caning', 'institution' => 'Central Bicol State University of Agriculture', 'country' => 'Philippines'),
				array('id' => 'int_4', 'name' => 'Dr. Vladimir R. Foronda', 'institution' => 'Central Bicol State University of Agriculture', 'country' => 'Philippines'),
				array('id' => 'int_5', 'name' => 'Dr. Hanilyn A. Hidalgo', 'institution' => 'Central Bicol State University of Agriculture', 'country' => 'Philippines'),
				array('id' => 'int_6', 'name' => 'Prof. Ma. Teresa B. Lirag', 'institution' => 'Central Bicol State University of Agriculture', 'country' => 'Philippines'),
				array('id' => 'int_7', 'name' => 'Engr. Ian Carlo M. Lositaño', 'institution' => 'Central Bicol State University of Agriculture', 'country' => 'Philippines'),
				array('id' => 'int_8', 'name' => 'Dr. Ilene S. Basitan-Mirabeles', 'institution' => 'Central Bicol State University of Agriculture', 'country' => 'Philippines'),
				array('id' => 'int_9', 'name' => 'Dr. Vergel P. Miraña', 'institution' => 'Central Bicol State University of Agriculture', 'country' => 'Philippines'),
				array('id' => 'int_10', 'name' => 'Dr. Amelia R. Nicolas', 'institution' => 'Central Bicol State University of Agriculture', 'country' => 'Philippines'),
				array('id' => 'int_11', 'name' => 'Dr. Dariel A. Palmiano', 'institution' => 'Central Bicol State University of Agriculture', 'country' => 'Philippines')
			),
			'supportStaff' => array(
				array('id' => 'stf_1', 'name' => 'Mark Jaypee C. Gonzales', 'role' => 'DVM', 'initials' => 'MG'),
				array('id' => 'stf_2', 'name' => 'Glenn E. Redicilla', 'role' => 'Support Staff', 'initials' => 'GR'),
				array('id' => 'stf_3', 'name' => 'Alvir E. Bausa', 'role' => 'Support Staff', 'initials' => 'AB'),
				array('id' => 'stf_4', 'name' => 'Sherilyn R. Petil', 'role' => 'Support Staff', 'initials' => 'SP')
			)
		);
	}

	/**
	 * Read editorialBoardData directly from journal_settings table.
	 * We bypass $journal->getData() because SchemaDAO only loads
	 * properties defined in the journal JSON schema, silently ignoring
	 * custom settings like editorialBoardData.
	 *
	 * @param $journalId int
	 * @return array|null
	 */
	function _getEditorialBoardDataDirect($journalId) {
		$journalDao = DAORegistry::getDAO('JournalDAO');
		$result = $journalDao->retrieve(
			'SELECT setting_value FROM journal_settings WHERE journal_id = ? AND setting_name = ? AND locale = ?',
			array((int)$journalId, 'editorialBoardData', '')
		);
		$row = $result->current();
		if ($row) {
			$row = (array)$row;
			$value = isset($row['setting_value']) ? $row['setting_value'] : null;
			if ($value) {
				$decoded = json_decode($value, true);
				if (is_array($decoded)) return $decoded;
			}
		}
		return null;
	}

	/**
	 * Write editorialBoardData directly to journal_settings table.
	 * We bypass $journal->updateSetting() because in OJS 3.3+ it routes
	 * through Services::get('context')->edit() which uses SchemaDAO and
	 * silently drops properties not in the journal JSON schema.
	 *
	 * @param $journalId int
	 * @param $data array
	 * @return boolean
	 */
	function _setEditorialBoardDataDirect($journalId, $data) {
		$journalDao = DAORegistry::getDAO('JournalDAO');
		$encoded = json_encode($data);
		if ($encoded === false) return false;

		// Use REPLACE INTO (via DAO replace) to upsert the setting row
		$journalDao->replace(
			'journal_settings',
			array(
				'journal_id' => (int)$journalId,
				'locale' => '',
				'setting_name' => 'editorialBoardData',
				'setting_value' => $encoded,
			),
			array('journal_id', 'locale', 'setting_name')
		);
		return true;
	}

	/**
	 * Display editorialTeam page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function editorialTeam($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$journal = $request->getJournal();

		$editorialBoardData = null;
		if ($journal) {
			$editorialBoardData = $this->_getEditorialBoardDataDirect($journal->getId());
		}

		if (empty($editorialBoardData) || !is_array($editorialBoardData)) {
			$editorialBoardData = $this->getDefaultEditorialBoardData();
		}

		$isAdmin = $this->isUserAdmin($request);

		$templateMgr->assign(array(
			'editorialBoardData' => $editorialBoardData,
			'isAdmin' => $isAdmin
		));

		$templateMgr->display('frontend/pages/editorialTeam.tpl');
	}

	/**
	 * Save updated editorial board data via AJAX / Form submit.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function saveEditorialTeam($args, $request) {
		header('Content-Type: application/json; charset=utf-8');

		if (!$this->isUserAdmin($request)) {
			http_response_code(403);
			echo json_encode(array(
				'status' => 'error',
				'message' => 'Unauthorized access: Admin or Journal Manager privileges required.'
			));
			exit;
		}

		$journal = $request->getJournal();
		if (!$journal) {
			http_response_code(400);
			echo json_encode(array(
				'status' => 'error',
				'message' => 'No active journal context found.'
			));
			exit;
		}

		// Try reading POST data from multiple possible sources
		$data = null;

		// Source 1: FormData with editorialData field
		if (isset($_POST['editorialData'])) {
			$data = json_decode($_POST['editorialData'], true);
		}

		// Source 2: Raw JSON body
		if (!$data) {
			$rawInput = file_get_contents('php://input');
			if ($rawInput) {
				$data = json_decode($rawInput, true);
			}
		}

		// Source 3: FormData with data field
		if (!$data && isset($_POST['data'])) {
			$data = is_array($_POST['data']) ? $_POST['data'] : json_decode($_POST['data'], true);
		}

		if (!$data || !is_array($data)) {
			http_response_code(400);
			echo json_encode(array(
				'status' => 'error',
				'message' => 'Invalid data payload received. No editorial data could be parsed from the request.'
			));
			exit;
		}

		$success = $this->_setEditorialBoardDataDirect($journal->getId(), $data);

		if ($success) {
			echo json_encode(array(
				'status' => 'success',
				'message' => 'Editorial Board successfully updated and saved to database!'
			));
		} else {
			http_response_code(500);
			echo json_encode(array(
				'status' => 'error',
				'message' => 'Failed to encode or save data to database.'
			));
		}
		exit;
	}

	/**
	 * Display subscriptions page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function subscriptions($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$journal = $request->getJournal();
		$subscriptionTypeDao =& DAORegistry::getDAO('SubscriptionTypeDAO');

		if ($journal) {
			$paymentManager = \Application::getPaymentManager($journal);
			if (!($journal->getData('paymentsEnabled') && $paymentManager->isConfigured())) {
				$request->redirect(null, 'index');
			}
		}

		$templateMgr->assign(array(
			'subscriptionAdditionalInformation' => $journal->getLocalizedData('subscriptionAdditionalInformation'),
			'subscriptionMailingAddress' => $journal->getData('subscriptionMailingAddress'),
			'subscriptionName' => $journal->getData('subscriptionName'),
			'subscriptionPhone' => $journal->getData('subscriptionPhone'),
			'subscriptionEmail' => $journal->getData('subscriptionEmail'),
			'individualSubscriptionTypes' => $subscriptionTypeDao->getByInstitutional($journal->getId(), false, false)->toArray(),
			'institutionalSubscriptionTypes' => $subscriptionTypeDao->getByInstitutional($journal->getId(), true, false)->toArray(),
		));
		$templateMgr->display('frontend/pages/subscriptions.tpl');
	}

	/**
	 * Display Peer Review Policy page.
	 * @param $args array
	 * @param $request PKPRequest
	 */
	function peerReview($args, $request) {
		$templateMgr = TemplateManager::getManager($request);
		$this->setupTemplate($request);
		$templateMgr->display('frontend/pages/peerReview.tpl');
	}
}


