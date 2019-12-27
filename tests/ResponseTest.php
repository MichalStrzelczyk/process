<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ResponseTest extends TestCase
{

    /** @var \Process\ResponseFactory */
    protected $responseFactory;

    protected function setUp(): void
    {
        $this->responseFactory = new \Process\ResponseFactory();
    }

    /**
     * @return \Process\Response
     */
    private function getNewResponse(): \Process\Response
    {
        return $this->responseFactory->createResponse();
    }

    public function testNewEmptyResponse(): void
    {
        $response = $this->getNewResponse();
        $this->assertTrue($response->getStatus(), 'Response status should be `true`');
        $this->assertEmpty($response->getData(), 'Response data should be empty');
        $this->assertEmpty($response->getErrors(), 'Response errors should be empty');
    }

    public function testAddingError(): void
    {
        $response = $this->getNewResponse();
        $response->addError('101', 'Message-101');
        $this->assertFalse($response->getStatus(), 'Response status should be `false`');
        $response->addError('102', 'Message-102');
        $this->assertEquals(
            [
                '101' => 'Message-101',
                '102' => 'Message-102',
            ],
            $response->getErrors()
        );
    }

    public function testAddingErrors(): void
    {
        $response = $this->getNewResponse();
        $errors = [
            '101' => 'Message-101',
            '102' => 'Message-102',
        ];

        $response->setErrors($errors);
        $this->assertEquals(
            $errors,
            $response->getErrors()
        );
    }


}
