<?php
/*************************************************************************
 *
 * EVERETI CONFIDENTIAL
 * __________________
 *
 *  [2013] - [2015] Evereti Ltd
 *  All Rights Reserved.
 *
 * NOTICE:  All information contained herein is, and remains
 * the property of Evereti Ltd and its suppliers, if any.
 * The intellectual and technical concepts contained
 * herein are proprietary to Evereti Ltd
 * and its suppliers and may be covered by U.S, European and Foreign Patents,
 * patents in process, and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from Evereti Ltd.
 */

	// ALL BASE FUNCTIONS AND VARIABLES
	abstract class Xo_Root {

		// memory_get_usage() - might be useful to compare how much memory a class uses

		public function root_generate_code($length) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}

		public function root_notify_sysadmin($sysadmin, $function, $description) {
			mail($sysadmin, $function . ' is broken', 'Please check ' . $function . ' function, something went wrong. *** ' . $description . ' ***');
		}

		public function root_trimmed() {
			return $trimmed = array_map('trim', $_POST);
		}

		public function rootValidateError($missing_info) {
			echo '<p class="error">You forgot to enter ' . $missing_info . '!</p>';
		}

		public function rootValidate($variable, $variable_string, $error) {
			if (!empty($variable)) {
				return $this->db->escapeString($variable);
			} else {
				$this->$variable_string = FALSE;
				$this->rootValidateError($error);
			}
		}

	}

?>