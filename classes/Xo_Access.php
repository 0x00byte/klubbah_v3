<?php

		// INITIALIZES LANGUAGE CLASS AND VARIABLES
	abstract class Xo_Access extends Xo_Ui {

		public $email;
		public $pass;

		// $_POST['email'] & $_POST['pass']
		public function access_validate_login($email, $pass) {

			$this->rootValidate($email, 'email', 'your email address');
			$this->rootValidate($pass, 'pass', 'your password');

			if ($this->email && $this->pass) {

				$q = "SELECT user_id, first_name, last_name, user_level, is_rep, is_vip, rep_points, username FROM users WHERE (email='$this->email' AND pass=SHA1('$this->pass')) AND active IS NULL";
				$r = mysqli_query ($this->dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($this->dbc));

				if (@mysqli_num_rows($r) == 1) { // A match was made.

					// Register the values:
					$_SESSION = mysqli_fetch_array ($r, MYSQLI_ASSOC);
					$_SESSION['logged_in'] = 2600;
					mysqli_free_result($r);
					mysqli_close($this->dbc);

					if ($_SESSION['user_level'] == 1) {
						$url = BASE_URL . 'admin.php';
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