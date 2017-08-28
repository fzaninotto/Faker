<?php

namespace Faker\Test\Provider;

use Faker\Generator;
use Faker\Provider\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testUser()
    {
        $faker = new Generator();
        $faker->addProvider(new User($faker));

        try {
            $user = $faker->user(array('seed' => 'foobar'));
            $this->assertNotNull($user);
            $this->assertRandomUserStructure($user);
        } catch (\OutOfBoundsException $e) {
            $this->markTestSkipped('randomuser.me is down, skipped test.');
        }
    }

    private function assertRandomUserStructure($user)
    {
        $this->assertNotNull($user->name->title);
        $this->assertNotNull($user->name->first);
        $this->assertNotNull($user->name->last);

        $this->assertNotNull($user->location->street);
        $this->assertNotNull($user->location->city);
        $this->assertNotNull($user->location->state);
        $this->assertNotNull($user->location->postcode);

        $this->assertNotNull($user->email);

        $this->assertNotNull($user->login->username);
        $this->assertNotNull($user->login->password);
        $this->assertNotNull($user->login->salt);
        $this->assertNotNull($user->login->md5);
        $this->assertNotNull($user->login->sha1);
        $this->assertNotNull($user->login->sha256);

        $this->assertNotNull($user->dob);
        $this->assertNotNull($user->registered);
        $this->assertNotNull($user->phone);
        $this->assertNotNull($user->cell);

        $this->assertNotNull($user->id->name);
        $this->assertNotNull($user->id->value);

        $this->assertNotNull($user->picture->large);
        $this->assertNotNull($user->picture->medium);
        $this->assertNotNull($user->picture->thumbnail);

        $this->assertNotNull($user->nat);
    }
}
