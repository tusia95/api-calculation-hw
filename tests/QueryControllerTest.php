<?php
namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class QueryControllerTest extends WebTestCase
{
public function testQueryController(): void
{
// This calls KernelTestCase::bootKernel(), and creates a
// "client" that is acting as the browser
$client = static::createClient();

// Request a specific page
$crawler = $client->request('GET', '/api/calculate?action=divide&firstNumber=-6&secondNumber=3');

// Validate a successful response and some content
$this->assertResponseIsSuccessful();
$this->assertSame('{"result":-2}', $client->getResponse()->getContent());

}
}