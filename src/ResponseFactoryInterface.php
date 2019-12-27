<?php

declare(strict_types=1);

namespace Process;

interface ResponseFactoryInterface
{
    /**
     * @return ResponseInterface
     */
    public function createResponse(): \Process\ResponseInterface;
}