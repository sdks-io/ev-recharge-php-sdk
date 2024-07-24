<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\Response;

/**
 * Builder for model Response
 *
 * @see Response
 */
class ResponseBuilder
{
    /**
     * @var Response
     */
    private $instance;

    private function __construct(Response $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response Builder object.
     */
    public static function init(): self
    {
        return new self(new Response());
    }

    /**
     * Sets request id field.
     */
    public function requestId(?string $value): self
    {
        $this->instance->setRequestId($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new response object.
     */
    public function build(): Response
    {
        return CoreHelper::clone($this->instance);
    }
}