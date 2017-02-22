<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 22.02.2017
 * Time: 17:17
 */

namespace BlogBundle\DataFixtures\ORM;

use BlogBundle\Entity\AboutUs;
use BlogBundle\Entity\Article;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DefaultAboutUsData implements FixtureInterface
{

	/**
	 * Load data fixtures with the passed EntityManager
	 *
	 * @param ObjectManager $manager
	 */
	public function load(ObjectManager $manager)
	{
		// TODO: Implement load() method.
		$about_us = new AboutUs();

		$about_us->setLocation('Geroev Stalingrada');
		$about_us->setName('Blog test');
		$about_us->setText('
		 * Load data fixtures with the passed EntityManager
	 *
	 * @param ObjectManager $manager');
		$manager->persist($about_us);
		$manager->flush();

	}
}