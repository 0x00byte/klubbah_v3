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

	// UPLOAD CLASS
	class Xo_News extends Xo_Access {

		public $recent_news;

		function __construct($db) {
			$this->db = $db;
		}

		public function listing() {
			$this->recent_news = $this->getData("SELECT * FROM news ORDER BY posted DESC");
			foreach($this->recent_news as $news) {
			?>
				<div class="slide">
					<img src="<?php echo NEWS_IMAGES . $news['featured_image']; ?>" width="326" height="183" alt="image description">
					<div class="text">
						<h2><?php echo $news['news_headline']; ?></h2>
						<time class="date" datetime="2012-04-07"><?php echo $news['posted']; ?></time>
					</div>
				</div>
			<?php
			}
		}

	}

?>