<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\M500ErrorResponse;

/**
 * Builder for model M500ErrorResponse
 *
 * @see M500ErrorResponse
 */
class M500ErrorResponseBuilder
{
    /**
     * @var M500ErrorResponse
     */
    private $instance;

    private function __construct(M500ErrorResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new m500 error response Builder object.
     */
    public static function init(string $requestId, string $status): self
    {
        return new self(new M500ErrorResponse($requestId, $status));
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
     * Initializes a new m500 error response object.
     */
    public function build(): M500ErrorResponse
    {
        return CoreHelper::clone($this->instance);
    }
}