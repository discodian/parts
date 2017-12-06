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

use Discodian\Parts\Guild\Guild;
use Discodian\Parts\Part;
use Discodian\Parts\User\User;
use Discodian\Parts\User\Game;
use Illuminate\Support\Collection;

/**
 * A PresenceUpdate part is used when the `PRESENCE_UPDATE` event is fired on the WebSocket. It contains
 * information about the users presence suck as their status (online/away) and their current game.
 *
 * @property User $user
 * @property Collection[Role] $roles
 * @property Guild $guild
 * @property string $guild_id
 * @property string $status
 * @property Game $game
 */
class PresenceUpdate extends Part
{
}
