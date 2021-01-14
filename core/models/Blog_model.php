<?php

defined('_EXEC') or die;

class Blog_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_articles_blog()
	{
		return $this->database->select("blog", [
			"[>]blog_categories" => [
				"id_category" => "id"
			],
			"[>]users" => [
				"author" => "id"
			]
		], [
			'blog.url',
			'blog.title [Object]',
			'blog.image',
			'blog.article [JSON]',
			'blog.publication_date',
			'users.username (author)',
		], [
			'status' => 'published',
			'ORDER' => [
				'blog.publication_date' => 'DESC'
			]
		]);
	}

	public function get_article_blog( $url = null )
	{
		if ( is_null($url) )
			return null;

		$response = $this->database->select("blog", [
			"[>]blog_categories" => [
				"id_category" => "id"
			],
			"[>]users" => [
				"author" => "id"
			]
		], [
			'blog.url',
			'blog.title [Object]',
			'blog_categories.category',
			'blog.image',
			'blog.article [JSON]',
			'blog.sm_title [Object]',
			'blog.sm_description [Object]',
			'blog.sm_image',
			'blog.publication_date',
			'blog.tags [Object]',
			'users.username (author)'
		], [
			'blog.url' => $url
		]);

		return ( isset($response[0]) && !empty($response[0]) ) ? $response[0] : null;
	}
}
