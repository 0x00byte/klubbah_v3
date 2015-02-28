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
	class Xo_User extends Xo_Profile {

		public function userDisplayName() {
			return $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
		}

		public function userFirstName() {
			return $_SESSION['first_name'];
		}

		public function userEmail() {
			return $_SESSION['email'];
		}

		public function userUsername() {
			return $_SESSION['username'];
		}

		public function userBio() {
			return $_SESSION['bio'];
		}

		public function userAbout() {
			return $_SESSION['about'];
		}

		public function userLocation() {
			return $_SESSION['location'];
		}

		public function userPostCount() {
			return $_SESSION['post_count'];
		}

		public function userFollowingCount() {
			return $_SESSION['following_count'];
		}

		public function userFollowerCount() {
			return $_SESSION['follower_count'];
		}

		public function userTelephone() {
			return $_SESSION['telephone'];
		}

		public function userWebsite() {
			return $_SESSION['website'];
		}

		public function userSkills() {
			$skills = $_SESSION['skills'];
			$skills_array = explode(':', $skills);
			foreach ($skills_array as $skill) {
				echo '<p>' . $skill . '</p>';
			}
		}

	}

?>