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

	// CREATES NEW USER INSTANCE
	class Xo_Matchmaker extends Xo_Access {

		private $user_id;
		private $match_id;
		private $match_time;

		public function matchmaker_list() {
			$q = "SELECT * FROM users";
			$r = mysqli_query ($this->dbc, $q);

			if (mysqli_num_rows($r) > 0) {
				foreach($r as $user) {
					echo '<p>' . $user['first_name'] . '<br>';
					echo '<input type="hidden" id="user_id" value="' . $_SESSION['user_id'] . '">';
					echo '<input type="hidden" id="liked_user_id" value="' . $user['user_id'] . '">';
					echo '<button type="button" onclick="checkForMatch();" style="color: black; padding: 30px;">LIKE!</button>';
					echo '<button type="button" onclick="checkForMatch();" style="color: black; padding: 30px;">PASS!</button></p>';
				}
			} else {
				echo 'Something went wrong';
			}
		}
		public function matchmaker_check_for_match($fk_user_id, $liked_user_id) {
			$this->user_id = $fk_user_id;
			$this->match_id = $liked_user_id;
			$q = "INSERT INTO matchmaker (fk_user_id, liked_user_id, liked) VALUES ('$this->user_id', '$this->match_id', NOW())";
			$r = mysqli_query ($this->dbc, $q);

			if (mysqli_affected_rows($this->dbc) == 1) {
				echo '<h3>Your match has been saved</h3>';
			} else {
				echo '<p class="error">Your match was not created due to a system error. We apologize for any inconvenience.</p>';
			}
		}
	}

?>