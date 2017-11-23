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

namespace Discodian\Parts\User;

use Discodian\Parts\Part;

/**
 * @property string $username
 * @property bool $verified
 * @property null $email
 * @property string $discriminator
 * @property string $avatar
 * @property bool $bot
 */
class User extends Part
{
    protected $endpoints = [
        'get' => 'users/:id'
    ];
}
