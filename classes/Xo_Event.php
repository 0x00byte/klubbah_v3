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
	class Xo_Event extends Xo_Gallery {

		function __construct($db) {
			$this->db = $db;
		}

		private $event_image_dir = '../images/event-images/';
		public $current_events = array();

		public function listing() {
			$this->current_events = $this->getData("SELECT * FROM events ORDER BY created DESC");
			foreach($this->current_events as $event) {
				?>
				<div class="slide">
					<img src="<?php echo $this->event_image_dir . $event['image_name']; ?>" width="326" height="183" alt="image description">
					<div class="text">
						<h2><?php echo $event['event_name']; ?></h2>
						<time class="date" datetime="2012-04-07"><?php echo $event['event_date']; ?></time>
						<?php $this->eventPostToFacebook($event['event_name']); ?>
					</div>
				</div>
				<?php
			}
		}

		public function event_radio_checklist() {
			foreach ($this->current_events as $event ) {
				?>
				<input type="radio" name="event" value="<?php echo $event['event_name'] ?>"><?php echo $event['event_name'] ?><br>
				<?
			}
		}

		public function event_form() {
			include ( '../html/templates/event/event-form.php');
		}

		public function eventPostToFacebook($event) {
			echo "<button type=\"button\" onclick=\"postToFacebook();\" style=\"color: black; padding: 30px;\">POST TO FACEBOOK ABOUT " . $event . " EARN 30 REP POINTS!</button>";
		}

	}

?>