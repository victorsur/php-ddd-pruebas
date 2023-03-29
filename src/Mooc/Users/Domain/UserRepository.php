<?php
declare(strict_types=1);

namespace CodelyTv\Mooc\Users\Domain;

use CodelyTv\Mooc\Users\Domain\User;

interface UserRepository
{
	public function save (User $user): void;
}
