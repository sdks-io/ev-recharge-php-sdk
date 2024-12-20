<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\Tariff;

/**
 * Builder for model Tariff
 *
 * @see Tariff
 */
class TariffBuilder
{
    /**
     * @var Tariff
     */
    private $instance;

    private function __construct(Tariff $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Tariff Builder object.
     */
    public static function init(): self
    {
        return new self(new Tariff());
    }

    /**
     * Sets start Fee field.
     *
     * @param float|null $value
     */
    public function startFee(?float $value): self
    {
        $this->instance->setStartFee($value);
        return $this;
    }

    /**
     * Sets per Minute field.
     *
     * @param float|null $value
     */
    public function perMinute(?float $value): self
    {
        $this->instance->setPerMinute($value);
        return $this;
    }

    /**
     * Sets per K Wh field.
     *
     * @param float|null $value
     */
    public function perKWh(?float $value): self
    {
        $this->instance->setPerKWh($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets updated field.
     *
     * @param string|null $value
     */
    public function updated(?string $value): self
    {
        $this->instance->setUpdated($value);
        return $this;
    }

    /**
     * Sets updated By field.
     *
     * @param string|null $value
     */
    public function updatedBy(?string $value): self
    {
        $this->instance->setUpdatedBy($value);
        return $this;
    }

    /**
     * Sets structure field.
     *
     * @param string|null $value
     */
    public function structure(?string $value): self
    {
        $this->instance->setStructure($value);
        return $this;
    }

    /**
     * Initializes a new Tariff object.
     */
    public function build(): Tariff
    {
        return CoreHelper::clone($this->instance);
    }
}
