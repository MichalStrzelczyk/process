<?php

declare(strict_types=1);

namespace Process;

abstract class AbstractProcess
{
    /** @var ResponseInterface */
    protected $processResponse;

    /** @var ValidatorInterface */
    protected $validator;

    /**
     * AbstractProcess constructor.
     *
     * @param ResponseInterface $processResponse
     * @param ValidatorInterface $validator
     */
    public function __construct(\Process\ResponseInterface $processResponse, \Process\ValidatorInterface $validator)
    {
        $this->processResponse = $processResponse;
        $this->validator = $validator;
    }

    /**
     * @param array $options
     *
     * @return mixed
     */
    abstract protected function execute(array $options = []);

    /**
     * @param array $options
     *
     * @return ResponseInterface
     */
    final public function handle(array $options = []): ResponseInterface
    {
        $errors = $this->validator->validate($options);
        $this->getResponse()->setErrors($errors);

        if ($this->getResponse()->getStatus()) {
            $this->execute($options);
        }

        return $this->getResponse();
    }

    /**
     * @return ResponseInterface
     */
    protected function getResponse(): ResponseInterface
    {
        return $this->processResponse;
    }
}
