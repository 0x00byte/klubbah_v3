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