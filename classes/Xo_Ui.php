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

	// CREATES NEW USER INSTANCE
	class Xo_Ui extends Xo_Upload {

		public $scripts = array();

		public function uiContentDiv() {

		}

		public function uiTemplateManager($template, $app) {
			if (isset($template)) {
				include_once 'templates/' . $template . '.php';
			} else {
				echo "Page not found. Please try again.";
			}
		}

		public function uiIncludeScripts() {
			foreach ($this->scripts as $script) {
				echo '<script type="text/javascript" src="' . JAVASCRIPTS . $script . '"></script>';
			}
		}



	}

?>