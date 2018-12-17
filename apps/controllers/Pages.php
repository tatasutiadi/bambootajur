<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/slide.css');
		$this->layouts->add_include('assets/css/home.css');
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js',false);
		$this->layouts->add_include('assets/js/slide.js');
		$this->layouts->add_include('assets/js/navbar.js');

		$this->layouts->view('pages/index');
	}

	public function concept()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->view('pages/concept');
	}

	public function homes()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->view('pages/home');
	}

	public function facilities()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('assets/css/fullcarousel.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->view('pages/facilities');
	}

	public function news()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('assets/css/fullcarousel.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->view('pages/news');
	}

	public function disclaimer()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->view('pages/disclaimer');
	}

	public function contact()
	{
		$this->load->library('Layouts');
		$this->layouts->add_include('assets/css/style.css');
		$this->layouts->add_include('assets/css/responsive.css');
		$this->layouts->add_include('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',false);
		$this->layouts->add_include('https://use.fontawesome.com/releases/v5.5.0/css/all.css',false);
		$this->layouts->add_include('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css',false);
		$this->layouts->add_include('https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic',false);

		$this->layouts->view('pages/contact');
	}

	public function submit(){
		$data = array(
			'full_name'=>$this->input->post('name'),
		    'email'=>$this->input->post('email'),
		    'phone_number'=>$this->input->post('number'),
		    'created_at'=>date('Y-m-d H:i:s'),
		    'status'=>1,//send
		    'type'=>'phone_number'
		);
		$ins = $this->db->insert('contact', $data);
		
		if($ins){
			$this->sendMail($data);
		   	$datas['save'] = true;
		}else{
			$datas['save'] = false;
		}

		// print_r($datas);exit;
		echo json_encode($datas);
	}

	public function submitcontact(){
		$data = array(
			'full_name'=>$this->input->post('name'),
		    'email'=>$this->input->post('email'),
		    'phone_number'=>$this->input->post('number'),
		    'created_at'=>date('Y-m-d H:i:s'),
		    'status'=>1,//send
		    'type'=>'contact',
		    'message'=>$this->input->post('message')
		);
		$ins = $this->db->insert('contact', $data);
		
		if($ins){
		   $datas['save'] = true;
		   $this->sendMail($data);
		}else{
			$datas['save'] = false;
		}

		echo json_encode($datas);
	}

	protected function sendMail($data){
		$this->load->library('PHPMailerAutoload');
		$subject = 'Alert Kontak Bamboo Tajur';
		$message = 'Nama : '.$data['full_name']
					.'<br /> Email : '.$data['email']
					.'<br /> No Telepon : '.$data['phone_number']
					.'<br />'.(!empty($data['message'])? 'Pesan : '. $data['message'] : null).'';
		$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
			<title>' . html_escape($subject) . '</title>
			<style type="text/css">
				body {
					font-family: Arial, Verdana, Helvetica, sans-serif;
					font-size: 16px;
				}
			</style>
		</head>
		<body>
		' . $message . '
		</body>
		</html>';

		$mail = new PHPMailer();
		$mail->IsSMTP(); // we are going to use SMTP
		$mail->SMTPAuth   = true; // enabled SMTP authentication
		$mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
		$mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
		$mail->Port       = 465;                   // SMTP port to connect to GMail
		$mail->Username   = "zoeld77@gmail.com";  // user email address
		$mail->Password   = "";            // password in GMail
		$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
					)
				);
		$mail->isHTML(true);
		$mail->SetFrom('tatasutiadi@gmail.com', 'No-Reply Bamboo');  //Who is sending the email       
		$mail->Subject    = $subject;
		$mail->Body      = $body;
		$destino = "tatasutiadi@gmail.com";
		$mail->AddAddress($destino, "Demmy Amminulloh");		
		$mail->Send();
	}

}
