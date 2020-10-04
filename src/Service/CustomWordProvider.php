<?php


namespace App\Service;


use KnpU\LoremIpsumBundle\KnpUWordProvider;

class CustomWordProvider extends KnpUWordProvider
{
    public function getWordList(): array
    {
        $wordList = parent::getWordList();
        $wordList[] = 'Mohammed';
        $wordList[] = 'Nabila';

        return $wordList;
    }

}
