<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 23.02.2017
 * Time: 13:28
 */

namespace BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PageController extends Controller
{
	/**
	 * @return Response
	 */
	public function showAction()
	{
		$naming = $this->get('service.naming');
		$naming->setName('Danil');
		$name = $naming->getName();
		return new Response('<h1>Hello '.$name.'</h1>');
	}
}