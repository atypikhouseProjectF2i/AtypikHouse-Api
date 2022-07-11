<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;

class AuthUserTest extends ApiTestCase
{
    public function testLogin(): void
    {
        $client = self::createClient();

        $response = $client->request('POST', '/api/login', [
            'headers' => ['Content-Type' => 'application/json'],
            'json' => [
                'username' => 'user0@gmail.com',
                'password' => 'mypassword',
            ],
        ]);

        $this->assertResponseIsSuccessful();
        $data = json_decode($response->getContent());

        // test authorized
        $client->request('GET', '/api/me', ['auth_bearer' => $data->token]);
        $this->assertResponseIsSuccessful();
    }
}
