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

	// CREATES NEW APP INSTANCE
	class Xo_Message extends Xo_Event {

		private $messages = array();
		private $sender_name;

		private function messagesGet() {
			$this->messages = $this->getData("SELECT * FROM messages WHERE recipient_id='2'");
		}

		public function messageCount() {
			$this->messagesGet();
			return count($this->messages);
		}

		public function messageInbox() {
			foreach($this->messages as $message) {
				$sender_id = $message['fk_user_id'];
				$this->sender_name = $this->getData("SELECT first_name FROM users WHERE user_id='$sender_id'");
				foreach ($this->sender_name as $sender) {
					$sender = $sender['first_name'];
				}
				?>

					<li> <a href="index.php?page=readmail" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from"><?php echo $sender; ?></span> <span class="time">just now</span> </span> <span class="message"><br><?php echo $message['message_subject']; ?></span> </a> </li>

				<?php
			}
		}
	}

?>
