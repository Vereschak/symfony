<?php
/**
 * Created by PhpStorm.
 * User: User_number2
 * Date: 23.02.2017
 * Time: 18:15
 */

namespace BlogBundle\Forms;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BlogType extends  AbstractType
{
	public  function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('title')
			->add('body')
			->add('save', SubmitType::class)
		;
	}

}