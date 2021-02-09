<?php

defined('_EXEC') or die;

class Contact_controller extends Controller
{
	private $lang;

	public function __construct()
	{
		parent::__construct();

		$this->lang = Session::get_value('lang');
	}

	public function index()
	{
		if (Format::exist_ajax_request() == true)
		{
			$errors = [];

			if (!isset($_POST['name']) OR empty($_POST['name']))
				array_push($errors, ['name','{$lang.not_empty_name}']);

			if (!isset($_POST['phone']) OR empty($_POST['phone']))
				array_push($errors, ['phone','{$lang.not_empty_phone}']);

			if (!isset($_POST['email']) OR empty($_POST['email']))
				array_push($errors, ['email','{$lang.not_empty_email}']);

			if (!isset($_POST['company']) OR empty($_POST['company']))
				array_push($errors, ['company','{$lang.not_empty_company}']);

			if (!isset($_POST['comment']) OR empty($_POST['comment']))
				array_push($errors, ['comment','{$lang.not_empty_comment}']);

			if (!isset($_POST['privacy_notice']) OR empty($_POST['privacy_notice']))
				array_push($errors, ['privacy_notice','{$lang.not_empty_privacy_notice}']);

			if (empty($errors))
			{
				$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
				$recaptcha_secret = '6LdgUVAaAAAAAKRUlNJfgsAdnXcjIA9eWRd0BIss';
				$recaptcha_response = $_POST['recaptcha_1'];
				$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
				$recaptcha = json_decode($recaptcha);

				if ($recaptcha->success = true AND $recaptcha->score >= 0.7)
				{
					$mail = new Mailer(true);

					try
					{
						$mail->setFrom('noreply@one-consultores.com', Configuration::$web_page);
						$mail->addAddress('info@one-consultores.com', Configuration::$web_page);
						$mail->Subject = 'Nuevo contacto';
						$mail->Body = 'Nombre: ' . $_POST['name'] . '<br>Correo electrónico: ' . $_POST['email'] . '<br>Teléfono: ' . $_POST['phone'] . '<br>Compañia: ' . $_POST['company'] . '<br> Comentario: ' . $_POST['comment'];
						$mail->send();
					}
					catch (Exception $e) {}

					if ($this->lang == 'es')
						$message = '¡Gracias por ponerte en contacto con nosotros!';
					else if ($this->lang == 'en')
						$message = '¡Thank you for contacting us!';

					echo json_encode([
						'status' => 'success',
						'message' => $message
					]);
				}
				else
				{
					echo json_encode([
						'status' => 'error',
						'errors' => [
							['RECAPTCHA', 'RECAPTCHA ERROR']
						]
					]);
				}
			}
			else
			{
				echo json_encode([
					'status' => 'error',
					'errors' => $errors
				]);
			}
		}
		else
		{
			$template = $this->view->render($this, 'index');

			define('_title', Configuration::$web_page . ' | {$lang.contact}');

			echo $template;
		}
	}
}
