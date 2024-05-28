<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use stdClass;

class M500ErrorResponseError implements \JsonSerializable
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $detail;

    /**
     * @var array
     */
    private $additionalInfo = [];

    /**
     * @param string $code
     * @param string $title
     * @param string $detail
     */
    public function __construct(string $code, string $title, string $detail)
    {
        $this->code = $code;
        $this->title = $title;
        $this->detail = $detail;
    }

    /**
     * Returns Code.
     * Error code that logically best represents the error encountered
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Error code that logically best represents the error encountered
     *
     * @required
     * @maps Code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Title.
     * Description of the error type
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * Description of the error type
     *
     * @required
     * @maps Title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Detail.
     * Details of the error that can help under the cause of the error
     */
    public function getDetail(): string
    {
        return $this->detail;
    }

    /**
     * Sets Detail.
     * Details of the error that can help under the cause of the error
     *
     * @required
     * @maps Detail
     */
    public function setDetail(string $detail): void
    {
        $this->detail = $detail;
    }

    /**
     * Returns Additional Info.
     *
     * @return array<string,string|null>|null
     */
    public function getAdditionalInfo(): ?array
    {
        if (count($this->additionalInfo) == 0) {
            return null;
        }
        return $this->additionalInfo['value'];
    }

    /**
     * Sets Additional Info.
     *
     * @maps AdditionalInfo
     *
     * @param array<string,string|null>|null $additionalInfo
     */
    public function setAdditionalInfo(?array $additionalInfo): void
    {
        $this->additionalInfo['value'] = $additionalInfo;
    }

    /**
     * Unsets Additional Info.
     */
    public function unsetAdditionalInfo(): void
    {
        $this->additionalInfo = [];
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
        $json['Code']               = $this->code;
        $json['Title']              = $this->title;
        $json['Detail']             = $this->detail;
        if (!empty($this->additionalInfo)) {
            $json['AdditionalInfo'] = $this->additionalInfo['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
