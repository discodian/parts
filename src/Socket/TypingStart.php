<?php

namespace Discodian\Parts\Socket;

use Carbon\Carbon;
use Discodian\Parts\Guild\Channel;
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
