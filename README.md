# Coding Questions · [![Build Status](https://travis-ci.com/azdanov/questions.svg?branch=master)](https://travis-ci.com/azdanov/questions) [![PRs Welcome](https://img.shields.io/badge/PRs-welcome-blue.svg)](http://makeapullrequest.com) [![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/azdanov/questions/blob/master/LICENSE)

A number of exercises to practice 'whiteboard' interview questions in PHP.

Inside `exercises` directory you can find folders containing the exercises and completed versions.
There are multiple ways to solve each problem, feel free to experiment.

## Install

1. Clone this repository.
2. Run `composer install`.

## Usage

1. Pick an exercise for example `exercises/ReverseString` and inside `tests/ReverseString/ReverseStringTest.php` delete `static::markTestSkipped();`.
2. Run `./vendor/bin/phpunit` or `./vendor/bin/phpunit-watcher watch` to start tests.
3. Write implementation.

This will allow you to write code and be sure that the solution is correct.

## Suggested Path

* [ReverseString](./exercises/ReverseString/ReverseString.php)
* [Palindrome](./exercises/Palindrome/Palindrome.php)
* [ReverseInt](./exercises/ReverseInt/ReverseInt.php)
* [MaxChar](./exercises/MaxChar/MaxChar.php)
* [FizzBuzz](./exercises/FizzBuzz/FizzBuzz.php)
* [ArrayGroup](./exercises/ArrayGroup/ArrayGroup.php)
* [Anagram](./exercises/Anagram/Anagram.php)
* [Capitalize](./exercises/Capitalize/Capitalize.php)
* [Ladder](./exercises/Ladder/Ladder.php)

## License

[MIT](./LICENSE)