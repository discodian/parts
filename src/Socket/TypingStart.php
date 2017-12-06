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

namespace Discodian\Parts\Socket;

use Carbon\Carbon;
use Discodian\Parts\Channel\Channel;
use Discodian\Parts\User\User;
use Discodian\Parts\Part;

/**
 * A TypingStart part is used when the `TYPING_START` event is fired on the WebSocket. It contains
 * information such as when the event was fired and then channel it was fired in.
 *
 * @property User $user
 * @property string $user_id
 * @property Carbon $timestamp
 * @property Channel $channel
 * @property string $channel_id
 */
class TypingStart extends Part
{
}
