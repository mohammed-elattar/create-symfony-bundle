<?php


namespace App\Service;


use KnpU\LoremIpsumBundle\KnpUWordProvider;
use KnpU\LoremIpsumBundle\WordProviderInterface;

class CustomWordProvider extends KnpUWordProvider implements WordProviderInterface
{
    public function getWordList(): array
    {
        $wordList = parent::getWordList();
        $wordList[] = 'Mohammed';
        $wordList[] = 'Nabila';

        return $wordList;
    }

}
