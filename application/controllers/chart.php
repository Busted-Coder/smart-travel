<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel extends MY_Controller {

	/**
	 * Example: DOMPDF 
	 *
	 * Documentation: 
	 * http://code.google.com/p/dompdf/wiki/Usage
	 *
	 */
	
	public function ticket() {
		
		$this->load->library('excel');

		$this->load->model('ticket_model','TicketModel');
	require_once './application/third_party/PHPExcel.php';
	require_once './application/third_party/PHPExcel/IOFactory.php';

	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	$default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => '000000'),
	);

	$acc_default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => 'c7c7c7'),
	);
	$outlet_style_header = array(
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 10,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$top_header_style = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => 'ff0000'),
			'size' => 15,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		),
	);
	$style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$account_value_style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$text_align_style = array(
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		),
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
	);

	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:E1');
	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Ticket Info');

	$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('C1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('D1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('E1')->applyFromArray($top_header_style);

	$objPHPExcel->getActiveSheet()->setCellValue('A2', 'T_ID');
	$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Ticket Status');
	$objPHPExcel->getActiveSheet()->setCellValue('C2', 'Traveller ID');
	$objPHPExcel->getActiveSheet()->setCellValue('D2', 'Schedule ID');
	$objPHPExcel->getActiveSheet()->setCellValue('E2', 'Issuance Time');


	$objPHPExcel->getActiveSheet()->getStyle('A2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('B2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('D2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('E2')->applyFromArray($style_header);

	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);

	$row = 3;
	$custDtaData  = $this->TicketModel->getList('asc');
	foreach ($custDtaData as $value)
	{
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $value['t_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $value['state']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$row, $value['trav_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $value['schedule_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$row, $value['created_at']);
		$row++;
	}

	//$filename = "Ticket Report Till". date("Y-m-d-H-i-s") ."xls";
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename=Ticket Sale.xls');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	}

	public function user() {
		
		$this->load->library('excel');

		$this->load->model('user_model','UserModel');
	require_once './application/third_party/PHPExcel.php';
	require_once './application/third_party/PHPExcel/IOFactory.php';

	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	$default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => '000000'),
	);

	$acc_default_border = array(
		'style' => PHPExcel_Style_Border::BORDER_THIN,
		'color' => array('rgb' => 'c7c7c7'),
	);
	$outlet_style_header = array(
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 10,
			'name' => 'Arial',
			'bold' => true,
		),
	);
	$top_header_style = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => 'ff0000'),
			'size' => 15,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
		),
	);
	$style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$account_value_style_header = array(
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
		),
		'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
		),
	);
	$text_align_style = array(
		'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
		),
		'borders' => array(
			'bottom' => $default_border,
			'left' => $default_border,
			'top' => $default_border,
			'right' => $default_border,
		),
		'fill' => array(
			'type' => PHPExcel_Style_Fill::FILL_SOLID,
			'color' => array('rgb' => 'ffff03'),
		),
		'font' => array(
			'color' => array('rgb' => '000000'),
			'size' => 12,
			'name' => 'Arial',
			'bold' => true,
		),
	);

	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:N1');
	$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Users Info');

	$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('B1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('C1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('D1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('E1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('F1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('G1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('H1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('I1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('J1')->applyFromArray($top_header_style);
	$objPHPExcel->getActiveSheet()->getStyle('K1')->applyFromArray($top_header_style);


	$objPHPExcel->getActiveSheet()->setCellValue('A2', 'User_ID');
	$objPHPExcel->getActiveSheet()->setCellValue('B2', 'Name');
	$objPHPExcel->getActiveSheet()->setCellValue('C2', 'Gender');
	$objPHPExcel->getActiveSheet()->setCellValue('D2', 'E-mail');
	$objPHPExcel->getActiveSheet()->setCellValue('E2', 'Phone');
	$objPHPExcel->getActiveSheet()->setCellValue('F2', 'CNIC');
	$objPHPExcel->getActiveSheet()->setCellValue('G2', 'Address');
	$objPHPExcel->getActiveSheet()->setCellValue('H2', 'Role_ID');
	$objPHPExcel->getActiveSheet()->setCellValue('I2', 'IS_Valued');
	$objPHPExcel->getActiveSheet()->setCellValue('J2', 'KM(s) Travelled');
	$objPHPExcel->getActiveSheet()->setCellValue('K2', 'Registration Date');


	$objPHPExcel->getActiveSheet()->getStyle('A2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('B2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('C2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('D2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('E2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('F2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('G2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('H2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('I2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('J2')->applyFromArray($style_header);
	$objPHPExcel->getActiveSheet()->getStyle('K2')->applyFromArray($style_header);

	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(40);
	$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(20);
	$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(20);

	$row = 3;
	$custDtaData  = $this->UserModel->getList('asc');
	foreach ($custDtaData as $value)
	{
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$row, $value['user_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$row, $value['fname'].' '.$value['lname']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$row, $value['gender']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$row, $value['email']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$row, $value['phone']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$row, $value['cnic']);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$row, $value['address']);
		$objPHPExcel->getActiveSheet()->setCellValue('H'.$row, $value['role_id']);
		$objPHPExcel->getActiveSheet()->setCellValue('I'.$row, $value['is_valued']);
		$objPHPExcel->getActiveSheet()->setCellValue('J'.$row, $value['km']);
		$objPHPExcel->getActiveSheet()->setCellValue('K'.$row, $value['created_at']);
		$row++;
	}

	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="Users_List.xls"');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	}
}
