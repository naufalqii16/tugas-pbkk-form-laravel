<?php

namespace App\Http\TA\Application\Service\CreateTopik;

use App\Http\TA\Domain\Enum\StatusTopik;

class CreateTopikRequest
{
    public function __construct(
        private string $name,
        private string $email,
        private StatusTopik $status,
    )
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getStatus(): StatusTopik
    {
        return $this->status;
    }
}
