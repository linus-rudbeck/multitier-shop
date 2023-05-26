<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

require_once __DIR__ . "/../ControllerBase.php";
require_once __DIR__ . "/../../business-logic/BibleService.php";


class BibleController extends ControllerBase
{

    public function handleRequest()
    {
        $chapter = isset($this->query_params["chapter"]) ? $this->query_params["chapter"] : null;
        $verse = isset($this->query_params["verse"]) ? $this->query_params["verse"] : null;

        $this->model = "";

        if($chapter && $verse){
            // Get chapter & verse
            $this->model = BibleService::getChapterVerse($chapter, $verse);

            
        }
        else if($chapter){
            // Get chapter all verses
            $this->model = BibleService::getChapter($chapter);
        }

        $this->viewPage("bible/home");
    }
}
