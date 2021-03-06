<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package    MetaModels
 * @subpackage AttributeTags
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['metasubselectpalettes']['attr_id']['tags'] = array
(
	'presentation' => array(
		'tl_class',
		'tag_as_wizard'
	),
	'functions'  => array(
		'mandatory'
	),
	'overview' => array(
		'filterable',
		'searchable',
	)
);

$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['fields']['tag_as_wizard'] = array
(
	'label'      => &$GLOBALS['TL_LANG']['tl_metamodel_dcasetting']['tag_as_wizard'],
	'exclude'    => true,
	'inputType'  => 'checkbox',
	'eval'       => array
	(
		'tl_class'   => 'clr m12'
	)
);