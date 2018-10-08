<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//This function has written service CI model and select data from all tables.
class M_Userdetails extends CI_Model {
	public function select_all() {
		$sql="SELECT userdetails.details_id,userdetails.user_id,userdetails.pan,userdetails.name,userdetails.dob,userdetails.address,userdetails.ifsc,userdetails.accnumber,userdetails.aadhaar,userdetails.sitepwd,user.id,user.phone From userdetails,user WHERE userdetails.user_id=user.id ORDER BY details_id DESC";
			$data = $this->db->query($sql);
		return $data->result();
	}

	public function select_export() {
$sql="SELECT userdetails.details_id,userdetails.user_id,userdetails.pan,userdetails.name,userdetails.dob,userdetails.address,userdetails.ifsc,userdetails.accnumber,userdetails.aadhaar,userdetails.sitepwd,user.id,user.phone,user.email,user.datetime From userdetails,user WHERE userdetails.user_id=user.id";
			$data = $this->db->query($sql);
		return $data->result();
	}
	public function select_by_id($details_id) {
		$sql = "SELECT * FROM  userdetails WHERE userdetails.details_id = '{$details_id}'";
		$data = $this->db->query($sql);
		return $data->row();}
	public function insert($data) {
		$sql2 = "INSERT INTO userdetails(user_id,pan,name,dob,address,ifsc,accnumber,aadhaar,sitepwd) VALUES('" .$data['user_id'] ."','" .$data['pan'] ."','" .$data['name'] ."','" .$data['dob'] ."','" .$data['address'] ."','" .$data['ifsc'] ."','" .$data['accnumber'] ."','" .$data['aadhaar'] ."','" .$data['sitepwd'] ."')";
		
		$data=$this->db->query($sql2);
		return $this->db->affected_rows();
	}
		public function insert_batch($data) {
		$this->db->insert_batch('kota', $data);
		
		$this->db->insert_batch('kota', $data);
		
		return $this->db->affected_rows();
	}

	public function update($data) {		
		$sql="UPDATE userdetails SET pan='".$data['pan'] ."',name='".$data['name'] ."',dob='".$data['dob'] ."',address='".$data['address'] ."',ifsc='".$data['ifsc'] ."',accnumber='".$data['accnumber'] ."',aadhaar='".$data['aadhaar'] ."',sitepwd='".$data['sitepwd'] ."' WHERE details_id='" .$data['id'] ."'";
		$this->db->query($sql);
		return $this->db->affected_rows();
	}
	public function check_nama($nama) 
	{
		$this->db->where('nama', $nama);
		$data = $this->db->get('service');
		return $data->num_rows();
	}
	public function total_rows() 
	{
		$data = $this->db->query('SELECT * FROM service WHERE service_id !="0"');
		return $data->num_rows();
	}
	public function delete($id) {
		$sql = "DELETE FROM userdetails WHERE details_id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

}

//This file is fully sql query by CRUD functions related. by Intaxseva