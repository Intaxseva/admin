<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdetails extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_userdetails');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataUserdetails'] 	= $this->M_userdetails->select_all();
		$data['page'] 		= "userdetails";
		$data['judul'] 		= "Userdetails Management";
		
		$data['modal_tambah_userdetails'] = show_my_modal('modals/modal_tambah_userdetails', 'tambah-userdetails', $data);

		$this->template->views('userdetails/home', $data);
	}

	public function tampil() {

		$data['dataUserdetails'] = $this->M_userdetails->select_all();
		$this->load->view('userdetails/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('user_id', 'user_id', 'is_unique[userdetails.user_id]|required');
			$this->form_validation->set_rules('name', 'Name', 'min_length[3]|required');
			$this->form_validation->set_rules('pan', 'pan', 'min_length[10]|max_length[10]|required');
			$this->form_validation->set_rules('aadhaar', 'aadhaar', 'min_length[12]|max_length[12]|numeric|required');
				$this->form_validation->set_rules('accnumber', 'accnumber', 'numeric|required');
		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_userdetails->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('New userdetails Added!', '20px');
				
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('New userdetails Added!', '20px');
			}
		}
			else{
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}
		
		echo json_encode($out);
	}
		public function delete() {
		$id = $_POST['id'];
		$result = $this->M_userdetails->delete($id);
		
		if ($result > 0) {
			echo show_succ_msg('One Record Deleted!...', '20px');
		} else {
			echo show_err_msg('No Change!...', '20px');
		}
	}

	public function update() {
			$data['userdata'] 	= $this->userdata;

		$id 				= trim($_POST['id']);
		$data['dataUserdetails'] 	= $this->M_userdetails->select_by_id($id);
		echo show_my_modal('modals/modal_update_userdetails', 'update-userdetails', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('name', 'Name', 'min_length[3]|required');
			$this->form_validation->set_rules('pan', 'pan', 'min_length[10]|max_length[10]|required');
			$this->form_validation->set_rules('aadhaar', 'aadhaar', 'min_length[12]|numeric|required');
				$this->form_validation->set_rules('accnumber', 'accnumber', 'numeric|required');
	

		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_userdetails->update($data);

			if ($result > 0) {
				$out['status'] = '';

				$out['msg'] = show_succ_msg('One Record Updated!', '20px');
			} else {
				$out['status'] = '';
		
				$out['msg'] = show_succ_msg('No Updates Occured!', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function export() {
		error_reporting(E_ALL);
    
		include_once './assets/phpexcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();

		$data = $this->M_userdetails->select_export();

		$objPHPExcel = new PHPExcel(); 
		$objPHPExcel->setActiveSheetIndex(0); 

		$objPHPExcel->getActiveSheet()->SetCellValue('A1', "User ID"); 
		$objPHPExcel->getActiveSheet()->SetCellValue('B1', "Name");
		$objPHPExcel->getActiveSheet()->SetCellValue('C1', "Phone");
		$objPHPExcel->getActiveSheet()->SetCellValue('D1', "Email");
		$objPHPExcel->getActiveSheet()->SetCellValue('E1', "Pan Number");
		$objPHPExcel->getActiveSheet()->SetCellValue('F1', "D.O.B");
		$objPHPExcel->getActiveSheet()->SetCellValue('G1', "Address");
		$objPHPExcel->getActiveSheet()->SetCellValue('H1', "IFSC Code");
		$objPHPExcel->getActiveSheet()->SetCellValue('I1', "Account Number");
		$objPHPExcel->getActiveSheet()->SetCellValue('J1', "Aadhaar Number");
		$objPHPExcel->getActiveSheet()->SetCellValue('K1', "Portal Password");
		$objPHPExcel->getActiveSheet()->SetCellValue('L1', "User Creation Date & Time");

		$rowCount = 2;
		foreach($data as $value){
		    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value->user_id); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $value->name); 
			$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $value->phone); 
			$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $value->email);
			$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $value->pan);
			$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $value->dob);
			$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $value->address);
			$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, $value->ifsc);
			$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, $value->accnumber);
			$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, $value->aadhaar);
			$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, $value->sitepwd); 
			$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, $value->datetime);			
		    $rowCount++; 
		} 

		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
		$objWriter->save('./assets/excel/INTAXSEVA User KYC details List.xlsx'); 

		$this->load->helper('download');
		force_download('./assets/excel/INTAXSEVA User KYC details List.xlsx', NULL);
	}
}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */