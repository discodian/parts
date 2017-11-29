<?php

namespace Discodian\Parts;

use Discodian\Parts\Contracts\Registry as Contract;
use Illuminate\Support\Collection;

class Registry implements Contract
{
    public function index(): array
    {
        return [
            'guild' => Guild\Guild::class,
            'user' => User\User::class
        ];
    }

    public function get(string $part): ?string
    {
        return (new Collection($this->index()))->get($part);
    }
}
