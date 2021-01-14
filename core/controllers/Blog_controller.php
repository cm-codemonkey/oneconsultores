<?php

defined('_EXEC') or die;

class Blog_controller extends Controller
{
	private $lang;

	public function __construct()
	{
		parent::__construct();

		$this->lang = Session::get_value('lang');
	}

	public function index()
	{
		global $articles;

		$articles = $this->model->get_articles_blog();

		$template = $this->view->render($this, 'index');

		define('_title', Configuration::$web_page . ' | {$lang.blog}');

		echo $template;
	}

	public function view( $params )
	{
		global $article;
		$article = $this->model->get_article_blog( $params[0] );

		if ( !is_null($article) )
		{
			define('_title', $article['title'][Configuration::$lang_default] .' | {$lang.blog}');
			$template = $this->view->render('Blog', 'article');

			echo $template;
		}
		else
			Errors::http('404');
	}
}
