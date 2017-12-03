<?php
	class Message_model extends CI_Model{

		public function __construct(){
			// parent::__construct();
			$this->load->database();
		}

		public function put_mess($sender, $channel, $message){
			$query = $this->db->query("INSERT INTO message (Sender, Channel, Message, Time) VALUES ('".$sender."', '".$channel."', '".$message."', CURRENT_TIME);");
			$query = $this->db->query("SELECT MAX(ID) from message WHERE Sender = '".$sender."' AND Channel = '".$channel."';");
			return $query->result_array();
		}

		public function get_mess($channel, $id){
			$query = $this->db->query("SELECT * FROM message WHERE Channel = '".$channel."' AND ID >=".$id.";");
			return $query->result_array();
		}

		public function new_mess($channel){
			$query = $this->db->query("SELECT MAX(ID) FROM message WHERE Channel = '".$channel."'; ");
			return $query->result_array();
		}

		public function new_sender($sender){
			$query = $this->db->query("SELECT COUNT(Sender) FROM message WHERE Sender = '".$sender."';");
			return $query->result_array();
		}
	}
?>