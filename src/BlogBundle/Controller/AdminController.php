<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 23.02.2017
 * Time: 14:13
 */

namespace BlogBundle\Controller;

use BlogBundle\Entity\Blog;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use BlogBundle\Forms\BlogType;


class AdminController extends Controller
{

	public function adminAction()
	{
		return new Response('<html><body>Admin page!</body></html>');
	}

	public function createBlogAction()
	{
		$blog = new Blog();
		//$form = new $this->createForm(createBlog::class, $blog);
		$form = $this->createForm(BlogType::class, $blog);

		return $this->render('BlogBundle:Blog:form.html.twig', ['form' => $form->createView()]);

	}
}