<?php namespace Axisofstevil\StopWords;

class Filter
{
    /**
     * Collection of stop words
     *
     * @var array
     */
    protected $stop_words = array();


    /**
     * Create a new Words Instance
     *
     * @param mixed Optional words to set
     */
    public function __construct($words = null)
    {
        if ($words) {
            if (!is_array($words)) {
                $words = array($words);
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
     *
     * @return string Cleaned text
     */
    public function cleanText($text = '')
    {
        $text = array_diff(explode(' ', $text), $this->stop_words);
        return implode(' ', $text);
    }

    /**
     * Get array of stop words
     *
     * @return array Returns array of stop words
     */
    public function getWords()
    {
        return $this->stop_words;
    }

    /**
     * Set array of stop words
     *
     * @param array Array of words to set
     *
     * @return Axisofstevil\StopWords\Words Updated Words object
     */
    public function setWords(array $words = array())
    {
        $this->stop_words = $words;
        return $this;
    }

    /**
     * Merge array of stop words
     *
     * @param array Array of words to merge
     *
     * @return Axisofstevil\StopWords\Words Updated Words object
     */
    public function mergeWords(array $words = array())
    {
        $this->stop_words = array_unique(
            array_merge($this->stop_words, $words)
        );
        return $this;
    }
}
