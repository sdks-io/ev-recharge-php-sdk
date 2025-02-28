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

class ChargesessionStartBody implements \JsonSerializable
{
    /**
     * @var string
     */
    private $evChargeNumber;

    /**
     * @var string
     */
    private $evseId;

    /**
     * @param string $evChargeNumber
     * @param string $evseId
     */
    public function __construct(string $evChargeNumber, string $evseId)
    {
        $this->evChargeNumber = $evChargeNumber;
        $this->evseId = $evseId;
    }

    /**
     * Returns Ev Charge Number.
     * Ev charge number
     */
    public function getEvChargeNumber(): string
    {
        return $this->evChargeNumber;
    }

    /**
     * Sets Ev Charge Number.
     * Ev charge number
     *
     * @required
     * @maps evChargeNumber
     */
    public function setEvChargeNumber(string $evChargeNumber): void
    {
        $this->evChargeNumber = $evChargeNumber;
    }

    /**
     * Returns Evse Id.
     * This is the Electric Vehicle EquipmentID
     */
    public function getEvseId(): string
    {
        return $this->evseId;
    }

    /**
     * Sets Evse Id.
     * This is the Electric Vehicle EquipmentID
     *
     * @required
     * @maps evseId
     */
    public function setEvseId(string $evseId): void
    {
        $this->evseId = $evseId;
    }

    /**
     * Converts the ChargesessionStartBody object to a human-readable string representation.
     *
     * @return string The string representation of the ChargesessionStartBody object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ChargesessionStartBody',
            ['evChargeNumber' => $this->evChargeNumber, 'evseId' => $this->evseId]
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
        $json['evChargeNumber'] = $this->evChargeNumber;
        $json['evseId']         = $this->evseId;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
