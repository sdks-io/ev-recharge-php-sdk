<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\ChargeRetrieveState;
use ShellEVLib\Models\DataRetrieve;

/**
 * Builder for model DataRetrieve
 *
 * @see DataRetrieve
 */
class DataRetrieveBuilder
{
    /**
     * @var DataRetrieve
     */
    private $instance;

    private function __construct(DataRetrieve $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Data Retrieve Builder object.
     */
    public static function init(): self
    {
        return new self(new DataRetrieve());
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets user Id field.
     *
     * @param string|null $value
     */
    public function userId(?string $value): self
    {
        $this->instance->setUserId($value);
        return $this;
    }

    /**
     * Sets ema Id field.
     *
     * @param string|null $value
     */
    public function emaId(?string $value): self
    {
        $this->instance->setEmaId($value);
        return $this;
    }

    /**
     * Sets evse Id field.
     *
     * @param string|null $value
     */
    public function evseId(?string $value): self
    {
        $this->instance->setEvseId($value);
        return $this;
    }

    /**
     * Sets last Updated field.
     *
     * @param string|null $value
     */
    public function lastUpdated(?string $value): self
    {
        $this->instance->setLastUpdated($value);
        return $this;
    }

    /**
     * Sets started At field.
     *
     * @param \DateTime|null $value
     */
    public function startedAt(?\DateTime $value): self
    {
        $this->instance->setStartedAt($value);
        return $this;
    }

    /**
     * Sets stopped At field.
     *
     * @param \DateTime|null $value
     */
    public function stoppedAt(?\DateTime $value): self
    {
        $this->instance->setStoppedAt($value);
        return $this;
    }

    /**
     * Unsets stopped At field.
     */
    public function unsetStoppedAt(): self
    {
        $this->instance->unsetStoppedAt();
        return $this;
    }

    /**
     * Sets session State field.
     *
     * @param ChargeRetrieveState|null $value
     */
    public function sessionState(?ChargeRetrieveState $value): self
    {
        $this->instance->setSessionState($value);
        return $this;
    }

    /**
     * Initializes a new Data Retrieve object.
     */
    public function build(): DataRetrieve
    {
        return CoreHelper::clone($this->instance);
    }
}
