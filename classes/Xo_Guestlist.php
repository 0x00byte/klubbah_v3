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

		private $guestlists;
		private $event;
		private $app;

		function __construct($app) {
			$this->app = $app;
			$this->guestlistGetSignups();
		}

		private function guestlistGetSignups() {
			$this->guestlists = $this->app->getData("SELECT * FROM guestlists WHERE fk_user_id='2'");
		}

		public function guestlistCount() {
			return count($this->guestlists);
		}

		public function guestlist_signup($event, $fullname, $guests, $guestemail) {}

		public function guestlistList() {
			foreach ($this->guestlists as $guestlist) {
				$event_id = $guestlist['fk_event_id'];
				$this->event = $this->app->getData("SELECT * FROM events WHERE event_id='$event_id' LIMIT 1");
				echo "<h2>" . $this->event[0]['event_name'] . "</h2>";
			}
			$this->guestlistCode();
		}

		public function guestlistCode() {
			echo '<br>' . $this->app->root_generate_code(20);
		}

	}

?>