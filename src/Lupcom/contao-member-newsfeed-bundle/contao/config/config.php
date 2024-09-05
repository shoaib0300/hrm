<?php
// Registering the model and content element
$GLOBALS['TL_MODELS']['tl_newsfeed'] = 'Lupcom\\ContaoMemberNewsfeedBundle\\Model\\NewsfeedModel';

// Adding the new content element type
$GLOBALS['TL_CTE']['newsfeed'] = array
(
    'newsfeed' => 'Lupcom\ContaoMemberNewsfeedBundle\Controller\ContentElement\NewsfeedElementController',
);

// $GLOBALS['FE_MOD']['newsfeed']['frontend_module'] = 'frontend_module';