<?php

namespace Discodian\Parts\User;

use Discodian\Parts\Part;

/**
 * The Game part defines what game the user is playing at the moment.
 *
 * @property string $name
 * @property string $url
 * @property int $type
 */
class Game extends Part
{
    const TYPE_PLAYING = 0;
    const TYPE_STREAMING = 1;
}
