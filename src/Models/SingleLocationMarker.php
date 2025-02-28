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
 * A Marker is a place on the map that represent a single Location
 */
class SingleLocationMarker implements \JsonSerializable
{
    /**
     * @var string
     */
    private $markerType;

    /**
     * @var string|null
     */
    private $uniqueKey;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var Coordinates|null
     */
    private $coordinates;

    /**
     * @var float|null
     */
    private $evseCount;

    /**
     * @var float|null
     */
    private $maxPower;

    /**
     * @var string|null
     */
    private $geoHash;

    /**
     * @var float|null
     */
    private $locationUid;

    /**
     * @var string[]|null
     */
    private $authorizationMethods;

    /**
     * @var string|null
     */
    private $operatorId;

    /**
     * @param string $markerType
     */
    public function __construct(string $markerType)
    {
        $this->markerType = $markerType;
    }

    /**
     * Returns Marker Type.
     * Identifies the marker type. If it’s a `SingleLocationMarker`, then the value is `SingleLocation`
     */
    public function getMarkerType(): string
    {
        return $this->markerType;
    }

    /**
     * Sets Marker Type.
     * Identifies the marker type. If it’s a `SingleLocationMarker`, then the value is `SingleLocation`
     *
     * @required
     * @maps markerType
     */
    public function setMarkerType(string $markerType): void
    {
        $this->markerType = $markerType;
    }

    /**
     * Returns Unique Key.
     * Uniquely identifies the marker object
     */
    public function getUniqueKey(): ?string
    {
        return $this->uniqueKey;
    }

    /**
     * Sets Unique Key.
     * Uniquely identifies the marker object
     *
     * @maps uniqueKey
     */
    public function setUniqueKey(?string $uniqueKey): void
    {
        $this->uniqueKey = $uniqueKey;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     * @factory \ShellEVLib\Models\SingleLocationMarkerStatusEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Coordinates.
     * Coordinates of the Shell Recharge Site Location
     */
    public function getCoordinates(): ?Coordinates
    {
        return $this->coordinates;
    }

    /**
     * Sets Coordinates.
     * Coordinates of the Shell Recharge Site Location
     *
     * @maps coordinates
     */
    public function setCoordinates(?Coordinates $coordinates): void
    {
        $this->coordinates = $coordinates;
    }

    /**
     * Returns Evse Count.
     * Total number of Evse units in Locations that this Marker represents
     */
    public function getEvseCount(): ?float
    {
        return $this->evseCount;
    }

    /**
     * Sets Evse Count.
     * Total number of Evse units in Locations that this Marker represents
     *
     * @maps evseCount
     */
    public function setEvseCount(?float $evseCount): void
    {
        $this->evseCount = $evseCount;
    }

    /**
     * Returns Max Power.
     * Maximum power in kW across all locations grouped in this marker (disregarding availability)
     */
    public function getMaxPower(): ?float
    {
        return $this->maxPower;
    }

    /**
     * Sets Max Power.
     * Maximum power in kW across all locations grouped in this marker (disregarding availability)
     *
     * @maps maxPower
     */
    public function setMaxPower(?float $maxPower): void
    {
        $this->maxPower = $maxPower;
    }

    /**
     * Returns Geo Hash.
     * GeoHash of marker coordinates
     */
    public function getGeoHash(): ?string
    {
        return $this->geoHash;
    }

    /**
     * Sets Geo Hash.
     * GeoHash of marker coordinates
     *
     * @maps geoHash
     */
    public function setGeoHash(?string $geoHash): void
    {
        $this->geoHash = $geoHash;
    }

    /**
     * Returns Location Uid.
     * Unique ID of the Location this Marker represents
     */
    public function getLocationUid(): ?float
    {
        return $this->locationUid;
    }

    /**
     * Sets Location Uid.
     * Unique ID of the Location this Marker represents
     *
     * @maps locationUid
     */
    public function setLocationUid(?float $locationUid): void
    {
        $this->locationUid = $locationUid;
    }

    /**
     * Returns Authorization Methods.
     * Methods that can be used to Authorize sessions on this EVSE
     *
     * @return string[]|null
     */
    public function getAuthorizationMethods(): ?array
    {
        return $this->authorizationMethods;
    }

    /**
     * Sets Authorization Methods.
     * Methods that can be used to Authorize sessions on this EVSE
     *
     * @maps authorizationMethods
     * @factory \ShellEVLib\Models\SingleLocationMarkerAuthorizationMethodsItemsEnum::checkValue
     *
     * @param string[]|null $authorizationMethods
     */
    public function setAuthorizationMethods(?array $authorizationMethods): void
    {
        $this->authorizationMethods = $authorizationMethods;
    }

    /**
     * Returns Operator Id.
     * Unique Id of the operator
     */
    public function getOperatorId(): ?string
    {
        return $this->operatorId;
    }

    /**
     * Sets Operator Id.
     * Unique Id of the operator
     *
     * @maps operatorId
     */
    public function setOperatorId(?string $operatorId): void
    {
        $this->operatorId = $operatorId;
    }

    /**
     * Converts the SingleLocationMarker object to a human-readable string representation.
     *
     * @return string The string representation of the SingleLocationMarker object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SingleLocationMarker',
            [
                'markerType' => $this->markerType,
                'uniqueKey' => $this->uniqueKey,
                'status' => $this->status,
                'coordinates' => $this->coordinates,
                'evseCount' => $this->evseCount,
                'maxPower' => $this->maxPower,
                'geoHash' => $this->geoHash,
                'locationUid' => $this->locationUid,
                'authorizationMethods' => $this->authorizationMethods,
                'operatorId' => $this->operatorId
            ]
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
        $json['markerType']               = $this->markerType;
        if (isset($this->uniqueKey)) {
            $json['uniqueKey']            = $this->uniqueKey;
        }
        if (isset($this->status)) {
            $json['status']               = SingleLocationMarkerStatusEnum::checkValue($this->status);
        }
        if (isset($this->coordinates)) {
            $json['coordinates']          = $this->coordinates;
        }
        if (isset($this->evseCount)) {
            $json['evseCount']            = $this->evseCount;
        }
        if (isset($this->maxPower)) {
            $json['maxPower']             = $this->maxPower;
        }
        if (isset($this->geoHash)) {
            $json['geoHash']              = $this->geoHash;
        }
        if (isset($this->locationUid)) {
            $json['locationUid']          = $this->locationUid;
        }
        if (isset($this->authorizationMethods)) {
            $json['authorizationMethods'] =
                SingleLocationMarkerAuthorizationMethodsItemsEnum::checkValue(
                    $this->authorizationMethods
                );
        }
        if (isset($this->operatorId)) {
            $json['operatorId']           = $this->operatorId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
