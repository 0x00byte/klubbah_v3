<?php

	// INITIALIZES CLASSES AND DBC VARS
	abstract class Xo_Init extends Xo_Security {
		private $db_user;
		private $db_pass;
		private $db_host;
		public $db_name;
		public $dbc;

		public function initCrud() {
			include('Xo_Crud.php');
		}

	}

?>