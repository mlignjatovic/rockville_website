<?php

class Home extends Controller {

	public function index ($f3) {

		$data = file_get_contents('testimonials.xml'); 
		$xml = new SimpleXMLElement($data);
		$xmlconfig = json_decode(json_encode((array)$xml), TRUE);

		$f3->set('testimonials', $xmlconfig);
		$f3->set('title', 'Rockville Remodeling');
		$f3->set('content','main.html');
	}

	public function crew ($f3) {

		$f3->set('title', 'The Crew');
		$f3->set('content','crew.html');
	}

	public function bathroom ($f3) {

		$f3->set('title', 'Bathrooms');
		$f3->set('content','bathroom.html');
	}

	public function miscellaneous ($f3) {

		$f3->set('title', 'Miscellaneous');
		$f3->set('content','miscellaneous.html');
	}

	public function kitchen ($f3) {

		$f3->set('title', 'Kitchens');
		$f3->set('content','kitchen.html');
	}

	public function about ($f3) {

		$f3->set('title', 'About Us');
		$f3->set('content', 'about.html');
	}

	public function contact ($f3) {
			new Session();
		$submited = $f3->get('POST.submit-contact');
		$antispam = $f3->get('POST.url');
		if (isset($submited)) {
			

			$data = $f3->get('POST');

			$valid = Validate::is_valid($data, array(
		    'name' => 'required|alpha_numeric',
		    'address' => 'required|alpha_numeric',
		    'email' => 'required|valid_email',
		    'message'=> 'required|alpha_numeric'
		));

		if($valid === true && isset($antispam) && $antispam == '') {
			$name = $f3->get('POST.name');
			$adress = $f3->get('POST.address');
			$subject = $f3->get('POST.subject');
			$email = $f3->get('POST.email');
			$message = $f3->get('POST.message');

			require_once 'app/PHPMailer/PHPMailerAutoload.php';

			$mail = new PHPMailer(); 

			$mail->Subject = $subject;
			$mail->Body = 'From: '. $name;
			$mail->Body .= 'Email: '. $email;
			$mail->Body .= 'Address: '. $address;
			$mail->Body .= 'Message: '. $message; 
			$mail->FromName = $name;
			$mail->AddAddress('#');
			
			if (!$mail->send()) {
				throw new Exception("Error Processing Request", 1);	
			}else {
				$f3->set('submited',true);
				$f3->set('SESSION.success', 'Thank you for getting in touch!. We will get back to you shortly.');
			}
		} else {

			$f3->set('SESSION.error', 'Please use valid characters!');

		}
		
		

	}

		$f3->set('title', 'Contact Us');
		$f3->set('content','contact.html');

	}

	public function error ($f3) {

		$f3->set('title', 'About Us');
		$f3->set('content', '404.html');
	}

}