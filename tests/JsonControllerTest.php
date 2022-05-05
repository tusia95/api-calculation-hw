<?php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class JsonControllerTest extends WebTestCase
{
    public function testQueryController(): void
    {
// This calls KernelTestCase::bootKernel(), and creates a
// "client" that is acting as the browser
        $client = static::createClient();

//// Request a specific page
//        $crawler = $client->request('POST', '/api3/calculate', (json_decode(
//            '{"action": "multiply",
//            "firstNumber": "44",
//            "secondNumber":"0.5"}'
//        ), TRUE), array(), array('CONTENT_TYPE' => 'application/json'));

// Validate a successful response and some content
        $this->assertResponseIsSuccessful();
        $this->assertSame('{"result":88}', $client->getResponse()->getContent());

    }
}