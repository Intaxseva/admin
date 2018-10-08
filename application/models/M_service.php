<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//This function has written service CI model and select data from all tables.
class M_service extends CI_Model {
	public function select_all() {
		$sql="SELECT DISTINCT service.deliverydate,service.user_id,service.id,content.service_type,payment.payment_amount,user.username,service.status,service.datetime,service.service_id FROM user,service,content,payment WHERE service.service_id=content.id AND service.user_id=user.id AND service.user_id=payment.user_id AND  service.service_id=payment.service_id AND service.service_id !='0' ORDER BY service.datetime DESC";
		//$sql = " SELECT service.deliverydate,service.user_phone,service.id,content.service_type,payment.payment_amount,user.username,service.status,service.datetime FROM user,service,content,payment WHERE service.service_id=content.id AND service.user_phone=user.phone AND service.user_phone=payment.user_phone AND service.datetime=payment.datetime ORDER BY service.id DESC";
			$data = $this->db->query($sql);
		return $data->result();
	}
//This function has written  export to the details to excel format.
	public function select_export() {
		$sql = " SELECT service.deliverydate,service.user_id,service.id,content.service_type,payment.payment_amount,user.username,service.status,service.datetime FROM user,service,content,payment WHERE service.service_id=content.id AND service.user_id=user.id AND service.user_id=payment.user_id AND service.datetime=payment.datetime " ;	
		$data = $this->db->query($sql);
		return $data->result();
	}
//This function has written select the details form service tabel in all values by particular id.
	public function select_by_id($id) {
		$sql = "SELECT * FROM  service WHERE service.id = '{$id}'";
		$data = $this->db->query($sql);
		return $data->row();}
//This function has written New service request asking form admin these data will be store two table like service and payment.	
	public function insert($data) {
		$sql2 = "INSERT INTO service VALUES('','" .$data['service_id'] ."','" .$data['user_id'] ."','" .$data['status'] ."',NOW(),'" .$data['duration'] ."')";
		$sql = "INSERT INTO payment VALUES('','" .$data['user_id'] ."','','" .$data['payment_amount'] ."','','" .$data['service_id'] ."',NOW())";
		$sql1="DELETE FROM service WHERE service_id='0' AND user_id='" .$data['user_id'] ."'";
		$sql3="DELETE FROM payment WHERE service_id='0' AND user_id='" .$data['user_id'] ."'";

		$this->db->query($sql2);
		$this->db->query($sql);
		$this->db->query($sql1);
		$this->db->query($sql3);
		return $this->db->affected_rows();
	}
		public function insert_batch($data) {
		$this->db->insert_batch('kota', $data);
		
		$this->db->insert_batch('kota', $data);
		
		return $this->db->affected_rows();
	}
//This funcion has written update the detail for status and delivery date in service table.
	public function update($data) {		
		$sql="UPDATE service SET status='".$data['status'] ."',deliverydate='".$data['deliverydate'] ."' WHERE id='" .$data['id'] ."'";
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
}

//This file is fully sql query by CRUD functions related. by Intaxseva