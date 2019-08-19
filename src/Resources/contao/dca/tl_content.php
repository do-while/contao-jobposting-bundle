<?php

/**
 * Extension for Contao 4
 *
 * @copyright  Softleister 2019
 * @author     Softleister <info@softleister.de>
 * @package    contao-jobposting-bundle
 * @licence    LGPL-3.0
 */


/**
 * Callbacks
 */
$GLOBALS['TL_DCA']['tl_content']['config']['onsubmit_callback'][] = array('tl_content_jobposting', 'updateJson');


/**
 * Table tl_content
 */
 $GLOBALS['TL_DCA']['tl_content']['palettes']['jobposting'] = '{type_legend},type,headline,jobIdent;'
                                                             .'{desc_legend},text;'
                                                             .'{company_legend},jobCompany,url;'
                                                             .'{job_legend},jobEmptype,jobWorkHours,jobPostal,jobCity,jobStreet,jobCountry,jobRemote;'
															 .'{salary_legend},jobSalary,jobInterval;'
															 .'{conditions_legend},jobRespon,jobSkills,jobQuali,jobEdu,jobExp;'
															 .'{code_legend:hide},jobJson;'
                                                             .'{expert_legend:hide},guests,cssID,space;'
                                                             .'{invisible_legend:hide},invisible,start,stop';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['jobIdent'] = array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobIdent'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>64, 'tl_class'=>'w50'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        );

//-------

$GLOBALS['TL_DCA']['tl_content']['fields']['jobCompany'] = array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobCompany'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        );

//-------

$GLOBALS['TL_DCA']['tl_content']['fields']['jobEmptype'] = array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobEmptype'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'options'                 => array('FULL_TIME', 'PART_TIME', 'CONTRACTOR', 'TEMPORARY', 'INTERN', 'VOLUNTEER', 'PER_DIEM', 'OTHER'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_content']['jobEmptypes'],
            'eval'                    => array('multiple'=>true, 'tl_class'=>'w50'),
            'sql'                     => "blob NULL"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobWorkHours'] = array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobWorkHours'],
            'exclude'                 => true,
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobPostal'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobPostal'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>32, 'tl_class'=>'clr w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobCity'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobCity'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobStreet'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobStreet'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobCountry'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobCountry'],
			'exclude'                 => true,
			'filter'                  => true,
			'sorting'                 => true,
			'inputType'               => 'select',
			'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
			'options_callback' => function ()
			{
				return System::getCountries();
			},
			'sql'                     => "varchar(2) NOT NULL default ''"
		);

$GLOBALS['TL_DCA']['tl_content']['fields']['jobRemote'] = array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobRemote'],
            'exclude'                 => true,
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
		);

//-------

$GLOBALS['TL_DCA']['tl_content']['fields']['jobSalary'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobSalary'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>10, 'rgxp'=>'digit', 'tl_class'=>'w50'),
			'sql'                     => "varchar(10) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobInterval'] = array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobInterval'],
            'default'                 => 'MONTH',
            'exclude'                 => true,
            'inputType'               => 'select',
            'options'                 => array('HOUR', 'DAY', 'WEEK', 'MONTH', 'YEAR'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_content']['jobIntervals'],
            'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(8) NOT NULL default ''"
        );

//-------

$GLOBALS['TL_DCA']['tl_content']['fields']['jobRespon'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobRespon'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobSkills'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobSkills'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobQuali'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobQuali'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobEdu'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobEdu'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobExp'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobExp'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobJson'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['jobJson'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('readonly'=>true, 'allowHtml'=>true, 'class'=>'monospace'),
			'sql'                     => "blob NULL"
        );


//-------------------------------------------------------------------
//	tl_content_jobposting
//-------------------------------------------------------------------
class tl_content_jobposting extends \Backend
{
    //-----------------------------------------------------------------
    //  Update JSON - Snippet
    //-----------------------------------------------------------------
	public function updateJson( $dc )
	{
		// Return if there is no active record (override all)
		if( !$dc->activeRecord ) {
			return;
		}

		$objCte = ContentModel::findByPk( $dc->id );

		if( ($objCte === null) || ($objCte->type !== 'jobposting') ) {
			return;
		}

		$arrSet = array();
		if( empty( $objCte->start ) ) {												// Startdatum wird als datePosted gesetzt, wenn leer
			$arrSet['start'] = time();
		}

		// Template vorbereiten
        $this->Template = new \FrontendTemplate( 'ce_jobpost_json' );
		$this->Template->jobposting = $objCte->row();								// Alle Spalten ins Template übernehmen

		$this->Template->headline = \StringUtil::deserialize( $objCte->headline );	// Einige Daten aufbereiten
		$this->Template->cssID = \StringUtil::deserialize( $objCte->cssID );
		$arrEmp = \StringUtil::deserialize( $objCte->jobEmptype );
		$this->Template->jobEmptype = implode( ',', $arrEmp );

		$this->Template->datePosted = empty( $objCte->start ) ? $arrSet['start'] : $objCte->start;

		// Template parsen, InsertTags ersetzen und mit dem Datensatz speichern
        $arrSet['jobJson'] = \Controller::replaceInsertTags( $this->Template->parse(), false );
		$this->Database->prepare( "UPDATE tl_content %s WHERE id=?" )->set( $arrSet )->execute( $dc->id );

		return;
	}


	//-----------------------------------------------------------------
}
