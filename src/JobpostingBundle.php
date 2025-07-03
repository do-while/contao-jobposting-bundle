<?php

declare(strict_types=1);

/**
 * Extension for Contao 5
 *
 * @copyright  Softleister 2019-2025
 * @author     Softleister <info@softleister.de>
 * @package    contao-jobposting-bundle
 * @licence    LGPL-3.0
 */

namespace Softleister\JobpostingBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;


class JobpostingBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
