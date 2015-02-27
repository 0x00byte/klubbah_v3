<?php

	// CREATES NEW USER INSTANCE
	class Xo_Ui extends Xo_Language {
		public function uiContentDiv() {

		}

		public function templateManager($template) {
			if (isset($template)) {
				include_once 'templates/' . $template . '.php';
			} else {
				echo "Page not found. Please try again.";
			}
		}

	}

?>