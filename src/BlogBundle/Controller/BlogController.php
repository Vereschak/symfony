<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 21.02.2017
 * Time: 16:48
 */

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends  Controller
{

	public function homepageAction()
	{
		return $this->render('::base.html.twig');
	}
}