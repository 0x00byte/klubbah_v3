<?php

	// CREATES NEW USER INSTANCE
	class Xo_Guestlist extends Xo_Rep {

		public function guestlist_signup($event, $fullname, $guests, $guestemail) {}

		public function guestlist_list($db) {

			$r = $this->db->sql("SELECT * FROM guestlists WHERE fk_user_id='{$_SESSION['user_id']}' ORDER BY guestlist_id DESC");

			if (mysqli_num_rows($r) > 0) {
				foreach($r as $guestlist_signup) {

					$q = "SELECT event_name, image_name FROM events WHERE event_id='{$guestlist_signup['fk_event_id']}'";
					$result = mysqli_query ($this->dbc, $q);

					$row = mysqli_fetch_row($result);
					mysqli_free_result($result);

					$event_name = $row[0];
					$image_name = $row[1];

					echo '<img class="guestlist-image" src="..images/event-images/' . $image_name . '">';
					echo '<p>SIGNED UP TO EVENT: ' . $event_name;
					echo ' with: ' . $guestlist_signup['guests'] . ' guests<br>';
					echo 'Guestlist invite code: ' . parent::root_generate_code(20) . '<br>';
					echo 'Use your invite code, and if 5 or more friends sign up, you get in FREE!</p>';

				}
			} else {
				echo 'You are not signed up to any guestlists!';
			}
		}

		public function guestlist_form() {
			echo '<br>' . parent::root_generate_code(20);
		}

	}

?>