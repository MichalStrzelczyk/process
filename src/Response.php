<?php

declare(strict_types=1);

namespace Process;

class Response implements \Process\ResponseInterface
{
    /** @var array */
    protected $data = [];

    /** @var array */
    protected $errors = [];

    /**
     * Check if response has errors
     *
     * @return bool
     */
    public function getStatus(): bool
    {
        return \count($this->errors) === 0;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     *
     * @return Response
     */
    public function setData(array $data): Response
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get all errors
     *
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Add error to error container
     *
     * @param string $errorCode
     * @param string $errorMessage
     *
     * @return \Process\ResponseInterface
     */
    public function addError(string $errorCode, string $errorMessage): \Process\ResponseInterface
    {
        $this->errors[$errorCode] = $errorMessage;

        return $this;
    }

    /**
     * @param array $errors
     *
     * @return \Process\ResponseInterface
     */
    public function setErrors(array $errors): \Process\ResponseInterface
    {
        $this->errors = $errors;

        return $this;
    }
}