<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\EvseVO;

/**
 * Builder for model EvseVO
 *
 * @see EvseVO
 */
class EvseVOBuilder
{
    /**
     * @var EvseVO
     */
    private $instance;

    private function __construct(EvseVO $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new evse vo Builder object.
     */
    public static function init(): self
    {
        return new self(new EvseVO());
    }

    /**
     * Sets uid field.
     */
    public function uid(?int $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets external id field.
     */
    public function externalId(?string $value): self
    {
        $this->instance->setExternalId($value);
        return $this;
    }

    /**
     * Sets evse id field.
     */
    public function evseId(?string $value): self
    {
        $this->instance->setEvseId($value);
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
     * Sets connectors field.
     */
    public function connectors(?array $value): self
    {
        $this->instance->setConnectors($value);
        return $this;
    }

    /**
     * Sets authorization methods field.
     */
    public function authorizationMethods(?string $value): self
    {
        $this->instance->setAuthorizationMethods($value);
        return $this;
    }

    /**
     * Sets updated field.
     */
    public function updated(?string $value): self
    {
        $this->instance->setUpdated($value);
        return $this;
    }

    /**
     * Sets deleted field.
     */
    public function deleted(?string $value): self
    {
        $this->instance->setDeleted($value);
        return $this;
    }

    /**
     * Sets physical reference field.
     */
    public function physicalReference(?string $value): self
    {
        $this->instance->setPhysicalReference($value);
        return $this;
    }

    /**
     * Initializes a new evse vo object.
     */
    public function build(): EvseVO
    {
        return CoreHelper::clone($this->instance);
    }
}