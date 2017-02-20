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
	 * Matches /blog exactly
	 *
	 * @Route("/blog", name="blog_list")
	 */
	public function listAction()
	{
		return  new Response(__METHOD__);
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

		// ...
		return new Response(__METHOD__.', params:'.$slug);
	}
}