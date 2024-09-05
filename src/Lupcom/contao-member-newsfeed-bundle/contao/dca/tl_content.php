<?php

$GLOBALS['TL_DCA']['tl_content']['palettes']['newsfeed'] = '{type_legend},type,headline;{newsfeed_legend},newsfeed;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';

$GLOBALS['TL_DCA']['tl_content']['fields']['newsfeed'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['newsfeed'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'foreignKey'              => 'tl_newsfeed.title',
    'eval'                    => array('mandatory'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50'),
    'sql'                     => "int(10) unsigned NOT NULL default '0'",
    'relation'                => array('type'=>'belongsTo', 'load'=>'lazy')
);