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
		private $date2;
		private $url = BASE_URL . 'index.php';

		// FUNCTION TO REDIRECT USER TO INDEX PAGE
		private function accessRedirect() {
			header("Location: $this->url");
			exit();
		}

		private function accessIncrementFailedLogin() {
			$_SESSION['failed_login']++;
		}

		private function accessResetFailedLogin() {
			if ($_SESSION['failed_login_wait_time'] <= 1) {
			 	$_SESSION['failed_login'] = 0;
		 	}
		}

		private function accessSetError($error) {
			$_SESSION['error_msg'] = $error;
		}

		private function accessLogin() {
			if ($this->email && $this->pass != null && $_SESSION['failed_login'] <= 10) {

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
					$this->accessRedirect();

				} else {
					// NO DB RECORD FOUND
					ob_end_clean();

					if (!isset($_SESSION['failed_login_time'])) {
						$_SESSION['failed_login_time'] = date('H:i:s');
					} else {
						$date1 = strtotime($_SESSION['failed_login_time']);
		 				$this->date2 = strtotime(date('H:i:s'));
		 				$diff = $date1 - $this->date2;
		 				$difference = $diff / 60;
		 				$_SESSION['failed_login_wait_time'] = 11 - abs(intval($difference));
		 				$this->accessResetFailedLogin();
					}

					$this->accessIncrementFailedLogin();

					if ($_SESSION['failed_login'] <= 10) {
						$this->accessSetError("Please check the information you entered.");
					} else {
						$this->accessSetError("Too many failed attempts, please wait " . $_SESSION['failed_login_wait_time'] . " minutes.");
					}
					$this->accessRedirect();
				}

			} else {
				// SOMETHING WENT WRONG // COUNTDOWN FUNCTION NEEDS WORK!!!!!!!
				ob_end_clean();
				if ($_SESSION['failed_login'] <= 10) {
					$this->accessSetError("Please enter your username and password");
				} else {
		 			$diff = strtotime($_SESSION['failed_login_time']) - $this->date2;
		 			$difference = $diff / 60;
		 			$_SESSION['failed_login_wait_time'] = abs(intval($difference));
		 			$this->accessResetFailedLogin();
		 			$this->accessSetError("Too many failed attempts, please wait " . $_SESSION['failed_login_wait_time'] . " minutes.");
				}
				$this->accessRedirect();
			}
		}

		public function accessValidateLogin($email, $pass, $remember_me) {

			// TRIM WHITESPACE
			$this->securityTrim($email);
			$this->securityTrim($pass);

			// SET VARS
			$this->email = $this->securityFilterEmail($email);

			// WILL sha1() DO FOR FILTERING THE USER INPUT FOR PASSWORD?
			$this->pass = sha1($pass);

			// ATTEMPT LOGIN
			$this->accessLogin();

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