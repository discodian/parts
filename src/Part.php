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

namespace Discodian\Parts;

use Discodian\Core\Requests\InteractsWithApi;
use Illuminate\Support\Fluent;

abstract class Part extends Fluent
{
    use InteractsWithApi;

    public function getKey()
    {
        return $this->id;
    }
}
