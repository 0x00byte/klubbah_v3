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
	class Xo_Guestlist extends Xo_Rep {

		public function guestlist_signup($event, $fullname, $guests, $guestemail) {}

		public function guestlistList() {

			echo "WORKS";
		}

		public function guestlist_form() {
			echo '<br>' . parent::root_generate_code(20);
		}

	}

?>