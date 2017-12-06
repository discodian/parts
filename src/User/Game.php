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
