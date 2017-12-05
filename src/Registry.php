<?php

/*
 * This file is part of the Discodian bot toolkit.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see http://discodian.com
 * @see https://github.com/discodian
 */

namespace Discodian\Parts;

use Discodian\Parts\Contracts\Registry as Contract;
use Illuminate\Support\Collection;

class Registry implements Contract
{
    public function index(): array
    {
        return [
            'channel' => Guild\Channel::class,
            'embed' => Guild\Embed::class,
            'emoji' => Guild\Emoji::class,
            'guild' => Guild\Guild::class,
            'member' => Guild\Member::class,
            'role' => Guild\Role::class,
            'user' => User\User::class,
            'owner' => User\User::class,
        ];
    }

    public function get(string $part): ?string
    {
        return (new Collection($this->index()))->get($part);
    }
}
