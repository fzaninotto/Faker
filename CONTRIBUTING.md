Contributing
============

If you've written a new formatter, adapted Faker to a new locale, or fixed a bug, your contribution is welcome!

Before proposing a pull request, check the following:

* Your code should follow the [PSR-2 coding standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md). Run `make sniff` to check that the coding standards are followed, and use [php-cs-fixer](https://github.com/fabpot/PHP-CS-Fixer) to fix inconsistencies.
* Unit tests should still pass after your patch. Run the tests on your dev server (with `make test`) or check the continuous integration status for your pull request.
* As much as possible, add unit tests for your code
* Never use `rand()` in your providers. Faker uses the Mersenne Twister Randomizer, so use `mt_rand()` or any of the base generators (`randomNumber`, `randomElement`, etc.) instead.
* If you add new providers (or new locales) and that they embed a lot of data for random generation (e.g. first names in a new language), please add a `@link` to the reference you used for this list (example [in the ru_RU locale](https://github.com/fzaninotto/Faker/blob/master/src/Faker/Provider/ru_RU/Person.php#L13)). This will ease future updates of the list and debates about the most relevant data for this provider.
* If you add long list of random data, please split the list into several lines. This makes diffs easier to read, and facilitates core review.
* If you add new formatters, please include documentation for it in the README. Don't forget to add a line about new formatters in the `@property` or `@method` phpDoc entries in [Generator.php](https://github.com/fzaninotto/Faker/blob/master/src/Faker/Generator.php#L6-L118) to help IDEs auto-complete your formatters.
* If your new formatters are specific to a certain locale, document them in the [Language-specific formatters](https://github.com/fzaninotto/Faker#language-specific-formatters) list instead.
* Avoid changing existing sets of data. Some developers use Faker with seeding for unit tests ; changing the data makes their tests fail.
* Speed is important in all Faker usages. Make sure your code is optimized to generate thousands of fake items in no time, without consuming too much memory or CPU.
* If you commit a new feature, be prepared to help maintaining it. Watch the project on GitHub, and please comment on issues or PRs regarding the feature you contributed.

Once your code is merged, it is available for free to everybody under the MIT License. Publishing your Pull Request on the Faker GitHub repository means that you agree with this license for your contribution.

Thank you for your contribution! Faker wouldn't be so great without you.
