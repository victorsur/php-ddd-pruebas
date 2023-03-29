<?php

declare(strict_types=1);

namespace CodelyTv\Apps\Mooc\Backend\Controller\Users;

use CodelyTv\Mooc\Courses\Application\Create\CreateUserCommand;
use CodelyTv\Mooc\Users\Application\UserCreator;
use CodelyTv\Shared\Infrastructure\Symfony\ApiController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class UsersPutController
{
	private $creator;

	public function __construct(UserCreator $creator) {

		$this->creator = $creator;
	}

	public function __invoke(string $id, Request $request): Response
    {

                $name = (string) $request->get('name');
                $lastname = $request->get('lastname');
				$birthday = $request->get('birthday');

				$this->creator->__invoke($id, $name, $lastname, $birthday);

        return new Response('', Response::HTTP_CREATED);
    }
}
