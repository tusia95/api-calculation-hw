<?php
namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class JsonControllerTest extends WebTestCase
{
    public function testJsonController(): void
    {
// This calls KernelTestCase::bootKernel(), and creates a
// "client" that is acting as the browser
        $client = static::createClient();

//// Request a specific page
        $crawler = $client->request('POST', '/api3/calculate',
           [],[], ['CONTENT_TYPE' => 'application/json'],  json_encode([
                'action' => 'add',
                'firstNumber' => '5',
                'secondNumber' => '9',
            ], JSON_PRETTY_PRINT));

// Validate a successful response and some content
        $this->assertResponseIsSuccessful();
        $this->assertJson('{ "result":14 }', $client->getResponse()->getContent());

    }
}