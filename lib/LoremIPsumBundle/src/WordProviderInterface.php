<?php


namespace KnpU\LoremIpsumBundle;

interface WordProviderInterface
{
    public function getWordList(): array;
}
