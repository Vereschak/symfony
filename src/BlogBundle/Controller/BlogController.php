<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 21.02.2017
 * Time: 16:48
 */

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{

	public function homepageAction()
	{
		return $this->render('::base.html.twig');
	}

	public function blogViewAction($id)
	{

		$em = $this->getDoctrine();
		$blogRepository = $em->getRepository('BlogBundle:Blog');
		$blog = $blogRepository->find($id);

		return $this->render('BlogBundle:Blog:view.html.twig', ['blog' => $blog]);
	}

	/**
	 * list og blogs
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function teaserAction()
	{

		$em = $this->getDoctrine();
		$blogRepository = $em->getRepository('BlogBundle:Blog');
		$blogs = $blogRepository->findAll();

		return $this->render('BlogBundle:Blog:teaser.html.twig', ['blogs' => $blogs]);
	}

	/**
	 * page about as
	 */
	public function aboutAsAction()
	{
		$em = $this->getDoctrine();
		$about_us_repo = $em->getRepository('BlogBundle:AboutUs');
		$about_us = $about_us_repo->find(2);
		return $this->render('BlogBundle:Blog:about_us.html.twig', ['about_us' => $about_us]);
	}

}