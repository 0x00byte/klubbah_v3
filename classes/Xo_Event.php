<?php

	// CREATES NEW USER INSTANCE
	class Xo_Event extends Xo_Access {

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