<?php

declare(strict_types=1);

namespace Process;

interface ResponseInterface
{
    /**
     * Check if response has
     *
     * @return bool
     */
    public function getStatus(): bool;

    /**
     * Return response data
     *
     * @return array
     */
    public function getData(): array;

    /**
     * Return all errors
     *
     * @return array
     */
    public function getErrors(): array;

    /**
     * Set all errors
     *
     * @param array $errors
     *
     * @return \Process\ResponseInterface
     */
    public function setErrors(array $errors): \Process\ResponseInterface;

    /**
     * Add error to error container
     *
     * @param string $errorCode
     * @param string $errorMessage
     *
     * @return \Process\ResponseInterface
     */
    public function addError(string $errorCode, string $errorMessage): \Process\ResponseInterface;
}