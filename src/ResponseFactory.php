<?php

declare(strict_types=1);

namespace Process;

class ResponseFactory implements ResponseFactoryInterface
{
    /**
     * Create a new object of process response
     *
     * @return \Process\ResponseInterface
     */
    public function createResponse(): \Process\ResponseInterface
    {
        return new \Process\Response();
    }
}