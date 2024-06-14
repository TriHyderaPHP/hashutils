<?php
namespace Hashutils;

/**
 * Class HashID
 * Handles generating and verifying hashed IDs.
 */
class HashID {
     /*
 @var string The salt value used for hashing.
     */
    private $salt;

    /**
     * HashID constructor.
     *
     * @param string $salt The salt value for hashing (default is '0').
     */
    public function __construct($salt = '0') {
        $this->salt = $salt;
    }

    /**
     * Generate a hashed ID based on the user's IP address.
     *
     * @return string The generated hashed ID.
     */
    public function gen() {
        $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'N/A';
        return $this->hash->gen($ip);
    }

    /**
     * Verify if a given hash matches the generated hash.
     *
     * @param string $hash The hash to verify against the generated hash.
     * @return bool True if the hash matches, false otherwise.
     */
    public function verify($hash) {
        $gen = $this->gen();
        return $gen == $hash ? true : false;
    }
}
?>