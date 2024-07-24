<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use stdClass;

class NotFoundErrMsg implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string[]|null
     */
    private $details;

    /**
     * Returns Code.
     * Error code
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Error code
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Message.
     * Error desctiption in English
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     * Error desctiption in English
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Description.
     * Technical details of the error message, the example which is given in the sample payload is one of
     * the scenarios. actual response will vary based on the technical nature
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Technical details of the error message, the example which is given in the sample payload is one of
     * the scenarios. actual response will vary based on the technical nature
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Details.
     *
     * @return string[]|null
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }

    /**
     * Sets Details.
     *
     * @maps details
     *
     * @param string[]|null $details
     */
    public function setDetails(?array $details): void
    {
        $this->details = $details;
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
        if (isset($this->code)) {
            $json['code']        = $this->code;
        }
        if (isset($this->message)) {
            $json['message']     = $this->message;
        }
        if (isset($this->description)) {
            $json['description'] = $this->description;
        }
        if (isset($this->details)) {
            $json['details']     = $this->details;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
