<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 23.02.2017
 * Time: 13:32
 */

namespace BlogBundle\Services;


class Naming
{
	private $name;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

}