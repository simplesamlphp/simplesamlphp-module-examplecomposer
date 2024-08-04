<?php

declare(strict_types=1);

namespace SimpleSAML\Module\examplecomposer\Controller;

use SimpleSAML\Configuration;
use SimpleSAML\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller class for the examplecomposer module.
 *
 * This class serves the different views available in the module.
 *
 * @package simplesamlphp/simplesamlphp-module-examplecomposer
 */
class ExampleController
{
    /** @var \SimpleSAML\Configuration */
    protected Configuration $config;

    /** @var \SimpleSAML\Session */
    protected Session $session;


    /**
     * Controller constructor.
     *
     * It initializes the global configuration and session for the controllers implemented here.
     *
     * @param \SimpleSAML\Configuration $config The configuration to use by the controllers.
     * @param \SimpleSAML\Session $session The session to use by the controllers.
     *
     * @throws \Exception
     */
    public function __construct(
        Configuration $config,
        Session $session,
    ) {
        $this->config = $config;
        $this->session = $session;
    }


    /**
     * Say hello to the world
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function example(Request $request): Response
    {
        $response = new Response(
            'Hello World!',
            Response::HTTP_OK,
            ['content-type' => 'text/plain'],
        );

        return $response;
    }
}
