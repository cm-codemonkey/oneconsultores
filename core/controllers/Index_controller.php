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
					$header_mail  = 'MIME-Version: 1.0' . "\r\n";
					$header_mail .= 'Content-type: text/html; charset=utf-8' . "\r\n";
					$header_mail .= 'From: ' . Configuration::$web_page . ' <noreply@one-consultores.com>' . "\r\n";

					if ($_POST['action'] == 'cotiza_antigeno')
						$subject_mail .= 'Cotización | Prueba Antigeno';
					else if ($_POST['action'] == 'cotiza_anticuerpo')
						$subject_mail .= 'Cotización | Prueba Anticuerpo';

					$body_mail = 'Nombre de la empresa: ' . $_POST['company_name'] . ', Dirección de la empresa: ' . $_POST['company_address'] . ', Nombre de contacto: ' . $_POST['contact_name'] . ', Teléfono de contacto: ' . $_POST['contact_phone'] . ', Email de contacto: ' . $_POST['contact_email'] . ', Cantidad de pruebas: ' . $_POST['tests_quantity'];

				    mail('info@one-consultores.com', $subject_mail, $body_mail, $header_mail);

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
					$header_mail  = 'MIME-Version: 1.0' . "\r\n";
					$header_mail .= 'Content-type: text/html; charset=utf-8' . "\r\n";
					$header_mail .= 'From: ' . Configuration::$web_page . ' <noreply@one-consultores.com>' . "\r\n";
					$subject_mail .= 'Cotización | Estudio socioeconómico';
					$body_mail = 'Nombre de la empresa: ' . $_POST['company_name'] . 'RFC de la empresa: ' . $_POST['rfc'] . ', Dirección de la empresa: ' . $_POST['company_address'] . ', Rotación de empleados por mes: ' . $_POST['company_rot'] . ', Nombre de contacto: ' . $_POST['contact_name'] . ', Teléfono de contacto: ' . $_POST['contact_phone'] . ', Email de contacto: ' . $_POST['contact_email'];

				    mail('info@one-consultores.com', $subject_mail, $body_mail, $header_mail);

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
		}
		else
		{
			$template = $this->view->render($this, 'index');

			define('_title', Configuration::$web_page . ' | {$lang.home}');

			echo $template;
		}
	}
}
