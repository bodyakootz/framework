<?php 

class Help {

	public static $admin_email;
	public static $site_email;
	public static $site_password;
	public static $site_host;
	public static $site_port;
	public static $site_secure;

	public function __construct() {
		// always need to instantiate Help to run __construct ?
		// parent::__construct(); // !!! if has parent and use App::before()
		static::$admin_email = 'beststrelok@gmail.com';
		static::$site_email = 'sportsecretshop@gmail.com';
		static::$site_password = '080493210893';
		static::$site_host = 'pdd.yandex.ru';
		static::$site_port = 465; //587
		static::$site_secure = 'ssl'; //tls
	}

	public static function sendMail($data, $subject, $from, $view, $email=null) {
		if (empty($email)) {
			$email = self::$admin_email;
		}

		$mail = new PHPMailer;
		$mail->CharSet = "UTF-8";

		$mail->isSMTP();
		$mail->Host = self::$site_host;
		$mail->SMTPAuth = true;
		$mail->Username = self::$site_email;
		$mail->Password = self::$site_password;
		$mail->SMTPSecure = self::$site_secure;
		$mail->Port = self::$site_port;
		$mail->From = $from;
		$mail->FromName = $from;
		$mail->addAddress($email);
		// $mail->addAddress('ellen@example.com'); // Name is optional
		// $mail->addEmbeddedImage('public/img/vsx15.jpg', 'embed_1'); // Add attachments
		// $mail->addAttachment('public/img/vsx15.jpg', ''); // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
		$mail->isHTML(true);
		$mail->Subject = $subject;
		$mail->Body = View::make($view, $data);
		// $mail->Body = 'This is the HTML message body <b>in bold!</b>';

		if (!$mail->send()) {
			die('emails NOT sent!');
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}
}