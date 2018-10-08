<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_service');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataService'] 	= $this->M_service->select_all();
		$data['page'] 		= "service";
		$data['judul'] 		= "Service Request Management";
		
		$data['modal_tambah_service'] = show_my_modal('modals/modal_tambah_service', 'tambah-service', $data);

		$this->template->views('service/home', $data);
	}

	public function tampil() {
				$this->form_validation->set_rules('phone', 'Phone', 'numeric|required|min_length[10]|is_unique[user.phone]');
		$data['dataService'] = $this->M_service->select_all();
		$this->load->view('service/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('service', 'Service', 'trim|required');

		$data 	= $this->input->post();
		
			$result = $this->M_service->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('New service Added!', '20px');
				
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('New service Added!', '20px');
			}
		
		echo json_encode($out);
	}

	public function update() {
		$data['userdata'] 	= $this->userdata;

		$id 				= trim($_POST['id']);
		$data['dataService'] 	= $this->M_service->select_by_id($id);

		echo show_my_modal('modals/modal_update_service', 'update-service', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('service', 'Service', 'trim|required');

		$data 	= $this->input->post();
		if ($this->form_validation->run() == FALSE) {
			$result = $this->M_service->update($data);

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

		$data = $this->M_service->select_export();

		$objPHPExcel = new PHPExcel(); 
		$objPHPExcel->setActiveSheetIndex(0); 

		$objPHPExcel->getActiveSheet()->SetCellValue('A1', " Request ID"); 
		$objPHPExcel->getActiveSheet()->SetCellValue('B1', "Service Type");
		$objPHPExcel->getActiveSheet()->SetCellValue('C1', "Payment Amount");
$objPHPExcel->getActiveSheet()->SetCellValue('D1', "UserName");
$objPHPExcel->getActiveSheet()->SetCellValue('E1', "User Phone");
$objPHPExcel->getActiveSheet()->SetCellValue('F1', "Date & Time");
$objPHPExcel->getActiveSheet()->SetCellValue('G1', "Deliverydate");

		$rowCount = 2;
		foreach($data as $value){
		    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value->id); 
		   // $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $value->service_type); 
			//$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $value->payment_amount); 
			//$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $value->username); 
			$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $value->user_phone); 
			$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $value->datetime); 
			$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $value->deliverydate); 
			
		    $rowCount++; 
		} 

		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
		$objWriter->save('./assets/excel/INTAXSEVAServiceRequestsList.xlsx'); 

		$this->load->helper('download');
		force_download('./assets/excel/INTAXSEVAServiceRequestList.xlsx', NULL);
	}


}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */