<?php

namespace Discodian\Parts\Socket;

use Discodian\Parts\Part;

/**
 * Tells the client that the voice channel's server has changed.
 *
 * @property string $token
 * @property Guild $guild
 * @property string $guild_id
 * @property string $endpoint
 */
class VoiceServerUpdate extends Part
{
}
