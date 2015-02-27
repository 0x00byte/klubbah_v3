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

	// INITIALIZES LANGUAGE CLASS AND VARIABLES
	abstract class Xo_Language extends Xo_Logger {

		public $words;
		public $languages = array();

		public function language_get_words() {

			// For testing purposes:
			$_SESSION['user_tz'] = 'America/New_York';

			if ( isset($_GET['lid']) && filter_var($_GET['lid'], FILTER_VALIDATE_INT, array('min_range' => 1))){
				$_SESSION['lid'] = $_GET['lid'];
			} elseif (!isset($_SESSION['lid'])) {
				// Default.
				$_SESSION['lid'] = 21;
			}


			$q = "SELECT * FROM words WHERE lang_id = {$_SESSION['lid']}";
			$r = mysqli_query($this->dbc, $q);
			if (mysqli_num_rows($r) == 0) {
				// Invalid language ID!
				// Use the default language:
				$_SESSION['lid'] = 1; // Default.
				$q = "SELECT * FROM words WHERE lang_id = {$_SESSION['lid']}";
				$r = mysqli_query($this->dbc, $q);
			}

			$words = mysqli_fetch_array($r, MYSQLI_ASSOC);
			mysqli_free_result($r);
			$this->words = $words;
			return $this->words;
		}

		public function language_select() {

			$this->languages = $this->getData("SELECT lang_id, lang FROM languages ORDER BY lang_eng ASC");
			$output = '<form class="language-selection" action="index.php" method="get">
			<select name="lid"><option value="0">' . $_SESSION['words']['language'] . '</option>';
			foreach ($this->languages as $language) {
				$output .= "<option name=\"lid\" value=\"$language[lang_id]\">$language[lang]</option>\n";
			}
			$output .= '</select><input name="submit" type="submit" value="' . $_SESSION['words']['submit'] . '" /></form>';
			echo $output;

		}
	}

?>