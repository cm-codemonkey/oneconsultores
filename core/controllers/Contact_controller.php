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

			if (empty($errors))
			{
				$mail = new Mailer(true);

				try
				{
					$mail->setFrom('contacto@one-consultores.com', Configuration::$web_page);
					$mail->addAddress('contacto@one-consultores.com', Configuration::$web_page);
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
