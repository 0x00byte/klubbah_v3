<?php

	// CREATES NEW APP INSTANCE
	class Xo_App extends Xo_Access {

		private $scripts = array();
		public $words;
		public $event;
		public $news;
		public $video;

		function __construct($scripts) {
			$this->initCrud();
			$this->db = new Xo_Crud();
			$this->scripts = $scripts;
			$this->data_connection();
			$this->app_set_session_vars();
			$this->words = $this->language_get_words();
			$this->event = new Xo_Event($this->db);
			$this->news = new Xo_News($this->db);
			$this->video = new Xo_Video($this->db);
		}

		public function app_include_scripts() {
			foreach ($this->scripts as $script) {
				echo '<script type="text/javascript" src="js/' . $script . '"></script>';
			}
		}

		public function app_set_session_vars(){
			$_SESSION['words'] = parent::language_get_words();
		}

	}

?>