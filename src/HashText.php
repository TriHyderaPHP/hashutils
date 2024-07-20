<?php

namespace Trihydera\Hashutils;

/**
 * Handles hashing text content using different algorithms.
 */
class HashText
{
    /*
 @var string The salt value used for hashing.
    */
    private $salt;

    /**
     * HashText constructor.
     *
     * @param string $salt The salt value for hashing (default is '0').
     */
    public function __construct($salt = '0')
    {
        $this->salt = $salt;
    }

    /**
     * Generate a hashed string using different algorithms.
     *
     * @param string $content The content to be hashed.
     * @return string The generated hash string.
     */
    public function gen($content)
    {
        $super = [];
        $algos = ['md5', 'sha256'];

        foreach ($algos as $algo) {
            $hash = hash_hmac($algo, $content, $this->salt);
            $super[] = substr($hash, 5, 8);
        }

        return implode('', $super);
    }
}
