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
$GLOBALS['TL_LANG']['tl_content']['jobIdent']     = array('Identifikator', 'Die eindeutige Kennzeichnung der einstellenden Organisation für den Job.');
$GLOBALS['TL_LANG']['tl_content']['jobCompany']   = array('Firma', 'Name der Firma');
$GLOBALS['TL_LANG']['tl_content']['jobLogo']      = array('Firmenlogo', 'Logo, das die Organisation repräsentiert, min. 112x112 Pixel, Format: jpg, png oder gif');
$GLOBALS['TL_LANG']['tl_content']['jobEmptype']   = array('Art der Beschäftigung', 'Sie können auch mehrere Beschäftigungsarten angeben.');
$GLOBALS['TL_LANG']['tl_content']['jobWorkHours'] = array('Arbeitszeit', 'Beispiel: 8:00-17:00, Gleitzeit');
$GLOBALS['TL_LANG']['tl_content']['jobPostal']    = array('Postleitzahl', 'Geben Sie die Postleitzahl ein.');
$GLOBALS['TL_LANG']['tl_content']['jobCity']      = array('Ort', 'Geben Sie den Ort der Beschäftigung ein.');
$GLOBALS['TL_LANG']['tl_content']['jobStreet']    = array('Straße', 'Geben Sie die Straße der Beschäftigung ein.');
$GLOBALS['TL_LANG']['tl_content']['jobRegion']    = array('Region', 'Geben Sie die Region der Beschäftigung ein, z.B. Bundesland.');
$GLOBALS['TL_LANG']['tl_content']['jobCountry']   = array('Land', 'Wählen Sie das Land der Beschäftigung aus.');
$GLOBALS['TL_LANG']['tl_content']['jobRemote']    = array('Telearbeit', 'Es muss sich vollständig um Telearbeit handeln. Es darf nicht für Jobs verwendet werden, die gelegentlich von zu Hause aus ausgeübt werden können, bei denen über Heimarbeit verhandelt werden kann oder die aus anderen Gründen keine hundertprozentige Telearbeit umfassen.');
$GLOBALS['TL_LANG']['tl_content']['jobSalary']    = array('Grundgehalt', 'Das tatsächliche Grundgehalt für den Job, wie vom Arbeitgeber angegeben (keine Schätzung).');
$GLOBALS['TL_LANG']['tl_content']['jobInterval']  = array('Intervall', 'Das Gehalt gilt für den folgenden Zeitraum');
$GLOBALS['TL_LANG']['tl_content']['jobRespon']    = array('Aufgabenbereiche', 'Definieren Sie die Aufgabenbereiche.');
$GLOBALS['TL_LANG']['tl_content']['jobSkills']    = array('Kenntnisse', 'Kenntnisse, die vorausgesetzt werden.');
$GLOBALS['TL_LANG']['tl_content']['jobQuali']     = array('Qualifikationen', 'Gewünschte Qualifikationen des Bewerbers.');
$GLOBALS['TL_LANG']['tl_content']['jobEdu']       = array('Ausbildung', 'Ausbildungsanforderungen an den Bewerber.');
$GLOBALS['TL_LANG']['tl_content']['jobExp']       = array('Erfahrungen', 'Angaben zur Berufserfahrung.');
$GLOBALS['TL_LANG']['tl_content']['jobJson']      = array('Generierter JSON-Code', '');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['desc_legend']       = 'Die komplette Stellenbeschreibung im HTML-Format';
$GLOBALS['TL_LANG']['tl_content']['company_legend']    = 'Firmendaten';
$GLOBALS['TL_LANG']['tl_content']['job_legend']        = 'Job-Details';
$GLOBALS['TL_LANG']['tl_content']['salary_legend']     = 'Grundgehalt';
$GLOBALS['TL_LANG']['tl_content']['conditions_legend'] = 'Voraussetzungen';
$GLOBALS['TL_LANG']['tl_content']['code_legend']       = 'Code-Snippet';


/**
 * References
 */
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['FULL_TIME']  = 'Vollzeit';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['PART_TIME']  = 'Teilzeit';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['CONTRACTOR'] = 'Anbieter';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['TEMPORARY']  = 'Befristet';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['INTERN']     = 'Intern';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['VOLUNTEER']  = 'Freischaffender';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['PER_DIEM']   = 'Tageweise';
$GLOBALS['TL_LANG']['tl_content']['jobEmptypes']['OTHER']      = 'Andere';

$GLOBALS['TL_LANG']['tl_content']['jobIntervals']['HOUR']      = 'pro Stunde';
$GLOBALS['TL_LANG']['tl_content']['jobIntervals']['DAY']       = 'pro Tag';
$GLOBALS['TL_LANG']['tl_content']['jobIntervals']['WEEK']      = 'pro Woche';
$GLOBALS['TL_LANG']['tl_content']['jobIntervals']['MONTH']     = 'pro Monat';
$GLOBALS['TL_LANG']['tl_content']['jobIntervals']['YEAR']      = 'pro Jahr';
