<?php

declare(strict_types=1);

namespace Process;

interface ValidatorInterface
{
    /**
     * Validate data
     *
     * @param array $data
     *
     * @return array
     */
    public function validate(array $data = []): array;
}