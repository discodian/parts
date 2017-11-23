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

namespace Discodian\Parts\Guild;

use Discodian\Core\Database\Persists;
use Discodian\Parts\Part;

/**
 * @property string $id
 * @property string $name
 * @property string $icon
 * @property string $icon_hash
 * @property string $region
 * @property string $owner_id
 * @property Carbon $joined_at
 * @property string $afk_channel_id
 * @property int $afk_timeout
 * @property bool $embed_enabled
 * @property string $embed_channel_id
 * @property array|string[] $features
 * @property string $splash
 * @property string $splash_hash
 * @property bool $large
 * @property int $verification_level
 * @property int $member_count
 */
class Guild extends Part
{
    use Persists;

    protected $endpoints = [
        'all' => 'users/@me/guilds',
        'get' => 'guilds/:id',
        'create' => 'guilds',
        'update' => 'guilds/:id',
        'delete' => 'guilds/:id',
        'leave' => 'users/@me/guilds/:id',
    ];
}
