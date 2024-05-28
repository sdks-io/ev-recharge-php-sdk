<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use stdClass;

class SuccessResponse implements \JsonSerializable
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
     * A unique request id in GUID format. The value is written to the Shell API Platform audit log for end
     * to end traceability of a request.
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     * A unique request id in GUID format. The value is written to the Shell API Platform audit log for end
     * to end traceability of a request.
     *
     * @required
     * @maps RequestId
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
     * @maps Status
     * @factory \ShellEVLib\Models\ResponseBaseStatusEnum::checkValue
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
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
        $json['RequestId'] = $this->requestId;
        $json['Status']    = ResponseBaseStatusEnum::checkValue($this->status);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}