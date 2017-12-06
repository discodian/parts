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

use Discodian\Parts\Channel\Channel;
use Discodian\Parts\Guild\Guild;
use Discodian\Parts\Part;

/**
 * Notifies the client of voice state updates about users.
 *
 * @property Channel $channel
 * @property string $channel_id
 * @property bool $deaf
 * @property Guild $guild
 * @property string $guild_id
 * @property bool $mute
 * @property bool $self_deaf
 * @property bool $self_mute
 * @property string $session_id
 * @property string $suppress
 * @property string $user_id
 */
class VoiceStateUpdate extends Part
{
}
