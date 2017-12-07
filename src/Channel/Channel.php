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

namespace Discodian\Parts\Channel;

use Discodian\Parts\Part;

/**
 * @property int $id
 * @property int $bitrate
 * @property int $guild_id
 * @property bool $is_private
 * @property int $last_message_id
 * @property string $name
 * @property int $position
 * @property string $topic
 * @property string $type
 * @property int $user_limit
 */
class Channel extends Part
{
    const TYPE_TEXT = 0;
    const TYPE_DM = 1;
    const TYPE_VOICE = 2;
    const TYPE_GROUP = 3;

    protected $endpoints = [
        'get' => 'channels/:id',
    ];
}
