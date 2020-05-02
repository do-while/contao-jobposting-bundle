<?php

/**
 * Extension for Contao 4
 *
 * @copyright  Softleister 2019-2020
 * @author     Softleister <info@softleister.de>
 * @package    contao-jobposting-bundle
 * @licence    LGPL-3.0
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['jobIdent']     = array('Identifier', 'The hiring organization\'s unique identifier for the job.');
$GLOBALS['TL_LANG']['tl_content']['jobCompany']   = array('Company', 'Name of company');
$GLOBALS['TL_LANG']['tl_content']['jobLogo']      = array('Company logo', 'Logo representing the organisation, min. 112x112 pixels, format: jpg, png or gif');
$GLOBALS['TL_LANG']['tl_content']['jobEmptype']   = array('Employment type', 'You can also specify several employment types.');
$GLOBALS['TL_LANG']['tl_content']['jobWorkHours'] = array('Work hours', 'e.g. 8am-5pm, shift');
$GLOBALS['TL_LANG']['tl_content']['jobPostal']    = array('Postal', 'Enter the postal code.');
$GLOBALS['TL_LANG']['tl_content']['jobCity']      = array('City', 'Enter the place of employment.');
$GLOBALS['TL_LANG']['tl_content']['jobStreet']    = array('Street', 'Enter the street of employment.');
$GLOBALS['TL_LANG']['tl_content']['jobRegion']    = array('Region', 'Enter the region of employment, e.g. federal state.');
$GLOBALS['TL_LANG']['tl_content']['jobCountry']   = array('Country', 'Select the country of employment.');
$GLOBALS['TL_LANG']['tl_content']['jobRemote']    = array('Remote job', 'It must be entirely telework. It must not be used for jobs that can occasionally be done from home, where homework can be negotiated, or which do not include 100% telework for other reasons.');
$GLOBALS['TL_LANG']['tl_content']['jobSalary']    = array('Base salary', 'The actual basic salary for the job as stated by the employer (no estimate).');
$GLOBALS['TL_LANG']['tl_content']['jobInterval']  = array('Interval', 'The content shall be valid for the following period');
$GLOBALS['TL_LANG']['tl_content']['jobRespon']    = array('Responsabilities', 'Define the responsibilities.');
$GLOBALS['TL_LANG']['tl_content']['jobSkills']    = array('Skills', 'Skills that are assumed.');
$GLOBALS['TL_LANG']['tl_content']['jobQuali']     = array('Qualifications', 'Desired qualifications of the candidate.');
$GLOBALS['TL_LANG']['tl_content']['jobEdu']       = array('Education requirements', 'Training requirements for the candidate.');
$GLOBALS['TL_LANG']['tl_content']['jobExp']       = array('Experience requirements', 'Information on professional experience.');
$GLOBALS['TL_LANG']['tl_content']['jobJson']      = array('Generated JSON code', '');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['desc_legend']       = 'Job\'s description (in HTML)';
$GLOBALS['TL_LANG']['tl_content']['company_legend']    = 'Company data';
$GLOBALS['TL_LANG']['tl_content']['job_legend']        = 'Job details';
$GLOBALS['TL_LANG']['tl_content']['salary_legend']     = 'Base salary';
$GLOBALS['TL_LANG']['tl_content']['conditions_legend'] = 'Conditions';
$GLOBALS['TL_LANG']['tl_content']['code_legend']       = 'Code snippet';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['FULL_TIME']  = 'Full time';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['PART_TIME']  = 'Part time';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['CONTRACTOR'] = 'Contractor';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['TEMPORARY']  = 'Temporary';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['INTERN']     = 'Intern';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['VOLUNTEER']  = 'Volunteer';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['PER_DIEM']   = 'Per diem';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['OTHER']      = 'Other';

$GLOBALS['TL_LANG']['tl_content']['jobIntervals']['HOUR']      = 'per hour';
$GLOBALS['TL_LANG']['tl_content']['jobIntervals']['DAY']       = 'per day';
$GLOBALS['TL_LANG']['tl_content']['jobIntervals']['WEEK']      = 'per week';
$GLOBALS['TL_LANG']['tl_content']['jobIntervals']['MONTH']     = 'per month';
$GLOBALS['TL_LANG']['tl_content']['jobIntervals']['YEAR']      = 'per year';
