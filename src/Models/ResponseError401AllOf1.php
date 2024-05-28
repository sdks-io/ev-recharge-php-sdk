<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use stdClass;

class ResponseError401AllOf1 implements \JsonSerializable
{
    /**
     * @var ResponseError401AllOf1ErrorsItems[]
     */
    private $errors;

    /**
     * @param ResponseError401AllOf1ErrorsItems[] $errors
     */
    public function __construct(array $errors)
    {
        $this->errors = $errors;
    }

    /**
     * Returns Errors.
     * Details of error(s) encountered
     *
     * @return ResponseError401AllOf1ErrorsItems[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Details of error(s) encountered
     *
     * @required
     * @maps Errors
     *
     * @param ResponseError401AllOf1ErrorsItems[] $errors
     */
    public function setErrors(array $errors): void
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
        $json['Errors'] = $this->errors;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}