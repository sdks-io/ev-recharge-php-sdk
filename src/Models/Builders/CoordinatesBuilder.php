<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\Coordinates;

/**
 * Builder for model Coordinates
 *
 * @see Coordinates
 */
class CoordinatesBuilder
{
    /**
     * @var Coordinates
     */
    private $instance;

    private function __construct(Coordinates $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new coordinates Builder object.
     */
    public static function init(): self
    {
        return new self(new Coordinates());
    }

    /**
     * Sets latitude field.
     */
    public function latitude(?float $value): self
    {
        $this->instance->setLatitude($value);
        return $this;
    }

    /**
     * Sets longitude field.
     */
    public function longitude(?float $value): self
    {
        $this->instance->setLongitude($value);
        return $this;
    }

    /**
     * Initializes a new coordinates object.
     */
    public function build(): Coordinates
    {
        return CoreHelper::clone($this->instance);
    }
}