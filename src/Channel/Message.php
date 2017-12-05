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

use Carbon\Carbon;
use Discodian\Parts\Part;
use Discodian\Parts\User\Member;
use Discodian\Parts\User\User;

/**
 * A message which is posted to a Discord text channel.
 *
 * @property string $id
 * @property Channel $channel
 * @property string $channel_id
 * @property string $content
 * @property int $type
 * @property Collection[User] $mentions
 * @property User $author
 * @property bool $mention_everyone
 * @property Carbon $timestamp
 * @property Carbon|null $edited_timestamp
 * @property bool $tts
 * @property array $attachments
 * @property Collection[Embed] $embeds
 * @property string|null $nonce
 * @property Collection[Role] $mention_roles
 * @property bool $pinned
 */
class Message extends Part
{
}
