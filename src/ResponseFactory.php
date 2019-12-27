<?php

declare(strict_types=1);

namespace Process;

class ResponseFactory
{
    /**
     * Create a new object of process response
     *
     * @return \Process\Response
     */
    public function createResponse(): \Process\Response
    {
        return new \Process\Response();
    }
}