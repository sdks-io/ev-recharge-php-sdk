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
 * Bad Request
 */
class M400ErrorResponse implements \JsonSerializable
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
     * @var M400ErrorResponseError[]|null
     */
    private $errors;

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
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Errors.
     *
     * @return M400ErrorResponseError[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps Errors
     *
     * @param M400ErrorResponseError[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
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
        $json['RequestId']  = $this->requestId;
        $json['Status']     = $this->status;
        if (isset($this->errors)) {
            $json['Errors'] = $this->errors;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
