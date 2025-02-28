<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use ShellEVLib\ApiHelper;
use stdClass;

/**
 * Coordinates of the Shell Recharge Site Location
 */
class Coordinates implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $latitude;

    /**
     * @var float|null
     */
    private $longitude;

    /**
     * Returns Latitude.
     * Latitude of the Coordinate
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * Sets Latitude.
     * Latitude of the Coordinate
     *
     * @maps latitude
     */
    public function setLatitude(?float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * Returns Longitude.
     * Longitude of the Coordinate
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * Sets Longitude.
     * Longitude of the Coordinate
     *
     * @maps longitude
     */
    public function setLongitude(?float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * Converts the Coordinates object to a human-readable string representation.
     *
     * @return string The string representation of the Coordinates object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Coordinates',
            ['latitude' => $this->latitude, 'longitude' => $this->longitude]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->latitude)) {
            $json['latitude']  = $this->latitude;
        }
        if (isset($this->longitude)) {
            $json['longitude'] = $this->longitude;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
