<?php

defined('_EXEC') or die;

class Index_controller extends Controller
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
			if ($_POST['action'] == 'cotiza_antigeno' OR $_POST['action'] == 'cotiza_anticuerpo')
			{
				$errors = [];

				if (!isset($_POST['company_name']) OR empty($_POST['company_name']))
					array_push($errors, ['company_name','{$lang.not_empty_company_name}']);

				if (!isset($_POST['company_address']) OR empty($_POST['company_address']))
					array_push($errors, ['company_address','{$lang.not_empty_company_address}']);

				if (!isset($_POST['contact_name']) OR empty($_POST['contact_name']))
					array_push($errors, ['contact_name','{$lang.not_empty_contact_name}']);

				if (!isset($_POST['contact_phone']) OR empty($_POST['contact_phone']))
					array_push($errors, ['contact_phone','{$lang.not_empty_contact_phone}']);

				if (!isset($_POST['contact_email']) OR empty($_POST['contact_email']))
					array_push($errors, ['contact_email','{$lang.not_empty_contact_email}']);

				if (!isset($_POST['tests_quantity']) OR empty($_POST['tests_quantity']))
					array_push($errors, ['tests_quantity','{$lang.not_empty_tests_quantity}']);

				if (empty($errors))
				{
					$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
					$recaptcha_secret = '6LdgUVAaAAAAAKRUlNJfgsAdnXcjIA9eWRd0BIss';

					if ($_POST['action'] == 'cotiza_antigeno')
						$recaptcha_response = $_POST['recaptcha_2'];
					else if ($_POST['action'] == 'cotiza_anticuerpo')
						$recaptcha_response = $_POST['recaptcha_3'];

					$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
					$recaptcha = json_decode($recaptcha);

					if ($recaptcha->success = true AND $recaptcha->score >= 0.7)
					{
						$mail = new Mailer(true);

						try
						{
							$mail->setFrom('noreply@one-consultores.com', Configuration::$web_page);
							$mail->addAddress('info@one-consultores.com', Configuration::$web_page);

							if ($_POST['action'] == 'cotiza_antigeno')
								$mail->Subject .= 'Cotización | Prueba Antigeno';
							else if ($_POST['action'] == 'cotiza_anticuerpo')
								$mail->Subject .= 'Cotización | Prueba Anticuerpo';

							$mail->Body = 'Nombre de la empresa: ' . $_POST['company_name'] . ', Dirección de la empresa: ' . $_POST['company_address'] . ', Nombre de contacto: ' . $_POST['contact_name'] . ', Teléfono de contacto: ' . $_POST['contact_phone'] . ', Email de contacto: ' . $_POST['contact_email'] . ', Cantidad de pruebas: ' . $_POST['tests_quantity'];
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

			if ($_POST['action'] == 'cotiza_socioeconomico')
			{
				$errors = [];

				if (!isset($_POST['company_name']) OR empty($_POST['company_name']))
					array_push($errors, ['company_name','{$lang.not_empty_company_name}']);

				if (!isset($_POST['company_rfc']) OR empty($_POST['company_rfc']))
					array_push($errors, ['company_rfc','{$lang.not_empty_company_rfc}']);

				if (!isset($_POST['company_address']) OR empty($_POST['company_address']))
					array_push($errors, ['company_address','{$lang.not_empty_company_address}']);

				if (!isset($_POST['company_rot']) OR empty($_POST['company_rot']))
					array_push($errors, ['company_rot','{$lang.not_empty_company_rot}']);

				if (!isset($_POST['contact_name']) OR empty($_POST['contact_name']))
					array_push($errors, ['contact_name','{$lang.not_empty_contact_name}']);

				if (!isset($_POST['contact_phone']) OR empty($_POST['contact_phone']))
					array_push($errors, ['contact_phone','{$lang.not_empty_contact_phone}']);

				if (!isset($_POST['contact_email']) OR empty($_POST['contact_email']))
					array_push($errors, ['contact_email','{$lang.not_empty_contact_email}']);

				if (empty($errors))
				{
					$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
					$recaptcha_secret = '6LdgUVAaAAAAAKRUlNJfgsAdnXcjIA9eWRd0BIss';
					$recaptcha_response = $_POST['recaptcha_4'];
					$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
					$recaptcha = json_decode($recaptcha);

					if ($recaptcha->success = true AND $recaptcha->score >= 0.7)
					{
						$mail = new Mailer(true);

						try
						{
							$mail->setFrom('noreply@one-consultores.com', Configuration::$web_page);
							$mail->addAddress('info@one-consultores.com', Configuration::$web_page);
							$mail->Subject .= 'Cotización | Estudio socioeconómico';
							$mail->Body = 'Nombre de la empresa: ' . $_POST['company_name'] . 'RFC de la empresa: ' . $_POST['rfc'] . ', Dirección de la empresa: ' . $_POST['company_address'] . ', Rotación de empleados por mes: ' . $_POST['company_rot'] . ', Nombre de contacto: ' . $_POST['contact_name'] . ', Teléfono de contacto: ' . $_POST['contact_phone'] . ', Email de contacto: ' . $_POST['contact_email'];
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
		}
		else
		{
			$template = $this->view->render($this, 'index');

			define('_title', Configuration::$web_page . ' | {$lang.home}');

			echo $template;
		}
	}
}
