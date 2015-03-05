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
		private $url = BASE_URL . 'index.php';

		// $_POST['email'] & $_POST['pass']
		public function accessValidateLogin($email, $pass, $remember_me) {

			//$this->email = $this->rootValidate($email, 'email', 'your email address');
			//$this->pass = $this->rootValidate($pass, 'pass', 'your password');

			$this->email = $email;
			$this->pass = sha1($pass);

			if ($this->email && $this->pass != null) {

				$q = "SELECT users.user_id, users.first_name, users.last_name, users.pass, users.user_level, users.is_rep, users.is_vip, users.rep_points, users.username, profiles.about, profiles.bio, profiles.location, profiles.post_count, profiles.following_count, profiles.follower_count, profiles.telephone, profiles.website, profiles.skills FROM profiles INNER JOIN users ON profiles.fk_user_id=users.user_id WHERE users.email='$this->email' OR users.username='$this->email' AND users.pass='$this->pass'";

				$r = mysqli_query ($this->dbc, $q);

				// DB RECORD FOUND
				if (@mysqli_num_rows($r) == 1) {

					$_SESSION = mysqli_fetch_array ($r, MYSQLI_ASSOC);
					$_SESSION['is_logged_in'] = true;
					$_SESSION['email'] = $this->email;
					$_SESSION['error_msg'] = null;
					if (isset($remember_me)) {
						$_SESSION['remember_me'] = true;
					}
					mysqli_free_result($r);
					mysqli_close($this->dbc);
					ob_end_clean();
					header("Location: $this->url");
					exit();

				} else {
					// NO DB RECORD FOUND
					ob_end_clean();
					$_SESSION['error_msg'] = "Please check the information you entered.";
					header("Location: $this->url");
					exit();
				}

			} else {
				// SOMETHING WENT WRONG
				ob_end_clean();
				$_SESSION['error_msg'] = "Please enter your username and password";
				header("Location: $this->url");
				exit();
			}
		}

		public function accessIsAdmin() {
			if ($_SESSION['user_level'] == 1) {
				return true;
			} else {
				return false;
			}
		}

		public function accessLevel() {
			if ($_SESSION['user_level'] === 1) {
				return "admin";
			} else {
				return false;
			}
		}

	}

?>