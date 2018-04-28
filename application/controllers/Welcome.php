<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function add(){
		$data['add'] = 'true';
		$this->load->view('form',$data);
	}
	public function list_data(){
		$data['list'] = $this->mongo_db->get('employee');
		$this->load->view('list',$data);
	}
	public function insert(){
		$insert = array('name'=>$_POST['name'],'city'=>$_POST['city']);
		$this->mongo_db->insert('employee',$insert);
		redirect('welcome/list_data', 'refresh');
	}
	public function edit($slug = NULL){
		$obj = new MongoId($slug);
		$data = array(
			'edit' => $this->mongo_db->where('_id',$obj)->get('employee'),
			'update' => 'true',
			'update_id' => $slug
		);
		$this->load->view('form',$data);
	}
	public function delete($slug = NULL){
		$obj = new MongoId($slug);
		$this->mongo_db->where('_id',$obj);
		$this->mongo_db->delete('employee');
		redirect('welcome/list_data', 'refresh');
	}
	public function update($slug = NULL){
		$obj = new MongoId($slug);
		$update = array('$set'=>array('name' => $_POST['name'],'city' => $_POST['city']));
		$this->mongo_db->where('_id',$obj);
		$this->mongo_db->update_all('employee',$update);
		redirect('welcome/list_data', 'refresh');
	}

}
