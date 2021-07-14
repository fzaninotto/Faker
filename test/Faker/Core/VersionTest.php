<?php

namespace Faker\Test\Core;

use Faker\Test\TestCase;

final class VersionTest extends TestCase
{
    public function testSemver(): void
    {
        // taken from: https://semver.org/spec/v2.0.0.html
        $regex = '/^(0|[1-9]\d*)\.(0|[1-9]\d*)\.(0|[1-9]\d*)(?:-((?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*)(?:\.(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*))*))?(?:\+([0-9a-zA-Z-]+(?:\.[0-9a-zA-Z-]+)*))?$/';

        for ($i = 0; $i <= 9; ++$i) {
            self::assertMatchesRegularExpression($regex, $this->faker->semver());
            self::assertMatchesRegularExpression($regex, $this->faker->semver(true));
            self::assertMatchesRegularExpression($regex, $this->faker->semver(true, true));
            self::assertMatchesRegularExpression($regex, $this->faker->semver(false, true));
        }
    }
}
