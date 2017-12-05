<?php


namespace Discodian\Parts\Guild;

use Discodian\Parts\Part;
use Discodian\Parts\User\User;

/**
 * A Ban is a ban on a user specific to a guild. It is also IP based.
 *
 * @property User $user
 * @property Guild $guild
 * @property string|null
 */
class Ban extends Part
{
}
