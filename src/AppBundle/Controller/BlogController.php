<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 20.02.2017
 * Time: 15:24
 */
// src/AppBundle/Controller/BlogController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
	/**
	 * @Route("/blog/{page}", name="blog_list", requirements={"page": "\d+"})
	 */
	/*
	 * blog_show name in config.php routing.yml
	 * */
	public function listAction($page)
	{
		return new Response(__METHOD__. ', params page:' . $page);
		// ...
	}

	/**
	 * Matches /blog/*
	 *
	 * @Route("/blog/{slug}", name="blog_show")
	 */
	public function showAction($slug)
	{
		// $slug will equal the dynamic part of the URL
		// e.g. at /blog/yay-routing, then $slug='yay-routing'

		//generate url
		//url:/my_project/web/app_dev.php/blog/my-blog-post
		$url = $this->generateUrl(
			'blog_show',
			array('slug' => 'my-blog-post')
		);

		//url:/my_project/web/app_dev.php/blog/slug?page=2&category=Symfony
		$url = $this->get('router')->generate('blog_show', array(
			'slug' => 'slug',
			'page' => 2,
			'category' => 'Symfony'
		));

		return new Response('url:'.$url);
		//return new Response(__METHOD__ . ', params:' . $slug);
	}
}