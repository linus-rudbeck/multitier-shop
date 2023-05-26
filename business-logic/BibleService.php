<?php

require __DIR__ . "/../bible-data-access/BibleVerseFetcher.php";

class BibleService {
    public static function getChapter($chapter){
        $bible_fetcher = new BibleVerseFetcher();

        $verse_data = $bible_fetcher->getChapter($chapter);

        $text = isset($verse_data["text"]) ? $verse_data["text"] : "";

        return $text;
    }

    public static function getChapterVerse($chapter, $verse){
        $bible_fetcher = new BibleVerseFetcher();

        $verse_data = $bible_fetcher->getChapterVerse($chapter, $verse);

        $text = isset($verse_data["text"]) ? $verse_data["text"] : "";

        return $text;
    }
}