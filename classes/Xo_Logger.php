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

	// DEFINES CORE DATA FUNCTIONS
	abstract class Xo_Logger extends Xo_Data {

		public $session_id;
		public $php_self;
		public $request_method;
		public $request_time;
		public $query_string;
		public $remote_addr;
		public $remote_host;
		public $remote_port;
		public $fk_object_id;
		public $timestamp;

		public function loggerLogRequest($session_id, $php_self, $request_method, $request_time, $query_string, $remote_addr, $remote_host, $remote_port) {
			$this->timestamp = date("Y-m-d H:i:s");
			$this->session_id = $session_id;
			$this->php_self = $php_self;
			$this->request_method = $request_method;
			$this->request_time = $request_time;
			$this->query_string = $query_string;
			$this->remote_addr = $remote_addr;
			if (isset($remote_host)) {
				$this->remote_host = $remote_host;
			} else {
				$this->remote_host = '127.0.0.1';
			}
			$this->remote_port = $remote_port;
			$this->logger_commit_to_db();
		}

		private function logger_commit_to_db(){

			$this->fk_object_id = $this->getData("INSERT INTO master_log (session_id, php_self, request_method, request_time, query_string, remote_addr, remote_host, remote_port, time_logged) VALUES ('$this->session_id', '$this->php_self', '$this->request_method', '$this->request_time', '$this->query_string', '$this->remote_addr', '$this->remote_host', '$this->remote_port', '$this->timestamp' )");

		}

	}

?>