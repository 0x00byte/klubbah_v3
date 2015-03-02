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

	// STATUS CLASS
	class Xo_Status extends Xo_Access {

		public $statuses = array();

		private function getStatuses() {
			$this->db->sql("SELECT * FROM statuses WHERE fk_user_id='{$_SESSION['user_id']}' ORDER BY posted DESC");
			$this->statuses = $this->db->getResult();
		}

		public function statusGetFeed() {
			$this->getStatuses();
			$counter = 0;
			foreach($this->statuses as $status) {
				?>

				<div class="timeline-item <?php if ($counter % 2 == 0) { echo 'alt'; } ?>">
                      <div class="timeline-desk">
                          <div class="panel">
                              <div class="panel-body">
                                  <span class="arrow-alt"></span>

                                  <span class="timeline-icon red">
                                      <i class="fa fa-check-square-o"></i>                                  </span>
                                  <span class="timeline-date"><?php echo $status['posted']; ?></span>
                                  <h1 class="red"><?php echo $status['posted']; ?></h1>
                                  <p><?php echo $status['status_text']; ?> </p>
                              </div>
                          </div>
                      </div>
                  </div>

				<?php
				$counter++;
			}
		}

		public function statusSave($status_text) {
			$this->db->connect();
			$status_data = $this->db->escapeString($status_text); // Escape any input before insert
			$user_id = $_SESSION['user_id'];
			$this->db->insert('statuses',array('fk_user_id'=>$user_id,'status_text'=>$status_data, 'posted' => date('Y-m-d H:i:s') ));  // Table name, column names and respective values
		}

	}

?>