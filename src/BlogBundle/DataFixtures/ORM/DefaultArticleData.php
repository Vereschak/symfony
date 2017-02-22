<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 21.02.2017
 * Time: 18:58
 */

namespace BlogBundle\DataFixtures\ORM;


use BlogBundle\Entity\Blog;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DefaultArticleData implements FixtureInterface
{

	/**
	 * Load data fixtures with the passed EntityManager
	 *
	 * @param ObjectManager $manager
	 */
	public function load(ObjectManager $manager)
	{
		// TODO: Implement load() method.
		$blog = new Blog();
		$blog->setTitle("This is title 5");
		$blog->setBody("This is body");
		$blog->setSummary("This is b..");

		/*update table*/
		$manager->persist($blog);
		$manager->flush();
	}
}