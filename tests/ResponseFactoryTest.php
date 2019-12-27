<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ResponseFactoryTest extends TestCase
{

    /** @var \Process\ResponseFactory  */
    protected $responseFactory;

    protected function setUp(): void
    {
        $this->responseFactory = new \Process\ResponseFactory();
    }

    public function testResponseFactory(): void
    {
        $response = $this->responseFactory->createResponse();
        $this->assertInstanceOf(\Process\Response::class, $response);
    }
}
