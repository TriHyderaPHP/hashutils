# Intro

A simple PHP library for hashing text, getting and verifying an user hash

# Getting started

Require this package, with [Composer](https://getcomposer.org), in the root directory of your project.

```bash
composer require trihydera/hashutils
```

# HashID Class

## Overview
The `HashID` class is designed to handle generating and verifying hashed user IDs based on the user's IP address.

## Usage
1. Instantiate the `HashID` class by providing an optional salt value.
2. Use the `gen()` method to generate a hashed ID based on the user's IP address.
3. Use the `verify($hash)` method to verify if a given hash matches the generated hash.

## Example
```php
<?php
use Hashutils\HashID;

// Instantiate HashID class
$hashId = new HashID('mysalt');

// Generate a hashed ID
$generatedHash = $hashId->gen();

// Verify a hash
$isValid = $hashId->verify($generatedHash);
?>
```
# HashText Class

## Overview
The `HashText` class is a PHP utility class that provides functionality to hash text content using different algorithms. It allows you to generate hashed strings for text content with added security through salting.

## Installation
You can include the `HashText` class in your project by requiring the relevant PHP file or using an autoloader.

## Usage
1. Instantiate the `HashText` class by providing an optional salt value.
2. Call the `gen($content)` method with the text content you want to hash.
3. The method will return a concatenated hash string generated using the specified algorithms.

## Example
```php
<?php
use Hashutils\HashText;

// Instantiate HashText class with a custom salt
$hashText = new HashText('mysalt');

// Generate a hashed string for the text "Hello, World!"
$hashedContent = $hashText->gen('Hello, World!');

echo $hashedContent;
?>
```

# Features
- Supports hashing text content using the `md5` and `sha256` algorithms.
- Allows customization of the salt value for added security.
- Returns a concatenated hash string derived from multiple hashing algorithms.

