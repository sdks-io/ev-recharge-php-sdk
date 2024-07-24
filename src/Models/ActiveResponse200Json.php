<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use stdClass;

class ActiveResponse200Json implements \JsonSerializable
{
    /**
     * @var string
     */
    private $requestId;

    /**
     * @var string
     */
    private $status;

    /**
     * @var DataActive[]|null
     */
    private $data;

    /**
     * @param string $requestId
     * @param string $status
     */
    public function __construct(string $requestId, string $status)
    {
        $this->requestId = $requestId;
        $this->status = $status;
    }

    /**
     * Returns Request Id.
     * Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played
     * back in the response from the request.
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     * Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played
     * back in the response from the request.
     *
     * @required
     * @maps requestId
     */
    public function setRequestId(string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * Returns Status.
     * Indicates overall status of the request
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Indicates overall status of the request
     *
     * @required
     * @maps status
     * @factory \ShellEVLib\Models\ActiveResponse200JsonStatusEnum::checkValue
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Data.
     *
     * @return DataActive[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @maps data
     *
     * @param DataActive[]|null $data
     */
    public function setData(?array $data): void
    {
        $this->data = $data;
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
        $json['requestId'] = $this->requestId;
        $json['status']    = ActiveResponse200JsonStatusEnum::checkValue($this->status);
        if (isset($this->data)) {
            $json['data']  = $this->data;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
