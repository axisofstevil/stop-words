<?php

namespace Axisofstevil\StopWords\Test;

use Axisofstevil\StopWords\Filter;
use Axisofstevil\StopWords\Words;

function mixedText($words)
{
    $text = [];
    for ($i = 0; $i < 100; $i++) {
        if ($i % 2 == 0) {
            $text[] = randomWord();
        } else {
            $text[] = $words[rand(0, (count($words) - 1))];
        }
    }

    return implode(' ', $text);
}

function randomWord()
{
    return str_shuffle('abcdefghijklmnopqrstuvwxyz');
}

function randomWords($count = 1)
{
    $words = [];
    for ($i = 0; $i < $count; $i++) {
        $words[] = randomWord();
    }

    return $words;
}

it('has default words', function () {
    $filter = new Filter;

    $words = $filter->getWords();
    $default = Words::getDefault();

    expect($default)->toEqual($words);
});

it('supports custom words, provided as an array', function () {
    $customWords = randomWords(2);

    $filter = new Filter($customWords);
    $words = $filter->getWords();

    expect($words)->toEqual($customWords);
});

it('supports custom words, provided as a string', function () {
    $customWords = randomWord();

    $filter = new Filter($customWords);
    $words = $filter->getWords();

    expect($words)->toEqual([$customWords]);
});

it('supports custom words when set fluently', function () {
    $customWords = randomWords(2);

    $filter = new Filter;
    $words = $filter->setWords($customWords)->getWords();

    expect($words)->toEqual($customWords);
});

it('supports custom words when merged fluently', function () {
    $customWords = randomWords(2);

    $filter = new Filter;
    $words = $filter->mergeWords($customWords)->getWords();

    expect($words)->toContain(...$customWords);
});

it('cleans text using default stop words', function () {
    $filter = new Filter;
    $words = $filter->getWords();
    $text = mixedText($words);

    $cleanedText = $filter->cleanText($text);

    expect($cleanedText)->not()->toContain(...$words);
});

it('cleans text using custom stop words', function () {
    $words = ['a', 'walk', 'to'];
    $filter = new Filter($words);
    $text = 'A Walk to Remember';

    $cleanedText = $filter->cleanText($text);

    expect($cleanedText)->not()->toContain(...$words);
    expect($cleanedText)->toEqual('Remember');
});

it('produces an empty string when text contains all stop words', function () {
    $words = ['a', 'walk', 'to', 'remember'];
    $filter = new Filter($words);
    $text = 'A Walk to Remember';

    $cleanedText = $filter->cleanText($text);

    expect($cleanedText)->toBeEmpty();
});
