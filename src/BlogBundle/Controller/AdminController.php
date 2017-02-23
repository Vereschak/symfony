<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 23.02.2017
 * Time: 14:13
 */

namespace BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdminController extends Controller
{

	public function adminAction()
	{
		return new Response('<html><body>Admin page!</body></html>');
	}
}