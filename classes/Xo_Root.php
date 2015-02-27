<?php

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
				$this->$variable_string = $this->db->escapeString($variable);
			} else {
				$this->$variable_string = FALSE;
				$this->rootValidateError($error);
			}
		}
	}

?>