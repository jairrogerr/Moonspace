<?php

/**
 * ajax -> admin -> groups
 * 
 * @package Moonspace
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// check admin|moderator permission
if (!$user->_is_admin && !$user->_is_moderator) {
	modal("MESSAGE", __("System Message"), __("You don't have the right permission to access this"));
}

// check demo account
if ($user->_data['user_demo']) {
	modal("ERROR", __("Demo Restriction"), __("You can't do this with demo account"));
}

// handle groups
try {

	switch ($_GET['do']) {
		case 'edit_group':
			/* valid inputs */
			if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			/* update */
			$user->edit_group($_GET['id'], $_POST);
			/* return */
			return_json(array('success' => true, 'message' => __("Group info have been updated")));
			break;

		case 'add_category':
			/* valid inputs */
			if (is_empty($_POST['category_name'])) {
				throw new Exception(__("Please enter a valid category name"));
			}
			if (!is_empty($_POST['category_order']) && !is_numeric($_POST['category_order'])) {
				throw new Exception(__("Please enter a valid category order"));
			}
			/* insert */
			$db->query(sprintf("INSERT INTO groups_categories (category_name, category_description, category_parent_id, category_order) VALUES (%s, %s, %s, %s)", secure($_POST['category_name']),  secure($_POST['category_description']), secure($_POST['category_parent_id'], 'int'), secure($_POST['category_order'], 'int'))) or _error("SQL_ERROR_THROWEN");
			/* return */
			return_json(array('callback' => 'window.location = "' . $system['system_url'] . '/' . $control_panel['url'] . '/groups/categories";'));
			break;

		case 'edit_category':
			/* valid inputs */
			if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
				_error(400);
			}
			if (is_empty($_POST['category_name'])) {
				throw new Exception(__("Please enter a valid category name"));
			}
			if (!is_empty($_POST['category_order']) && !is_numeric($_POST['category_order'])) {
				throw new Exception(__("Please enter a valid category order"));
			}
			/* update */
			$db->query(sprintf("UPDATE groups_categories SET category_name = %s, category_description = %s, category_parent_id = %s, category_order = %s WHERE category_id = %s", secure($_POST['category_name']), secure($_POST['category_description']), secure($_POST['category_parent_id'], 'int'), secure($_POST['category_order'], 'int'), secure($_GET['id'], 'int'))) or _error("SQL_ERROR_THROWEN");
			/* return */
			return_json(array('success' => true, 'message' => __("Category info have been updated")));
			break;

		default:
			_error(400);
			break;
	}
} catch (Exception $e) {
	return_json(array('error' => true, 'message' => $e->getMessage()));
}
