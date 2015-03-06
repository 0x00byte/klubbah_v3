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


 // This class is the main class that is called to launch main application
 // Inherits from Xo_Root , Xo_Security, Xo_Init, Xo_Data, Xo_Logger, Xo_Language, Xo_Upload, Xo_Ui, Xo_Access, Xo_Status, Xo_Profile, Xo_User, Xo_Gallery, Xo_Event, Xo_Message

	// CREATES NEW APP INSTANCE
	class Xo_App extends Xo_Message {

		// Run all necessary start-up functions, set vars and init classes
		function __construct($scripts) {

			// INIT MYSQL CLASS
			$this->db = new Xo_Crud();

			// DEFINE AND INCLUDE APP JS
			$this->scripts = $scripts;

			// GET DB CONNECTION
			$this->dataConnection();

			// SET APP LANGUAGE
			$this->languageGetWords();

			// COUNT USER MESSAGES AND LOAD THEM
			$this->messageCount();
		}

	}

?>