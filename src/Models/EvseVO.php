<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use stdClass;

/**
 * Each Location will contain one or more EVSEs (Electric Vehicle Supply Equipment). Each EVSE is
 * capable of charging one car at a time.
 */
class EvseVO implements \JsonSerializable
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
     * @var string|null
     */
    private $evseId;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var ConnectorVO[]|null
     */
    private $connectors;

    /**
     * @var string|null
     */
    private $authorizationMethods;

    /**
     * @var string|null
     */
    private $updated;

    /**
     * @var string|null
     */
    private $deleted;

    /**
     * @var string|null
     */
    private $physicalReference;

    /**
     * Returns Uid.
     * Internal identifier used to refer to single individual  EVSE unit.
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     * Internal identifier used to refer to single individual  EVSE unit.
     *
     * @maps uid
     */
    public function setUid(?int $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns External Id.
     * Identifier of the Evse as given by the Operator, unique for that Operator
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * Sets External Id.
     * Identifier of the Evse as given by the Operator, unique for that Operator
     *
     * @maps externalId
     */
    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * Returns Evse Id.
     * Standard EVSEId identifier (ISO-IEC-15118)
     */
    public function getEvseId(): ?string
    {
        return $this->evseId;
    }

    /**
     * Sets Evse Id.
     * Standard EVSEId identifier (ISO-IEC-15118)
     *
     * @maps evseId
     */
    public function setEvseId(?string $evseId): void
    {
        $this->evseId = $evseId;
    }

    /**
     * Returns Status.
     * The current status of the EVSE units availability
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The current status of the EVSE units availability
     *
     * @maps status
     * @factory \ShellEVLib\Models\EvseVOStatusEnum::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Connectors.
     * List of all connectors available on this EVSE unit.
     *
     * @return ConnectorVO[]|null
     */
    public function getConnectors(): ?array
    {
        return $this->connectors;
    }

    /**
     * Sets Connectors.
     * List of all connectors available on this EVSE unit.
     *
     * @maps connectors
     *
     * @param ConnectorVO[]|null $connectors
     */
    public function setConnectors(?array $connectors): void
    {
        $this->connectors = $connectors;
    }

    /**
     * Returns Authorization Methods.
     * Methods that can be used to Authorize sessions on this EVSE
     */
    public function getAuthorizationMethods(): ?string
    {
        return $this->authorizationMethods;
    }

    /**
     * Sets Authorization Methods.
     * Methods that can be used to Authorize sessions on this EVSE
     *
     * @maps authorizationMethods
     * @factory \ShellEVLib\Models\EvseVOAuthorizationMethodsEnum::checkValue
     */
    public function setAuthorizationMethods(?string $authorizationMethods): void
    {
        $this->authorizationMethods = $authorizationMethods;
    }

    /**
     * Returns Updated.
     * ISO8601-compliant UTC datetime of the last update of the EVSE
     */
    public function getUpdated(): ?string
    {
        return $this->updated;
    }

    /**
     * Sets Updated.
     * ISO8601-compliant UTC datetime of the last update of the EVSE
     *
     * @maps updated
     */
    public function setUpdated(?string $updated): void
    {
        $this->updated = $updated;
    }

    /**
     * Returns Deleted.
     * optional  ISO8601-compliant UTC deletion timestamp of the Evse
     */
    public function getDeleted(): ?string
    {
        return $this->deleted;
    }

    /**
     * Sets Deleted.
     * optional  ISO8601-compliant UTC deletion timestamp of the Evse
     *
     * @maps deleted
     */
    public function setDeleted(?string $deleted): void
    {
        $this->deleted = $deleted;
    }

    /**
     * Returns Physical Reference.
     * An optional number/string printed on the outside of the EVSE for visual identification
     */
    public function getPhysicalReference(): ?string
    {
        return $this->physicalReference;
    }

    /**
     * Sets Physical Reference.
     * An optional number/string printed on the outside of the EVSE for visual identification
     *
     * @maps physicalReference
     */
    public function setPhysicalReference(?string $physicalReference): void
    {
        $this->physicalReference = $physicalReference;
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
            $json['uid']                  = $this->uid;
        }
        if (isset($this->externalId)) {
            $json['externalId']           = $this->externalId;
        }
        if (isset($this->evseId)) {
            $json['evseId']               = $this->evseId;
        }
        if (isset($this->status)) {
            $json['status']               = EvseVOStatusEnum::checkValue($this->status);
        }
        if (isset($this->connectors)) {
            $json['connectors']           = $this->connectors;
        }
        if (isset($this->authorizationMethods)) {
            $json['authorizationMethods'] = EvseVOAuthorizationMethodsEnum::checkValue($this->authorizationMethods);
        }
        if (isset($this->updated)) {
            $json['updated']              = $this->updated;
        }
        if (isset($this->deleted)) {
            $json['deleted']              = $this->deleted;
        }
        if (isset($this->physicalReference)) {
            $json['physicalReference']    = $this->physicalReference;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}