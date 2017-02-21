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

class WelcomeController  extends Controller
{


	/**
	 * @Route("/welcome", name="welcome")
	 */
	public function showAction()
	{
		return new Response('Hello');
	}
}