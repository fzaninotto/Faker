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
     * @param array $options
     * @return \stdClass
     * @throws \OutOfBoundsException
     * @link https://randomuser.me
     */
    public function user($options = null)
    {
        $endpoint = self::ENDPOINT;

        if ($options !== null) {
            $endpoint .= '?'.http_build_query($options);
        }

        $data = file_get_contents($endpoint);

        if ($data === false) {
            throw new \OutOfBoundsException('RandomUser service is down.');
        }

        $data = json_decode($data);

        return $data->results[0];
    }
}
