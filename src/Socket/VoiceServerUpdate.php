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
