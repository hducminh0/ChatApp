<?php
	class Chat extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$data['channel'] = 'fake';
			$data['title'] = 'Home';
			$this->load->view('chatview', $data);
		}

		public function send($sender, $channel, $message) {
			$data['sent'] = $this->Message_model->put_mess($sender, $channel, $message);
			echo json_encode($data);
		}

		public function receive($channel, $id){
			$data['received'] = $this->Message_model->get_mess($channel, $id);
			echo json_encode($data);
		}

		public function check_mess($channel){
			$data['check'] = $this->Message_model->new_mess($channel);
			echo json_encode($data);
		}

		public function check_sender($sender){
			$data['check'] = $this->Message_model->new_sender($sender);
			echo json_encode($data);
		}

		// public function send() {
		// 	$sender = $this->input->post('sender');
		// 	$channel = $this->input->post('channel');
		// 	$message = $this->input->post('message');
		// 	$data['sent'] = $this->Message_model->put_mess($sender, $channel, $message);
		// 	echo json_encode($data);
		// }

		// public function receive(){
		// 	$channel = $this->input->post('channel');
		// 	$id = $this->input->post('id');
		// 	$data['receive'] = $this->Message_model->get_mess($channel, $id);
		// 	echo json_encode($data);
		// }

		// public function check_mess(){
		// 	$channel = $this->input->post('channel');
		// 	$data['check'] = $this->Message_model->new_mess($channel);
		// 	echo json_encode($data);
		// }

		// public function check_sender(){
		// 	$sender = $this->input->post('sender');
		// 	$data['check'] = $this->Message_model->new_sender($sender);
		// 	echo json_encode($data);
		// }
	}
?>