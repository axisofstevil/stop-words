<?php namespace Axisofstevil\StopWords\Test;

use Axisofstevil\StopWords\Filter,
    Axisofstevil\StopWords\Words;

class WordsTest extends \PHPUnit_Framework_TestCase
{
    private function randomWord()
    {
        return str_shuffle('abcdefghijklmnopqrstuvwxyz');
    }

    private function randomWords($count = 1)
    {
        $words = array();
        for ($i = 0; $i < $count; $i++) {
            $words[] = $this->randomWord();
        }
        return $words;
    }

    private function mixedText($words)
    {
        $text = array();
        for ($i = 0; $i < 100; $i++) {
            if ($i % 2 == 0) {
                $text[] = $this->randomWord();
            } else {
                $text[] = $words[rand(0,(count($words) - 1))];
            }
        }
        return implode(' ', $text);
    }

    public function testDefaultWordsUsed()
    {
        $filter = new Filter;

        $words = $filter->getWords();
        $default = Words::getDefault();

        $this->assertEquals($default, $words);
    }

    public function testCustomWordsUsedWhenProvidedAsArray()
    {
        $custom_words = $this->randomWords(2);

        $filter = new Filter($custom_words);
        $words = $filter->getWords();

        $this->assertEquals($custom_words, $words);
    }

    public function testCustomWordsUsedWhenProvidedAsString()
    {
        $custom_word = $this->randomWord();

        $filter = new Filter($custom_word);
        $words = $filter->getWords();

        $this->assertEquals(array($custom_word), $words);
    }

    public function testCustomWordsUsedWhenSet()
    {
        $custom_words = $this->randomWords(2);
        $filter = new Filter;

        $words = $filter->setWords($custom_words)->getWords();

        $this->assertEquals($custom_words, $words);
    }

    public function testCustomWordsUsedWhenMerged()
    {
        $custom_words = $this->randomWords();
        $filter = new Filter;

        $words = $filter->mergeWords($custom_words)->getWords();
        $word_count = count($words);

        foreach ($custom_words as $word) {
            $this->assertTrue(in_array($word, $words));
        }
        $this->assertTrue($word_count > count($custom_words));
    }

    public function testTextCleanedUsingDefaultStopWords()
    {
        $filter = new Filter;
        $words = $filter->getWords();
        $text = $this->mixedText($words);

        $cleaned_text = $filter->cleanText($text);

        foreach ($words as $word) {
            $this->assertNotContains(' '.$word.' ', $cleaned_text);
        }
    }

    public function testTextCleanedUsingCustomStopWords()
    {
        $words = array('a','walk','to');
        $filter = new Filter($words);
        $text = 'A Walk to Remember';

        $cleaned_text = $filter->cleanText($text);

        $this->assertEquals('Remember', $cleaned_text);
    }

    public function testTextCleanedEmptyStringWhenAllWordsStopWords()
    {
        $words = array('a','walk','to','remember');
        $filter = new Filter($words);
        $text = 'A Walk to Remember';

        $cleaned_text = $filter->cleanText($text);

        $this->assertEmpty($cleaned_text);
    }
}
