<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 20.02.2017
 * Time: 15:08
 */
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LuckyController extends Controller
{
	/**
	 * @Route("/lucky/number")
	 */
	public function numberAction()
	{
		$number = mt_rand(0, 100);

		return $this->render('lucky/number.html.twig', array(
			'number' => $number,
		));
	}
}