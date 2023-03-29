<?php
declare(strict_types=1);

namespace CodelyTv\Mooc\Users\Application;

use CodelyTv\Mooc\Users\Domain\User;
use CodelyTv\Mooc\Users\Domain\UserRepository;

final class UserCreator
{
	private $repository;

	public function __construct(UserRepository $repository)
	{
		$this->repository = $repository;
	}

	public function __invoke(
		string $id,
		string $name,
		string $lastname,
		string $birthdate): void
	{
		$user = new User ($id, $name, $lastname, $birthdate);

		$this->repository->save($user);
	}
}
