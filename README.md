# PHP Interview Exercises · [![Build Status](https://img.shields.io/travis/com/azdanov/php-interview-exercises/master.svg?logo=travis)](https://travis-ci.com/azdanov/php-interview-exercises) [![PRs Welcome](https://img.shields.io/badge/PRs-welcome-blue.svg?logo=github)](http://makeapullrequest.com) [![All Contributors](https://img.shields.io/badge/all_contributors-6-orange.svg?style=flat-square)](#contributors)

__[NO LONGER MAINTAINED]__: The questions should still be useful when preparing for a PHP interview, but I'm not able to maintain the repository.

A number of exercises to practice whiteboard interview questions in PHP.

Inside `exercises` directory, you can find folders containing the exercises and completed versions.
There are multiple ways to solve each problem, feel free to experiment.

If you are stuck don't be afraid to search online for a pseudo-code algorithm or a solution. Even by copying and later analyzing the solution you will gain lots of experience in problem solving.

Also check out the tests and see what results are expected. Playing around with [Xdebug](https://xdebug.org/) is a plus.

It is useful to actually see how algorithms manipulate data. [Visualgo](https://visualgo.net/en) is a good resource for that.

## Install

1. Clone this repository.
2. Run `composer install`.

## Usage

1. Pick an exercise for example `exercises/ReverseString` and inside `tests/ReverseString/ReverseStringTest.php` delete `static::markTestSkipped();`.
2. Run `./vendor/bin/phpunit` or `./vendor/bin/phpunit-watcher watch` to start tests.
3. Write implementation.

This will allow you to write code and be sure that the solution is correct.

## Problem Solving Patterns

To solve certain problems in the most efficient way many [algorithmic patterns](https://cs.lmu.edu/~ray/notes/algpatterns/) are available.
Such as:

- Frequency Counter
- Multiple Pointers
- Sliding Window
- Divide and Conquer
- Backtracking

And more...

## Suggested Path

- [FizzBuzz](./exercises/FizzBuzz/FizzBuzz.php)
- [Numbers](./exercises/Numbers/Numbers.php)
- [Reverse](./exercises/Reverse/Reverse.php)
- [Palindrome](./exercises/Palindrome/Palindrome.php)
- [MaxChar](./exercises/MaxChar/MaxChar.php)
- [ArrayGroup](./exercises/ArrayGroup/ArrayGroup.php)
- [Capitalize](./exercises/Capitalize/Capitalize.php)
- [Vowels](./exercises/Vowels/Vowels.php)
- [Anagram](./exercises/Anagram/Anagram.php)
- [MaxSubArraySum](./exercises/MaxSubArraySum/MaxSubArraySum.php)
- [Search](./exercises/Search/Search.php)
- [Ladder](./exercises/Ladder/Ladder.php)
- [Pyramid](./exercises/Pyramid/Pyramid.php)
- [Spiral](./exercises/Spiral/Spiral.php)
- [Fibonacci](./exercises/Fibonacci/Fibonacci.php)
- [Events](./exercises/Events/Events.php)
- [Queue](./exercises/Queue/Queue.php)
- [Stack](./exercises/Stack/Stack.php)
- [QueueFromStacks](./exercises/QueueFromStacks/QueueFromStacks.php)
- [Sort](./exercises/Sort/Sort.php)
- [LinkedList](./exercises/LinkedList/LinkedList.php)
- [Tree](./exercises/Tree/Tree.php)
- [BinarySearchTree](./exercises/BinarySearchTree/BinarySearchTree.php)
- [MaxHeap](./exercises/MaxHeap/MaxHeap.php)

## Aside

[![Exercise Count](https://img.shields.io/endpoint.svg?url=https://php-interview-questions-counter.netlify.com/.netlify/functions/count)](./exercises)

This Exercise Counter is made with [Shields IO](https://shields.io/endpoint), [Axios](https://github.com/axios/axios), [GitHub GraphQL](https://developer.github.com/v4/) and [Netlify Functions](https://www.netlify.com/docs/functions/).

## Contributing

Do you have an idea for an exercise or a better solution? Submit a PR!

## Contributors

Thanks goes to these wonderful people ([emoji key](https://allcontributors.org/docs/en/emoji-key)):

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore -->
<table>
  <tr>
    <td align="center"><a href="https://azdanov.js.org/"><img src="https://avatars2.githubusercontent.com/u/6123841?v=4" width="100px;" alt="Anton Ždanov"/><br /><sub><b>Anton Ždanov</b></sub></a><br /><a href="https://github.com/azdanov/php-interview-exercises/commits?author=azdanov" title="Code">💻</a> <a href="https://github.com/azdanov/php-interview-exercises/commits?author=azdanov" title="Documentation">📖</a> <a href="https://github.com/azdanov/php-interview-exercises/commits?author=azdanov" title="Tests">⚠️</a></td>
    <td align="center"><a href="https://github.com/Ahmed-Aboud"><img src="https://avatars0.githubusercontent.com/u/25877831?v=4" width="100px;" alt="ahmed"/><br /><sub><b>ahmed</b></sub></a><br /><a href="https://github.com/azdanov/php-interview-exercises/commits?author=Ahmed-Aboud" title="Code">💻</a> <a href="https://github.com/azdanov/php-interview-exercises/commits?author=Ahmed-Aboud" title="Tests">⚠️</a></td>
    <td align="center"><a href="https://github.com/tizis"><img src="https://avatars1.githubusercontent.com/u/16865573?v=4" width="100px;" alt="Roman Yepanchenko"/><br /><sub><b>Roman Yepanchenko</b></sub></a><br /><a href="https://github.com/azdanov/php-interview-exercises/issues?q=author%3Atizis" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/fathom"><img src="https://avatars3.githubusercontent.com/u/13853845?v=4" width="100px;" alt="Fathom"/><br /><sub><b>Fathom</b></sub></a><br /><a href="https://github.com/azdanov/php-interview-exercises/issues?q=author%3Afathom" title="Bug reports">🐛</a> <a href="https://github.com/azdanov/php-interview-exercises/commits?author=fathom" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/Olden"><img src="https://avatars3.githubusercontent.com/u/546682?v=4" width="100px;" alt="Alexander Katynia"/><br /><sub><b>Alexander Katynia</b></sub></a><br /><a href="https://github.com/azdanov/php-interview-exercises/issues?q=author%3AOlden" title="Bug reports">🐛</a></td>
    <td align="center"><a href="https://github.com/kevin-schmitt"><img src="https://avatars2.githubusercontent.com/u/10809414?v=4" width="100px;" alt="kevin-schmitt"/><br /><sub><b>kevin-schmitt</b></sub></a><br /><a href="https://github.com/azdanov/php-interview-exercises/commits?author=kevin-schmitt" title="Code">💻</a> <a href="https://github.com/azdanov/php-interview-exercises/commits?author=kevin-schmitt" title="Tests">⚠️</a></td>
  </tr>
</table>

<!-- ALL-CONTRIBUTORS-LIST:END -->

This project follows the [all-contributors](https://github.com/all-contributors/all-contributors) specification. Contributions of any kind welcome!

## License

[MIT](./LICENSE)
