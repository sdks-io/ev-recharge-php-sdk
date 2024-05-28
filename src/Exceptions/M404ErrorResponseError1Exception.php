<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Exceptions;

/**
 * Invalid charge token with given EmaId was not found.
 *
 * Backend HTTP 410 should be transformed to 404.
 */
class M404ErrorResponseError1Exception extends ApiException
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
     * @var \ShellEVLib\Models\M404ErrorResponseError[]|null
     */
    private $errors;

    /**
     * @param string $reason
     * @param \ShellEVLib\Http\HttpRequest $request
     * @param \ShellEVLib\Http\HttpResponse $response
     * @param string $requestId
     * @param string $status
     */
    public function __construct(
        string $reason,
        \ShellEVLib\Http\HttpRequest $request,
        \ShellEVLib\Http\HttpResponse $response,
        string $requestId,
        string $status
    ) {
        parent::__construct($reason, $request, $response);
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
     * @return \ShellEVLib\Models\M404ErrorResponseError[]|null
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
     * @param \ShellEVLib\Models\M404ErrorResponseError[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }
}