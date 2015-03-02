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
		public function accessValidateLogin($email, $pass) {

			//$this->email = $this->rootValidate($email, 'email', 'your email address');
			//$this->pass = $this->rootValidate($pass, 'pass', 'your password');

			$this->email = $email;
			$this->pass = sha1($pass);

			if ($this->email && $this->pass) {

				//$q = "SELECT user_id, first_name, last_name, user_level, is_rep, is_vip, rep_points, username FROM users WHERE (email='$this->email' AND pass=SHA1('$this->pass')) AND active IS NULL";

				$q = "SELECT users.user_id, users.first_name, users.last_name, users.pass, users.user_level, users.is_rep, users.is_vip, users.rep_points, users.username, profiles.about, profiles.bio, profiles.location, profiles.post_count, profiles.following_count, profiles.follower_count, profiles.telephone, profiles.website, profiles.skills FROM profiles INNER JOIN users ON profiles.fk_user_id=users.user_id WHERE users.email='$this->email' AND users.pass='$this->pass'";

				$r = mysqli_query ($this->dbc, $q);

				// DB RECORD FOUND
				if (@mysqli_num_rows($r) == 1) {

					$_SESSION = mysqli_fetch_array ($r, MYSQLI_ASSOC);
					$_SESSION['is_logged_in'] = true;
					$_SESSION['email'] = $this->email;
					mysqli_free_result($r);
					mysqli_close($this->dbc);
					ob_end_clean();
					$url = BASE_URL . 'index.php';
					header("Location: $url");
					exit();

				} else {
					// NO DB RECORD FOUND
					echo '<p class="error">Please check the information you entered.</p>';
				}

			} else {
				// SOMETHING WENT WRONG
				echo '<p class="error">Please try again.</p>';
			}
		}

		public function accessIsAdmin() {
			if ($_SESSION['user_level'] == 1) {
				return true;
			} else {
				return false;
			}
		}

	}

?>