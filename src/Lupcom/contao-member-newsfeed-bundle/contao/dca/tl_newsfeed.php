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
            'eval' => array('mandatory' => true, 'maxlength' => 255),
            'sql' => "varchar(10) NOT NULL default ''",
        ),
        'author' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_newsfeed']['author'],
            'exclude' => true,
            'inputType' => 'text',
            'eval' => array('mandatory' => true, 'readonly' => true),
            'sql' => "varchar(10) NOT NULL default ''",
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
            'eval' => array('filesOnly' => true, 'fieldType' => 'radio'),
            'sql' => "binary(200) NULL",
        ),
        'tstamp' => array(
            'label'         => &$GLOBALS['TL_LANG']['tl_newsfeed']['tstamp'],
            'inputType'     => 'text',
            'eval'          => array('rgxp'=>'datim', 'readonly' => true, 'tl_class'=>'w50'),
            'sql'           => "varchar(10) NOT NULL default ''"
        ),
    ),
);
