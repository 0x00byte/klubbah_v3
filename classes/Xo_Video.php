<?php

	// UPLOAD CLASS
	class Xo_Video extends Xo_Upload {

		public $video_list;

		function __construct($db) {
			$this->db = $db;
		}

		public function listing() {
			$this->video_list = $this->getData("SELECT * FROM videos ORDER BY added ASC");
			foreach($this->video_list as $video) {
				?>
				<!-- slide -->
					<div class="slide">
						<iframe src="//player.vimeo.com/video/<?php echo $video['vimeo_id']; ?>" width="326" height="183" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						<div class="text">
							<h2><?php echo $video['video_title']; ?></h2>
							<time class="date" datetime="2013-01-01"><?php echo $video['added']; ?></time>
						</div>
					</div>
				<?php
			}
		}

	}

?>