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
	abstract class Xo_Data extends Xo_Init {

		private $result;
		public $db;

		public function getData($query) {
			$this->db->connect();
			$this->db->sql($query);
			$this->result = $this->db->getResult();
			return $this->result;
		}

		public function dataInsert($table_name, $column_data){
			$this->db->connect();
			$data_array = array();
			foreach($column_data as $k => $v) {
				$data_array[$k] = $this->db->escapeString($v);
			}
			$this->db->insert($table_name,$data_array);
			$this->db->getResult();
		}

		public function dataSelect($table_name, $columns, $join, $where, $order_by) {
			$this->db->connect();
			$this->db->select($table_name,$columns,$join,$where,$order_by); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
			$res = $this->db->getResult();
			return $res;
		}

		public function data_connection() {
			$this->get_dbc();
		}

		private function get_dbc() {
			$this->db_user = 'root';
			$this->db_pass = 'root';
			$this->db_host = 'localhost';
			$this->db_name = 'ch18';

			$this->dbc = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

			if ($this->dbc->connect_error) {
			    // SEND ADMIN EMAIL!!!!!
			    die('Connect Error (' . $this->dbc->connect_errno . ') ' . $this->dbc->connect_error);
			} else {
				mysqli_set_charset($this->dbc, 'utf8');
			}
		}

		public function data_check_and_prepare_input_for_sql($var) {
			if (isset($var)) {
				return $return_value = mysqli_real_escape_string($this->dbc, $var);
			} else {
				return 0;
			}
		}
	}

?>