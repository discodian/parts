<?php

namespace Discodian\Parts\Socket;

use Discodian\Parts\Guild\Channel;
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
