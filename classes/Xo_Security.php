<?php

	// ALL SECURITY FUNCTIONS AND VARIABLES
	abstract class Xo_Security extends Xo_Root {
		public function security_clean_string($string) {
			$new_string = strip_tags($string);
			return $new_string;
		}
	}

?>