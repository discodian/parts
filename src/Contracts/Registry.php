<?php

namespace Discodian\Parts\Contracts;

interface Registry
{
    public function index(): array;

    public function get(string $part): ?string;
}
