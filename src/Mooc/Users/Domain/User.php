<?php
declare(strict_types=1);

namespace CodelyTv\Mooc\Users\Domain;

class User
{
	private $id;
	private $name;
	private $lastname;
	private $birthday;

	public function __construct(
		string $id,
		string $name,
		string $lastname,
		string $birthday
	)
	{
		$this->id = $id;
		$this->name = $name;
		$this->lastname = $lastname;
		$this->birthday = $birthday;

	}
}
