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

//-------------------------------------------------------------------------
// Add content element
//-------------------------------------------------------------------------
$GLOBALS['TL_CTE']['includes']['jobposting'] = 'Softleister\JobpostingBundle\ContentJobPosting';
