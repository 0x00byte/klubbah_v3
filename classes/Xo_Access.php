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

		// INITIALIZES LANGUAGE CLASS AND VARIABLES
	abstract class Xo_Access extends Xo_Ui {


		public $email;
		public $pass;

		// $_POST['email'] & $_POST['pass']
		public function access_validate_login($email, $pass) {

			//$this->email = $this->rootValidate($email, 'email', 'your email address');
			//$this->pass = $this->rootValidate($pass, 'pass', 'your password');

			$this->email = $_POST['email'];
			$this->pass = $_POST['pass'];

			if ($this->email && $this->pass) {

				$q = "SELECT user_id, first_name, last_name, user_level, is_rep, is_vip, rep_points, username FROM users WHERE (email='$this->email' AND pass=SHA1('$this->pass')) AND active IS NULL";
				$r = mysqli_query ($this->dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($this->dbc));

				if (@mysqli_num_rows($r) == 1) { // A match was made.

					// Register the values:
					$_SESSION = mysqli_fetch_array ($r, MYSQLI_ASSOC);
					$_SESSION['logged_in'] = 2600;
					$_SESSION['is_logged_in'] = true;
					mysqli_free_result($r);
					mysqli_close($this->dbc);

					if ($_SESSION['user_level'] == 1) {
						//$url = BASE_URL . 'admin.php';
						$url = BASE_URL . 'index.php';
					} else {
						$url = BASE_URL . 'index.php';
					}

					ob_end_clean(); // Delete the buffer.
					header("Location: $url");
					exit(); // Quit the script.

				} else { // No match was made.
					echo '<p class="error">Either the email address and password entered do not match those on file or you have not yet activated your account.</p>';
				}

			} else { // If everything wasn't OK.
				echo '<p class="error">Please try again.</p>';
			}
		}

		public function access_not_admin() {
			$url = BASE_URL . 'index.php';
			ob_end_clean();
			header("Location: $url");
			exit();
		}

	}

?>