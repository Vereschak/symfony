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

class ArticleController  extends Controller
{

	/*public function showAction($_locale, $year, $slug,$_format)
	{
		return new Response(BlogController::showAction(111));
		//return new Response('locale:'.$_locale.'; year:'.$year.'; slug:'.$slug.'; format:'.$_format);
	}*/

	/**
	 * @Route("/article/{slug}", name="article_show")
	 */
	public function showAction($slug)
	{
		return new Response($this->render('article/recent_list.html.twig', array(
			'article' => $slug,
		)));
	}
}