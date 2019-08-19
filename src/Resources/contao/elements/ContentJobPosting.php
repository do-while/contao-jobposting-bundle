<?php

/**
 * Extension for Contao 4
 *
 * @copyright  Softleister 2019
 * @author     Softleister <info@softleister.de>
 * @package    contao-jobposting-bundle
 * @licence    LGPL-3.0
 */

namespace Softleister\JobpostingBundle;

/**
 * Front end content element "ContentJobPosting".
 */
class ContentJobPosting extends \ContentElement
{
    //--- Template ---
    protected $strTemplate = 'ce_jobposting';

    //--- Modulausgabe ---
    public function generate()
    {
        if( TL_MODE == 'BE' ) {
            $objTemplate = new \BackendTemplate( 'be_wildcard' );
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
