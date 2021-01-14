<?php

defined('_EXEC') or die;

class Services_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$template = $this->view->render($this, 'index');

		define('_title', Configuration::$web_page . ' | {$lang.services}');

		echo $template;
	}

	public function accountants()
	{
		$template = $this->view->render($this, 'accountants');

		define('_title', Configuration::$web_page . ' | {$lang.services} | {$lang.accountants}');

		echo $template;
	}

	public function fiscals()
	{
		$template = $this->view->render($this, 'fiscals');

		define('_title', Configuration::$web_page . ' | {$lang.services} | {$lang.fiscals}');

		echo $template;
	}

	public function marketing()
	{
		$template = $this->view->render($this, 'marketing');

		define('_title', Configuration::$web_page . ' | {$lang.services} | {$lang.marketing}');

		echo $template;
	}

	public function software()
	{
		$template = $this->view->render($this, 'software');

		define('_title', Configuration::$web_page . ' | {$lang.services} | {$lang.software}');

		echo $template;
	}

	public function legals()
	{
		$template = $this->view->render($this, 'legals');

		define('_title', Configuration::$web_page . ' | {$lang.services} | {$lang.legals}');

		echo $template;
	}

	public function human_resources()
	{
		$template = $this->view->render($this, 'human_resources');

		define('_title', Configuration::$web_page . ' | {$lang.services} | {$lang.human_resources}');

		echo $template;
	}

	public function psychology()
	{
		$template = $this->view->render($this, 'psychology');

		define('_title', Configuration::$web_page . ' | {$lang.services} | {$lang.psychology}');

		echo $template;
	}

	public function polygraph()
	{
		$template = $this->view->render($this, 'polygraph');

		define('_title', Configuration::$web_page . ' | {$lang.services} | {$lang.polygraph}');

		echo $template;
	}

	public function work_medicine()
	{
		$template = $this->view->render($this, 'work_medicine');

		define('_title', Configuration::$web_page . ' | {$lang.services} | {$lang.work_medicine}');

		echo $template;
	}

	public function laboratory()
	{
		$template = $this->view->render($this, 'laboratory');

		define('_title', Configuration::$web_page . ' | {$lang.services} | {$lang.laboratory}');

		echo $template;
	}
}
