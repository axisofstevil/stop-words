<?php

namespace Axisofstevil\StopWords;

class Words
{
    /**
     * List of basic words.
     *
     * @var array
     */
    public static $basicWords = [
        'the', 'and', 'or', 'for', 'but', 'yet', 'so', 'lot', 'of', 'all', 'a',
        'his', 'her', 'he', 'she', 'that', 'any', 'an', 'in', 'with', 'to',
    ];

    /**
     * List of strict words.
     *
     * @var array
     */
    public static $strictWords = [
        'a', 'ii', 'about', 'above', 'according', 'across', '39', 'actually', 'ad',
        'adj', 'ae', 'af', 'after', 'afterwards', 'ag', 'again', 'against', 'ai', 'al',
        'all', 'almost', 'alone', 'along', 'already', 'also', 'although', 'always',
        'am', 'among', 'amongst', 'an', 'and', 'another', 'any', 'anyhow', 'anyone',
        'anything', 'anywhere', 'ao', 'aq', 'ar', 'are', 'aren', "aren't", 'around',
        'arpa', 'as', 'at', 'au', 'aw', 'az', 'b', 'ba', 'bb', 'bd', 'be', 'became',
        'because', 'become', 'becomes', 'becoming', 'been', 'before', 'beforehand',
        'begin', 'beginning', 'behind', 'being', 'below', 'beside', 'besides',
        'between', 'beyond', 'bf', 'bg', 'bh', 'bi', 'billion', 'bj', 'bm', 'bn', 'bo',
        'both', 'br', 'bs', 'bt', 'but', 'buy', 'bv', 'bw', 'by', 'bz', 'c', 'ca', 'can',
        "can't", 'cannot', 'caption', 'cc', 'cd', 'cf', 'cg', 'ch', 'ci', 'ck', 'cl',
        'click', 'cm', 'cn', 'co',
        'co.', 'com', 'copy', 'could', 'couldn', "couldn't", 'cr', 'cs', 'cu', 'cv', 'cx',
        'cy', 'cz', 'd', 'de', 'did', 'didn', "didn't", 'dj', 'dk', 'dm', 'do', 'does',
        'doesn', "doesn't", 'don', "don't", 'down', 'during', 'dz', 'e', 'each', 'ec',
        'edu', 'ee', 'eg', 'eh', 'eight', 'eighty', 'either', 'else', 'elsewhere', 'end',
        'ending', 'enough', 'er', 'es', 'et', 'etc', 'even', 'ever', 'every', 'everyone',
        'everything', 'everywhere', 'except', 'f', 'few', 'fi', 'fifty', 'find',
        'first', 'five', 'fj', 'fk', 'fm', 'fo', 'for', 'former', 'formerly', 'forty',
        'found', 'four', 'fr', 'free', 'from', 'further', 'fx', 'g', 'ga', 'gb', 'gd',
        'ge', 'get', 'gf', 'gg', 'gh', 'gi', 'gl', 'gm', 'gmt', 'gn', 'go', 'gov', 'gp',
        'gq', 'gr', 'gs', 'gt', 'gu', 'gw', 'gy', 'h', 'had', 'has', 'hasn', "hasn't",
        'have', 'haven', "haven't", 'he', "he'd", "he'll", "he's", 'help', 'hence',
        'her', 'here', "here's", 'hereafter', 'hereby', 'herein', 'hereupon', 'hers',
        'herself', 'him', 'himself', 'his', 'hk', 'hm', 'hn', 'home', 'homepage', 'how',
        'however', 'hr', 'ht', 'htm', 'html', 'http', 'hu', 'hundred', 'i', "i'd", "i'll",
        "i'm", "i've", 'i.e.', 'id', 'ie', 'if', 'il', 'im', 'in', 'inc',
        'inc.', 'indeed', 'information', 'instead', 'int', 'into', 'io', 'iq', 'ir', 'is',
        'isn', "isn't", 'it', "it's", 'its', 'itself', 'j', 'je', 'jm', 'jo', 'join', 'jp',
        'k', 'ke', 'kg', 'kh', 'ki', 'km', 'kn', 'kp', 'kr', 'kw', 'ky', 'kz', 'l', 'la',
        'last', 'later', 'latter', 'lb', 'lc', 'least', 'less', 'let', "let's", 'li',
        'like', 'likely', 'lk', 'll', 'lr', 'ls', 'lt', 'ltd', 'lu', 'lv', 'ly', 'm', 'ma',
        'made', 'make', 'makes', 'many', 'maybe', 'mc', 'md', 'me', 'meantime',
        'meanwhile', 'mg', 'mh', 'microsoft', 'might', 'mil', 'million', 'miss', 'mk',
        'ml', 'mm', 'mn', 'mo', 'more', 'moreover', 'most', 'mostly', 'mp', 'mq', 'mr',
        'mrs', 'ms', 'msie', 'mt', 'mu', 'much', 'must', 'mv', 'mw', 'mx', 'my', 'myself',
        'mz', 'n', 'na', 'namely', 'nc', 'ne', 'neither', 'net', 'netscape', 'never',
        'nevertheless', 'new', 'next', 'nf', 'ng', 'ni', 'nine', 'ninety', 'nl', 'no',
        'nobody', 'none', 'nonetheless', 'noone', 'nor', 'not', 'nothing', 'now',
        'nowhere', 'np', 'nr', 'nu', 'nz', 'o', 'of', 'off', 'often', 'om', 'on', 'once',
        'one', "one's", 'only', 'onto', 'or', 'org', 'other', 'others', 'otherwise',
        'our', 'ours', 'ourselves', 'out', 'over', 'overall', 'own', 'p', 'pa', 'page',
        'pe', 'per', 'perhaps', 'pf', 'pg', 'ph', 'pk', 'pl', 'pm', 'pn', 'pr', 'pt', 'pw',
        'py', 'q', 'qa', 'r', 'rather', 're', 'recent', 'recently', 'reserved', 'ring',
        'ro', 'ru', 'rw', 's', 'sa', 'same', 'sb', 'sc', 'sd', 'se', 'seem', 'seemed',
        'seeming', 'seems', 'seven', 'seventy', 'several', 'sg', 'sh', 'she', "she'd",
        "she'll", "she's", 'should', 'shouldn', "shouldn't", 'si', 'since', 'site',
        'six', 'sixty', 'sj', 'sk', 'sl', 'sm', 'sn', 'so', 'some', 'somehow', 'someone',
        'something', 'sometime', 'sometimes', 'somewhere', 'sr', 'st', 'still', 'stop',
        'su', 'such', 'sv', 'sy', 'sz', 't', 'taking', 'tc', 'td', 'ten', 'text', 'tf',
        'tg', 'test', 'th', 'than', 'that', "that'll", "that's", 'the', 'their', 'them',
        'themselves', 'then', 'thence', 'there', "there'll", "there's", 'thereafter',
        'thereby', 'therefore', 'therein', 'thereupon', 'these', 'they', "they'd",
        "they'll", "they're", "they've", 'thirty', 'this', 'those', 'though',
        'thousand', 'three', 'through', 'throughout', 'thru', 'thus', 'tj', 'tk', 'tm',
        'tn', 'to', 'together', 'too', 'toward', 'towards', 'tp', 'tr', 'trillion', 'tt',
        'tv', 'tw', 'twenty', 'two', 'tz', 'u', 'ua', 'ug', 'uk', 'um', 'under', 'unless',
        'unlike', 'unlikely', 'until', 'up', 'upon', 'us', 'use', 'used', 'using', 'uy',
        'uz', 'v', 'va', 'vc', 've', 'very', 'vg', 'vi', 'via', 'vn', 'vu', 'w', 'was',
        'wasn', "wasn't", 'we', "we'd", "we'll", "we're", "we've", 'web', 'webpage',
        'website', 'welcome', 'well', 'were', 'weren', "weren't", 'wf', 'what',
        "what'll", "what's", 'whatever', 'when', 'whence', 'whenever', 'where',
        'whereafter', 'whereas', 'whereby', 'wherein', 'whereupon', 'wherever',
        'whether', 'which', 'while', 'whither', 'who', "who'd", "who'll", "who's",
        'whoever', 'NULL', 'whole', 'whom', 'whomever', 'whose', 'why', 'will', 'with',
        'within', 'without', 'won', "won't", 'would', 'wouldn', "wouldn't", 'ws', 'www',
        'x', 'y', 'ye', 'yes', 'yet', 'you', "you'd", "you'll", "you're", "you've",
        'your', 'yours', 'yourself', 'yourselves', 'yt', 'yu', 'z', 'za', 'zm', 'zr',
        '10', 'z', 'org', 'inc', 'width', 'length',
    ];

    /**
     * Gets the appropriate list of default words.
     *
     * @param  bool  $strict
     * @return array
     */
    public static function getDefault($strict = false): array
    {
        return $strict ? static::$strictWords : static::$basicWords;
    }
}
