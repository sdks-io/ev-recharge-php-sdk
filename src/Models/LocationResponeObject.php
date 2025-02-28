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

class LocationResponeObject implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $externalId;

    /**
     * @var Coordinates|null
     */
    private $coordinates;

    /**
     * @var string|null
     */
    private $operatorName;

    /**
     * @var Address|null
     */
    private $address;

    /**
     * @var Accessibility|null
     */
    private $accessibility;

    /**
     * @var EvseVO[]|null
     */
    private $evses;

    /**
     * @var OpeningHoursObject[]|null
     */
    private $openingHours;

    /**
     * @var string|null
     */
    private $updated;

    /**
     * @var string|null
     */
    private $operatorComment;

    /**
     * @var string|null
     */
    private $locationType;

    /**
     * Returns Uid.
     * Unique Internal identifier used to refer to this Location by Shell Recharge
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * Unique Internal identifier used to refer to this Location by Shell Recharge
     *
     * @maps uid
     */
    public function setUid(?int $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns External Id.
     * Identifier as given by the Shell Recharge Operator, unique for that Operator
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * Sets External Id.
     * Identifier as given by the Shell Recharge Operator, unique for that Operator
     *
     * @maps externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
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
     * Returns Operator Name.
     * Operator of this Shell Recharge Location
     */
    public function getOperatorName(): ?string
    {
        return $this->operatorName;
    }

    /**
     * Sets Operator Name.
     * Operator of this Shell Recharge Location
     *
     * @maps operatorName
     */
    public function setOperatorName(?string $operatorName): void
    {
        $this->operatorName = $operatorName;
    }

    /**
     * Returns Address.
     * Address of the Shell Recharge Location
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * Address of the Shell Recharge Location
     *
     * @maps address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Accessibility.
     * Accessibility of the Location
     */
    public function getAccessibility(): ?Accessibility
    {
        return $this->accessibility;
    }

    /**
     * Sets Accessibility.
     * Accessibility of the Location
     *
     * @maps accessibility
     */
    public function setAccessibility(?Accessibility $accessibility): void
    {
        $this->accessibility = $accessibility;
    }

    /**
     * Returns Evses.
     *
     * @return EvseVO[]|null
     */
    public function getEvses(): ?array
    {
        return $this->evses;
    }

    /**
     * Sets Evses.
     *
     * @maps evses
     *
     * @param EvseVO[]|null $evses
     */
    public function setEvses(?array $evses): void
    {
        $this->evses = $evses;
    }

    /**
     * Returns Opening Hours.
     * Optional Opening Hours of the Location. Please note that it is not available for all sites.
     *
     * @return OpeningHoursObject[]|null
     */
    public function getOpeningHours(): ?array
    {
        return $this->openingHours;
    }

    /**
     * Sets Opening Hours.
     * Optional Opening Hours of the Location. Please note that it is not available for all sites.
     *
     * @maps openingHours
     *
     * @param OpeningHoursObject[]|null $openingHours
     */
    public function setOpeningHours(?array $openingHours): void
    {
        $this->openingHours = $openingHours;
    }

    /**
     * Returns Updated.
     * ISO8601-compliant UTC datetime of the last update of the location
     */
    public function getUpdated(): ?string
    {
        return $this->updated;
    }

    /**
     * Sets Updated.
     * ISO8601-compliant UTC datetime of the last update of the location
     *
     * @maps updated
     */
    public function setUpdated(?string $updated): void
    {
        $this->updated = $updated;
    }

    /**
     * Returns Operator Comment.
     * optional Operator-wide arbitrary text (eg promotional, warning)
     */
    public function getOperatorComment(): ?string
    {
        return $this->operatorComment;
    }

    /**
     * Sets Operator Comment.
     * optional Operator-wide arbitrary text (eg promotional, warning)
     *
     * @maps operatorComment
     */
    public function setOperatorComment(?string $operatorComment): void
    {
        $this->operatorComment = $operatorComment;
    }

    /**
     * Returns Location Type.
     * the type of the location. Could be "UNKNOWN".
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * Sets Location Type.
     * the type of the location. Could be "UNKNOWN".
     *
     * @maps locationType
     */
    public function setLocationType(?string $locationType): void
    {
        $this->locationType = $locationType;
    }

    /**
     * Converts the LocationResponeObject object to a human-readable string representation.
     *
     * @return string The string representation of the LocationResponeObject object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LocationResponeObject',
            [
                'uid' => $this->uid,
                'externalId' => $this->externalId,
                'coordinates' => $this->coordinates,
                'operatorName' => $this->operatorName,
                'address' => $this->address,
                'accessibility' => $this->accessibility,
                'evses' => $this->evses,
                'openingHours' => $this->openingHours,
                'updated' => $this->updated,
                'operatorComment' => $this->operatorComment,
                'locationType' => $this->locationType
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
        if (isset($this->uid)) {
            $json['uid']             = $this->uid;
        }
        if (isset($this->externalId)) {
            $json['externalId']      = $this->externalId;
        }
        if (isset($this->coordinates)) {
            $json['coordinates']     = $this->coordinates;
        }
        if (isset($this->operatorName)) {
            $json['operatorName']    = $this->operatorName;
        }
        if (isset($this->address)) {
            $json['address']         = $this->address;
        }
        if (isset($this->accessibility)) {
            $json['accessibility']   = $this->accessibility;
        }
        if (isset($this->evses)) {
            $json['evses']           = $this->evses;
        }
        if (isset($this->openingHours)) {
            $json['openingHours']    = $this->openingHours;
        }
        if (isset($this->updated)) {
            $json['updated']         = $this->updated;
        }
        if (isset($this->operatorComment)) {
            $json['operatorComment'] = $this->operatorComment;
        }
        if (isset($this->locationType)) {
            $json['locationType']    = $this->locationType;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
