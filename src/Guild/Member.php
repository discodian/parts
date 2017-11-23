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

namespace Discodian\Parts\Guild;

use Illuminate\Support\Carbon;
use Discodian\Parts\Part;

/**
 * @property bool $deaf
 * @property Carbon $joined_at
 * @property bool $mute
 * @property string $nick
 */
class Member extends Part
{
}
