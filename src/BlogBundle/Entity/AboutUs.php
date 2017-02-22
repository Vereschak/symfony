<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 22.02.2017
 * Time: 16:37
 */

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class AboutUs
 * @package BlogBundle\Entity
 * @ORM\Table(name="about_us")
 * @ORM\Entity
 */
class AboutUs
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string")
	 */
	private $name;

	/**
	 * @ORM\Column(type="text")
	 */
	private $text;
	/**
	 * @ORM\Column(type="text")
	 */
	private $location;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return AboutUs
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return AboutUs
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return AboutUs
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
}
