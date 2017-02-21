<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 21.02.2017
 * Time: 15:47
 */

namespace TestBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
	public function testAction()
	{
		var_dump('test');
		return $this->render('::base.html.twig');
	}
}