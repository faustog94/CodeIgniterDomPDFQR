<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once(APPPATH . 'vendor/dompdf/dompdf/src/Autoloader.php');
use Dompdf\Dompdf;

class Generar extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
		  $this->load->helper(array('url', 'image_encoder_helper'));
	}

	public function qr(){
		$this->load->library('pdfgenerator');

		$data['img_url'] = "";
		if ($this->input->post('action') && $this->input->post('action') == "generate_qrcode") {
			$this->load->library('ciqrcode');
			$qr_image = rand() . '.png';
			$params['data'] = $this->input->post('qr_text');
			$params['level'] = 'H';
			$params['size'] = 8;
			$params['savename'] = FCPATH . "uploads" . DIRECTORY_SEPARATOR . $qr_image;
			echo($params['savename']);
			if ($this->ciqrcode->generate($params)) {
				$img_path = $params['savename'];
				$data['img_url'] = encode_img_base64($img_path,'png');
				//$data['img_url'] = "http://localhost/proyectoqr/uploads/".$qr_image;
			}
		}
		//$this->load->view('qr',$data); //para mostrar por navegador 

		$dompdf = new Dompdf(array('enable_remote' => true));
		$html = $this->load->view('qr', $data, true);// el tercer argumento, al ser true, devuelve la vista serializada como string.
		$filename = "Reporte";
		//generate($html, $filename='', $stream=TRUE, $paper = 'A4', $orientation = "portrait")
		
		$this->pdfgenerator->generate($html, $filename, true, 'A4', "portrait");
	}
 

}

?>
