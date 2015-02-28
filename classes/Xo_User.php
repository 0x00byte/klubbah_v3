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
	class Xo_User extends Xo_Access {

		public function userDisplayName() {
			return $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
		}

		public function userFirstName() {
			return $_SESSION['first_name'];
		}

		public function userAbout() {
			return "Lead developer, tech nut and nature lover. In a great relationship with an amazing woman.";
		}

		public function userPostCount() {
			return 2600;
		}

		public function userFollowingCount() {
			return 0;
		}

		public function userFollowerCount() {
			return 1000;
		}

		private function user_check_logged_in() {}
		public function user_check_login_status() {}
		public function user_set_vars() {}
		public function user_username() {}
		public function user_name() {
			echo "Matt Carr";
		}
	}

?>