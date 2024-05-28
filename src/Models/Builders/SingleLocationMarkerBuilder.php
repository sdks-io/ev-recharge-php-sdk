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
use ShellEVLib\Models\SingleLocationMarker;

/**
 * Builder for model SingleLocationMarker
 *
 * @see SingleLocationMarker
 */
class SingleLocationMarkerBuilder
{
    /**
     * @var SingleLocationMarker
     */
    private $instance;

    private function __construct(SingleLocationMarker $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new single location marker Builder object.
     */
    public static function init(string $markerType): self
    {
        return new self(new SingleLocationMarker($markerType));
    }

    /**
     * Sets unique key field.
     */
    public function uniqueKey(?string $value): self
    {
        $this->instance->setUniqueKey($value);
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
     * Sets coordinates field.
     */
    public function coordinates(?Coordinates $value): self
    {
        $this->instance->setCoordinates($value);
        return $this;
    }

    /**
     * Sets evse count field.
     */
    public function evseCount(?float $value): self
    {
        $this->instance->setEvseCount($value);
        return $this;
    }

    /**
     * Sets max power field.
     */
    public function maxPower(?float $value): self
    {
        $this->instance->setMaxPower($value);
        return $this;
    }

    /**
     * Sets geo hash field.
     */
    public function geoHash(?string $value): self
    {
        $this->instance->setGeoHash($value);
        return $this;
    }

    /**
     * Sets location uid field.
     */
    public function locationUid(?float $value): self
    {
        $this->instance->setLocationUid($value);
        return $this;
    }

    /**
     * Sets authorization methods field.
     */
    public function authorizationMethods(?array $value): self
    {
        $this->instance->setAuthorizationMethods($value);
        return $this;
    }

    /**
     * Sets operator id field.
     */
    public function operatorId(?string $value): self
    {
        $this->instance->setOperatorId($value);
        return $this;
    }

    /**
     * Initializes a new single location marker object.
     */
    public function build(): SingleLocationMarker
    {
        return CoreHelper::clone($this->instance);
    }
}
