<?php
declare(strict_types=1);

namespace CodelyTv\Tests\Mooc\Users\Application;

use CodelyTv\Mooc\Users\Application\UserCreator;
use CodelyTv\Mooc\Users\Domain\User;
use CodelyTv\Mooc\Users\Domain\UserRepository;
use PHPUnit\Framework\TestCase;
class UserCreatorTest extends TestCase
{
	/** @test  */
	public function it_should_create_a_valid_user(): void
	{
		$repository = $this->createMock(UserRepository::class);
		$creator = new UserCreator($repository);
		$id = 'some-id';
		$name = 'some-name';
		$lastname = 'some-lastname';
		$birthday = 'some-birthday';

		$user = new User($id, $name, $lastname, $birthday);

		$repository->method('save')->with($user);

		$creator->__invoke($id, $name, $lastname, $birthday);
	}
}
