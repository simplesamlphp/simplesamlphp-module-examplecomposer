<?php

declare(strict_types=1);

namespace SimpleSAML\Test\Module\negotiate\Controller;

use PHPUnit\Framework\TestCase;
use SimpleSAML\Configuration;
use SimpleSAML\Module\examplecomposer\Controller;
use SimpleSAML\Session;
use Symfony\Component\HttpFoundation\Request;

/**
 * Set of tests for the controllers in the "examplecomposer" module.
 *
 * @package SimpleSAML\Test
 */
class ExampleControllerTest extends TestCase
{
    /** @var \SimpleSAML\Configuration */
    protected Configuration $config;

    /** @var \SimpleSAML\Session */
    protected Session $session;


    /**
     * Set up for each test.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->config = Configuration::loadFromArray(
            [
                'module.enable' => ['examplecomposer' => true],
            ],
            '[ARRAY]',
            'simplesaml'
        );

        $this->session = Session::getSessionFromRequest();
    }


    /**
     * Test that a valid requests results in a page saying hello to the world
     */
    public function testExample(): void
    {
        $request = Request::create(
            '/example',
            'GET'
        );

        $c = new Controller\ExampleController($this->config, $this->session);

        $response = $c->example($request);

        // Validate response
        $this->assertTrue($response->isSuccessful());
        $this->assertEquals('text/plain', $response->headers->get('Content-Type'));
    }
}
