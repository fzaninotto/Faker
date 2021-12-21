# Contributing

**At the moment we are not looking for pull requests that add new features.** We are planning for Faker 2.0's architecture.

If you've <!-- written a new formatter, added a new locale, or --> fixed a bug, your contribution is welcome!

Before proposing a pull request, please read these contribution guidelines.

## Issues & Pull Requests

* Communicate in English on issues and pull requests.
* Pull requests should only contain related changes.
* Your code should follow [our coding standard](/.php-cs-fixer.dist.php). Run `make cs` to fix code style issues.
* Your code should be covered by unit tests.
* All checks must pass before your code is merged. Run `make test` to run unit tests.

## Best Practices & Conventions

When writing code for Faker, you should know about these conventions / best practices:

* Never use `rand()` in your provider. Faker utilizes the Mersenne Twister Randomizer, so use `mt_rand()` or any of the base generators (`randomNumber`, `randomElement`, etc.) instead.
* If you add a new provider which embeds a lot of data (e.g. first names in a new language), please add a `@see` PHPDoc to the reference you used for this list (example [in the `en_US` locale](https://github.com/FakerPHP/Faker/blob/main/src/Faker/Provider/en_US/Text.php#L35)). This will ease future updates of the list and debates about the most relevant data for this provider.
* If you add long list of random data, please split the list into several lines. This makes diffs easier to read, and facilitates code review.
* If you add a new formatter, please document it in [the documentation](https://github.com/FakerPHP/fakerphp.github.io). Please add a line about the new formatter in the `@property` or `@method` PHPDoc entries in [Generator.php](https://github.com/FakerPHP/Faker/blob/main/src/Faker/Generator.php#L6-L118) to help IDEs with autocompletion.
* If your new formatter is specific to a certain locale, document them in the respective [locale documentation](https://github.com/FakerPHP/fakerphp.github.io/tree/main/docs/locales).
* Avoid changing existing sets of data. Some developers use Faker for seeding unit tests, changing the data makes their tests fail.
* Speed is important to Faker. Make sure your code is optimized to generate thousands of fake items in no time, without consuming too much CPU or memory.
* If you commit a new feature, be prepared to help maintain it. Watch the project on GitHub, and please comment on issues or pull requests regarding the feature you contributed.

---

Once your code is merged, it is available to everybody, for free, under the [MIT License](/LICENSE).
By publishing your pull request on the Faker project, you implicitly agree with the aforementioned license.

**Thank you for your contribution! Faker wouldn't be so great without you.**
