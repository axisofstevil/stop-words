<?php

namespace Axisofstevil\StopWords;

class Filter
{
    /**
     * Collection of stop words
     *
     * @var array
     */
    protected $stopWords = [];

    /**
     * Create a new Words Instance
     *
     * @param mixed Optional words to set
     */
    public function __construct($words = null)
    {
        if ($words) {
            if (! is_array($words)) {
                $words = [$words];
            }
            $this->setWords($words);
        } else {
            $words = Words::getDefault();
            $this->setWords($words);
        }
    }

    /**
     * Clean text using stop words
     *
     * @param string Body of text to clean
     * @return string Cleaned text
     */
    public function cleanText($text = '')
    {
        $text = array_udiff(explode(' ', $text), $this->stopWords, 'strcasecmp');

        return implode(' ', $text);
    }

    /**
     * Get array of stop words
     *
     * @return array Returns array of stop words
     */
    public function getWords()
    {
        return $this->stopWords;
    }

    /**
     * Set array of stop words
     *
     * @param array Array of words to set
     * @return Axisofstevil\StopWords\Words Updated Words object
     */
    public function setWords(array $words = [])
    {
        $this->stopWords = $words;

        return $this;
    }

    /**
     * Merge array of stop words
     *
     * @param array Array of words to merge
     * @return Axisofstevil\StopWords\Words Updated Words object
     */
    public function mergeWords(array $words = [])
    {
        $this->stopWords = array_unique(
            array_merge($this->stopWords, $words)
        );

        return $this;
    }
}
