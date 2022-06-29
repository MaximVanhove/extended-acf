<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/vinkla/extended-acf
 */

declare(strict_types=1);

namespace Extended\ACF\Fields\Settings;

trait CharacterLimit
{
    public function characterLimit(int $limit): static
    {
        $this->settings['maxlength'] = $limit;

        return $this;
    }
}
