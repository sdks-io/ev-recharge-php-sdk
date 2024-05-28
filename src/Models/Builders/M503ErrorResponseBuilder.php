<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\M503ErrorResponse;

/**
 * Builder for model M503ErrorResponse
 *
 * @see M503ErrorResponse
 */
class M503ErrorResponseBuilder
{
    /**
     * @var M503ErrorResponse
     */
    private $instance;

    private function __construct(M503ErrorResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new m503 error response Builder object.
     */
    public static function init(string $requestId, string $status): self
    {
        return new self(new M503ErrorResponse($requestId, $status));
    }

    /**
     * Sets errors field.
     */
    public function errors(?array $value): self
    {
        $this->instance->setErrors($value);
        return $this;
    }

    /**
     * Initializes a new m503 error response object.
     */
    public function build(): M503ErrorResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
