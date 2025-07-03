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


use Contao\System;
use Contao\Backend;
use Contao\Controller;
use Contao\FilesModel;
use Contao\StringUtil;
use Contao\Environment;
use Contao\FrontendTemplate;

/**
 * Callbacks
 */
$GLOBALS['TL_DCA']['tl_content']['config']['oncreate_version_callback'][] = array('tl_content_jobposting', 'updateJson');


/**
 * Table tl_content
 */
 $GLOBALS['TL_DCA']['tl_content']['palettes']['jobposting'] = '{type_legend},type,headline,jobIdent;'
                                                             .'{desc_legend},text;'
                                                             .'{company_legend},jobCompany,url,jobLogo;'
                                                             .'{job_legend},jobEmptype,jobWorkHours,jobPostal,jobCity,jobStreet,jobRegion,jobCountry,jobRemote;'
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
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>64, 'tl_class'=>'w50'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        );

//-------

$GLOBALS['TL_DCA']['tl_content']['fields']['jobCompany'] = array
        (
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobLogo'] = array
        (
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'filesOnly'=>true, 'isGallery'=>true, 'extensions'=>'jpg,jpeg,gif,png', 'tl_class'=>'clr m12'),
			'sql'                     => "binary(16) NULL"
        );

//-------

$GLOBALS['TL_DCA']['tl_content']['fields']['jobEmptype'] = array
        (
            'inputType'               => 'checkbox',
            'options'                 => array('FULL_TIME', 'PART_TIME', 'CONTRACTOR', 'TEMPORARY', 'INTERN', 'VOLUNTEER', 'PER_DIEM', 'OTHER'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_content']['jobEmptypes'],
            'eval'                    => array('multiple'=>true, 'tl_class'=>'w50'),
            'sql'                     => "blob NULL"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobWorkHours'] = array
        (
            'inputType'               => 'text',
            'eval'                    => array('maxlength'=>64, 'tl_class'=>'w50'),
            'sql'                     => "varchar(64) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobPostal'] = array
		(
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>32, 'tl_class'=>'clr w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobCity'] = array
		(
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobStreet'] = array
		(
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobRegion'] = array
		(
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'clr w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobCountry'] = array
		(
			'filter'                  => true,
			'sorting'                 => true,
			'inputType'               => 'select',
			'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
			'options_callback' => function ()
			{
				return System::getContainer( )->get( 'contao.intl.countries' )->getCountries( );
			},
			'sql'                     => "varchar(2) NOT NULL default ''"
		);

$GLOBALS['TL_DCA']['tl_content']['fields']['jobRemote'] = array
        (
            'inputType'               => 'checkbox',
            'eval'                    => array('tl_class'=>'clr'),
            'sql'                     => "char(1) NOT NULL default ''"
		);

//-------

$GLOBALS['TL_DCA']['tl_content']['fields']['jobSalary'] = array
		(
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>10, 'rgxp'=>'digit', 'tl_class'=>'w50'),
			'sql'                     => "varchar(10) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobInterval'] = array
        (
            'default'                 => 'MONTH',
            'inputType'               => 'select',
            'options'                 => array('HOUR', 'DAY', 'WEEK', 'MONTH', 'YEAR'),
            'reference'               => &$GLOBALS['TL_LANG']['tl_content']['jobIntervals'],
            'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(8) NOT NULL default ''"
        );

//-------

$GLOBALS['TL_DCA']['tl_content']['fields']['jobRespon'] = array
		(
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobSkills'] = array
		(
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobQuali'] = array
		(
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobEdu'] = array
		(
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobExp'] = array
		(
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
        );

$GLOBALS['TL_DCA']['tl_content']['fields']['jobJson'] = array
		(
			'inputType'               => 'textarea',
			'eval'                    => array('readonly'=>true, 'allowHtml'=>true, 'class'=>'monospace'),
			'sql'                     => "blob NULL"
        );


//-------------------------------------------------------------------
//	tl_content_jobposting
//-------------------------------------------------------------------
class tl_content_jobposting extends Backend
{
    //-----------------------------------------------------------------
    //  Update JSON - Snippet
    //-----------------------------------------------------------------
	public function updateJson( $strTable, $intPid, $intVersion, $row  )
	{
		// Return if content type is not 'jobposting'
		if( $row['type'] !== 'jobposting' ) return;

		$arrSet = [];
		if( empty( $row['start'] ) ) {													// Startdatum wird als datePosted gesetzt, wenn leer
			$arrSet['start'] = time( );
		}

		// Template vorbereiten
        $this->Template = new FrontendTemplate( 'ce_jobpost_json' );
		$this->Template->jobposting = $row;												// Alle Spalten ins Template übernehmen

		$this->Template->headline = StringUtil::deserialize( $row['headline'], true );	// Einige Daten aufbereiten
		$this->Template->cssID = StringUtil::deserialize( $row['cssID'], true );
		$arrEmp = StringUtil::deserialize( $row['jobEmptype'], true );
		$this->Template->jobEmptype = implode( ',', $arrEmp );

		$logo = FilesModel::findByUuid( $row['jobLogo'] )->path ?? '';					// URL aus Logo
		if( !empty( $logo ) ) {
			$this->Template->logo = Environment::get( 'base' ) . $logo;
		}

		$this->Template->datePosted = empty( $row['start'] ) ? $arrSet['start'] : $row['start'];

		// Template parsen, InsertTags ersetzen und mit dem Datensatz speichern
        $arrSet['jobJson'] = System::getContainer( )->get( 'contao.insert_tag.parser' )->replaceInline( $this->Template->parse( ) );
		$this->Database->prepare( "UPDATE tl_content %s WHERE id=?" )->set( $arrSet )->execute( $intPid );
	}


	//-----------------------------------------------------------------
}
