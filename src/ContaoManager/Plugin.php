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

namespace Softleister\JobpostingBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Softleister\JobpostingBundle\JobpostingBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;


class Plugin implements BundlePluginInterface
{
    public function getBundles( ParserInterface $parser )
    {
        return [
            BundleConfig::create( JobpostingBundle::class )
                ->setLoadAfter( [ContaoCoreBundle::class] ),
        ];
    }
}
