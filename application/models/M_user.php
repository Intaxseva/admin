<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function select_all() {
		$sql = "SELECT * FROM user ORDER BY datetime DESC";
		$data = $this->db->query($sql);
		return $data->result();
	}
	public function select_export() {
	$this->db->select('*');
		$this->db->from('user');
		$data = $this->db->get();
		return $data->result();
	}
	public function select_by_id($id) {
		$sql = "SELECT * FROM user WHERE user.id = '{$id}'";
		$data = $this->db->query($sql);

		return $data->row();}
	
	public function select_by_details($id) {
	$sql = "SELECT user.id,user.username,service.id AS service_id,content.service_type,payment.payment_amount,service.status,service.datetime,service.deliverydate FROM payment,service,user,content 
	WHERE user.id = '{$id}' AND service.user_id = '{$id}' AND payment.user_id = '{$id}' AND service.service_id=content.id AND service.service_id = payment.service_id";

		$data = $this->db->query($sql);

	return $data->result();}
	
	public function select_by_pegawai($id) {
	$sql = " SELECT * FROM user";

	$data = $this->db->query($sql);

	return $data->result();
	}


	public function insert($data) {
		$sql2 = "INSERT INTO user VALUES('','" .$data['username'] ."','" .$data['phone'] ."','" .$data['email'] ."',NOW(),'6bfbd328dc2bc5f8f9809a5298a294c1','profil1.jpg')";
		$sql = "UPDATE service SET service_id='" .$data['service_id'] ."',deliverydate='" .$data['duration'] ."' WHERE service_id= 0";
		$sql1 = "UPDATE payment SET payment_amount = '" .$data['payment_amount'] ."', service_id = '" .$data['service_id'] ."' WHERE service_id = 0";

		$this->db->query($sql2);
		$this->db->query($sql);
		$this->db->query($sql1);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('kota', $data);
		
		$this->db->insert_batch('kota', $data);
		
		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql="UPDATE user SET username='".$data['username'] ."',phone='".$data['phone'] ."',email='".$data['email'] ."',datetime='".$data['datetime'] ."' WHERE id='" .$data['id'] ."'";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE user,service,payment,userdetails FROM user INNER JOIN service INNER JOIN payment INNER JOIN userdetails WHERE user.id=service.user_id AND service.user_id=payment.user_id AND userdetails.user_id=user.id AND user.id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama', $nama);
		$data = $this->db->get('user');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('user');

		return $data->num_rows();
	}
	
	public function sendEmail($receiver,$phone){
        $from = "intaxseva@gmail.com";    //senders email address
        $subject = 'WELCOME INTAXSEVA';  //email subject
        
        //sending confirmEmail($receiver) function calling link to the user, inside message body
        $message = '<h2 align="center" style="font-family:Algerian; color:red">WELCOME TO INTAXSEVA</h2>
					Dear Customer,<br><br>
					<table style="width:30%" border="1" cellpadding="5"><tr><th>LOGIN ID</th><td>'.$phone.'</td></tr><tr><th>PASSWORD</th><td>IntaxSeva18</td></tr></table>
					<br><br>We are providing 59 types of tax, accounting and legal services for corporates and individuals.<br>
					Here we listed few of our top services. For more details please visit www.intaxseva.com<br><br>
					<table border="1" style="width:50%" cellspacing="5" cellpadding="5">
						<tr><th>S.no</th><th>Services</th><th>Amount</th></tr>
						<tr><td>1.</td><td>INCOME TAX FILLING</td><td>Rs.500</td></tr>
						<tr><td>2.</td><td>GST REGISTRATION</td><td>Rs.500</td></tr>
						<tr><td>3.</td><td>GST MONTHLY RETURN FILLING</td><td>Rs.500</td></tr>
						<tr><td>4.</td><td>GST MONTHLY RETURN NIL FILLING</td><td>Rs.200</td></tr>
						<tr><td>5.</td><td>MSME/SSI REGISTRATION</td><td>Rs.200</td></tr>
						<tr><td>6.</td><td>COMPANY INCORPORATION</td><td>Rs.10,000</td></tr>
					</table><br>
					(private limited, one person company accounts maintenance in tally).<br>
					we are providing more then 59 services.any more details please visit www.intaxseva.com.<br>
					<h4 align="center" style="color:red;">Do not replay this mail, You have any deatils contact below number or E-mail</h4>
					Regards,<br><br>
					
					Contact: 6383479075, 8610044265, 9629304322.<br>
					E-mail: contact@intaxseva.com.<br>
					Website: <a href="www.intaxseva.com">Intaxseva.com</a>';
        
        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = $from;
        $config['smtp_pass'] = 'Intaxseva@123';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = 'TRUE';
        $config['newline'] = "\r\n"; 
        
        $this->load->library('email', $config);
		$this->email->initialize($config);
        //send email
        $this->email->from($from);
        $this->email->to($receiver);
        $this->email->subject($subject);
        $this->email->message($message);
        
        if($this->email->send()){
			//for testing
            return true;
        }else{
            return false;
        }
    }
	
	public function adminEmail($name,$email,$phone,$date){
        $from = "intaxseva@gmail.com";    //senders email address
        $subject = 'User Registeration';  //email subject
        
        //sending confirmEmail($receiver) function calling link to the user, inside message body
        $message = 'Dear Admin,<br><br>One user is register on Admin/intaxseva.com and his/her details,<br><br>
					<table style="width:80%" border="1" cellpadding="5" align="center"><tr><th>Name</th><td>'.$name.'</td></tr><tr><th>Phone</th><td>'.$phone.'</td></tr>
					<tr><th>Email</th><td>'.$email.'</td></tr><tr><th>Date & Time</th><td>'.$date.'</td></tr></table>
					<br><br><br><br><br>Thanks,<br><br><br><br>
		Contact Numbers<br>+91-9629304322<br>+91-6383479075<br><br>
		Website: <a href="http://www.intaxseva.com">www.intaxseva.com</a>';
        
        
        //config email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = $from;
        $config['smtp_pass'] = 'Intaxseva@123';  //sender's password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = 'TRUE';
        $config['newline'] = "\r\n"; 
        
        $this->load->library('email', $config);
		$this->email->initialize($config);
        //send email
		$send = 'contact@intaxseva.com';
        $this->email->from($from);
        $this->email->to($send);
        $this->email->subject($subject);
        $this->email->message($message);
        
        if($this->email->send()){
			//for testing
            return true;
        }else{
            return false;
        }
    }
}
