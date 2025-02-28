<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Exceptions;

use ShellEVLib\ApiHelper;

class TooManyRequestsException extends ApiException
{
    /**
     * @var string|null
     */
    private $requestId;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var \ShellEVLib\Models\RatelimitErrMsg[]|null
     */
    private $errors;

    /**
     * Returns Request Id.
     * RequestID is unique identifier value that is attached to requests and messages that allow reference
     * to a particular transaction or event chain.
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     * RequestID is unique identifier value that is attached to requests and messages that allow reference
     * to a particular transaction or event chain.
     *
     * @maps requestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * Returns Status.
     * Status of the request
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status of the request
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Errors.
     * Exception details of the error
     *
     * @return \ShellEVLib\Models\RatelimitErrMsg[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Exception details of the error
     *
     * @maps errors
     *
     * @param \ShellEVLib\Models\RatelimitErrMsg[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Converts the TooManyRequestsException object to a human-readable string representation.
     *
     * @return string The string representation of the TooManyRequestsException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TooManyRequestsException',
            ['requestId' => $this->requestId, 'status' => $this->status, 'errors' => $this->errors],
            parent::__toString()
        );
    }
}
