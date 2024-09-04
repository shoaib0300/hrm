<?php

namespace Lupcom\ContaoMemberNewsfeedBundle\Controller\ContentElement;

use Contao\ContentElement;
use Contao\Database;

class NewsfeedElementController extends ContentElement
{
    protected $strTemplate = 'ce_newsfeed';

    // Method to generate the backend and frontend content
    protected function compile()
    {
        // Fetch all news feed entries from the database
        $objNewsFeeds = Database::getInstance()->execute("SELECT * FROM tl_newsfeed ORDER BY date DESC");
        $arrNewsFeeds = array();
    
        while ($objNewsFeeds->next()) {
            $arrNewsFeeds[] = array(
                'title' => $objNewsFeeds->title,
                'date' => $objNewsFeeds->date,
                'author' => $objNewsFeeds->author,  // You may need to fetch the author name separately
                'text' => $objNewsFeeds->text,
            );
        }
    
        // Assign the news feed data to the template
        $this->Template->newsfeeds = $arrNewsFeeds;
    }
    
}
