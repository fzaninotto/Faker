<?php

namespace Faker\Provider;

/**
 * Generate random user data based on https://randomuser.me/
 */
class User extends Base
{
    const ENDPOINT = 'https://randomuser.me/api/';

    /**
     * Generates a random user profile based on RandomUser.me.
     *
     * @return \stdClass
     * @throws \OutOfBoundsException
     * @link https://randomuser.me
     */
    public function user()
    {
        $data = file_get_contents(self::ENDPOINT);

        if ($data === false) {
            throw new \OutOfBoundsException('RandomUser service is down.');
        }

        $data = json_decode($data);

        return $data->results[0];
    }
}
