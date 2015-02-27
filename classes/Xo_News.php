<?php

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