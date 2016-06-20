<?php
/**
 *
 * Author 	   : Jaswant Singh [jaswant.singh@practo.com][Joney_000]
 * Description : Sample User Entity
 * Target 	   : Used for CRUD operation through ORM , Holds user info
 * Date        : 20-June-2016
 * Algorithms  : None [Brute Frc]
 */
class User
{
	private $name;
	private $age;

	public function getName()
	{
		return $this->name;
	}
	public function setName($name)
	{
		$this->name= $name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
	public function setAde($name)
	{
		$this->age= $name;
	}
}