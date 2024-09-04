<?php

$GLOBALS['TL_DCA']['tl_newsfeed'] = array(
    'config' => array(
        'dataContainer' => 'Table',
        'enableVersioning' => true,
        'sql' => array(
            'keys' => array(
                'id' => 'primary',
            ),
        ),
    ),
    'list' => array(
        'sorting' => array(
            'mode' => 1,
            'fields' => array('date'),
            'flag' => 1,
        ),
        'label' => array(
            'fields' => array('title', 'date'),
            'format' => '%s - %s',
        ),
    ),
    'palettes' => array(
        'default' => '{title_legend},title,date,author,text',
    ),
    'fields' => array(
        'id' => array(
            'sql' => "int(10) unsigned NOT NULL auto_increment",
        ),
        'title' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_newsfeed']['title'],
            'exclude' => true,
            'inputType' => 'text',
            'eval' => array('mandatory' => true, 'maxlength' => 255),
            'sql' => "varchar(255) NOT NULL default ''",
        ),
        'date' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_newsfeed']['date'],
            'exclude' => true,
            'inputType' => 'text',
            'eval' => array('mandatory' => true, 'rgxp' => 'datim'),
            'sql' => "varchar(10) NOT NULL default ''",
        ),
        'author' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_newsfeed']['author'],
            'exclude' => true,
            'inputType' => 'select',
            'eval' => array('mandatory' => true),
            'sql' => "int(10) unsigned NOT NULL default '0'",
        ),
        'text' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_newsfeed']['text'],
            'exclude' => true,
            'inputType' => 'textarea',
            'eval' => array('mandatory' => true),
            'sql' => "text NULL",
        ),
        'image' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_newsfeed']['image'],
            'exclude' => true,
            'inputType' => 'fileTree',
            'eval' => array('filesOnly' => true, 'fieldType' => 'radio', 'mandatory' => true),
            'sql' => "binary(16) NULL",
        ),
        'tstamp' => array(
            'sql' => "int(10) unsigned NOT NULL default '0'",
        ),
    ),
);
