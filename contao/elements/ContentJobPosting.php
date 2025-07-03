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

use Contao\System;
use Contao\ContentElement;
use Contao\BackendTemplate;

/**
 * Front end content element "ContentJobPosting".
 */
class ContentJobPosting extends ContentElement
{
    //--- Template ---
    protected $strTemplate = 'ce_jobposting';

    //--- Modulausgabe ---
    public function generate()
    {
        $container = System::getContainer( );
        $request = $container->get( 'request_stack' )->getCurrentRequest( );

        if( $request && $container->get( 'contao.routing.scope_matcher' )->isBackendRequest( $request ) ) {
            $objTemplate = new BackendTemplate( 'be_wildcard' );
            $objTemplate->wildcard = '### JobPosting Markup ###';

            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;

            return $objTemplate->parse();
        }
        return parent::generate();
    }

    protected function compile()
    {
    }


    //----------------------------------------------------------------------
}
