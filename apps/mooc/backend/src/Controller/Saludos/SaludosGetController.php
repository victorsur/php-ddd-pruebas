<?php

declare(strict_types=1);

namespace CodelyTv\Apps\Mooc\Backend\Controller\Saludos;

use CodelyTv\Shared\Domain\CurrentDateGenerator;
use CodelyTv\Tests\Shared\Infrastructure\ConstantCurrentDateGenerator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

final class SaludosGetController
{
	private string $date;

	public function __construct(ConstantCurrentDateGenerator $date)
	{
		$this->date = $date->generate();
	}

    public function __invoke(string $name, Request $request): JsonResponse
    {
        return new JsonResponse(
            [
                'status' => 'ok',
                'Todo va fino querido' => $name, // (string) $request->request->get('name')
				'date' => $this->date,
            ]
        );
    }
}
