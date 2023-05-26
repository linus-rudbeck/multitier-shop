<?php

class BibleVerseFetcher
{
    private $base_url = "https://bible-api.com/john+";

    public function getChapter($chapter)
    {
        $url = $this->base_url . $chapter;

        $data = file_get_contents($url);

        return json_decode($data, true);
    }

    public function getChapterVerse($chapter, $verse)
    {
        $url = $this->base_url . "{$chapter}:{$verse}";

        $data = file_get_contents($url);

        return json_decode($data, true);
    }
}
