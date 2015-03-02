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

		public function eventListing() {
			$this->current_events = $this->getData("SELECT * FROM events ORDER BY created DESC");
			$counter = 0;
			foreach($this->current_events as $event) {
				?>

				  <div class="timeline-item <?php if ($counter % 2 == 0) { echo 'alt'; } ?>">
                      <div class="timeline-desk">
                          <div class="panel">
                              <div class="panel-body">

				                    <div class="col-md-4">
					                    <img width="100%" src="<?php echo $this->event_image_dir . $event['image_name']; ?>" />
					                    <h4><strong><?php echo $event['event_name']; ?></strong></h4>

					                 </div>
				                    <div class="col-md-8">
				                      <div class="user-identity">

				                        <p><i class="fa fa-map-marker"></i> Riaxe Systems Pvt</p>
				                         <span class="arrow-alt"></span>

                                  <span class="timeline-icon red">
                                      <i class="fa fa-check-square-o"></i>                                  </span>
                                  <span class="timeline-date">09:25 am</span>
                                  <h1 class="red"><?php echo $event['event_date']; ?></h1>
                                  <p><?php echo $event['event_desc']; ?></p>
                                  <?php $this->eventPostToFacebook($event['event_name']); ?>
				                      </div>
				                      <br>
				                      <button class="btn btn-info pull-right btn-sm">GUESTLIST</button>
				                       <button class="btn btn-info pull-left btn-sm">BUY TICKETS</button>
				                    </div>
                              </div>
                          </div>
                      </div>
                  </div>


				<?php
			$counter++;
			}
		}

		public function eventRadioChecklist() {
			foreach ($this->current_events as $event ) {
				?>
				<input type="radio" name="event" value="<?php echo $event['event_name'] ?>"><?php echo $event['event_name'] ?><br>
				<?
			}
		}

		public function eventForm() {
			include ( '../html/templates/event/event-form.php');
		}

		public function eventPostToFacebook($event) {
			echo "<button type=\"button\" onclick=\"postToFacebook();\" style=\"color: black; padding: 30px;\">POST TO FACEBOOK ABOUT " . $event . " EARN 30 REP POINTS!</button>";
		}

	}

?>