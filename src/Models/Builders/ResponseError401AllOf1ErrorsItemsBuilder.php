<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\ResponseError401AllOf1ErrorsItems;

/**
 * Builder for model ResponseError401AllOf1ErrorsItems
 *
 * @see ResponseError401AllOf1ErrorsItems
 */
class ResponseError401AllOf1ErrorsItemsBuilder
{
    /**
     * @var ResponseError401AllOf1ErrorsItems
     */
    private $instance;

    private function __construct(ResponseError401AllOf1ErrorsItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response error 401 all of 1 errors items Builder object.
     */
    public static function init(string $code, string $title, string $detail): self
    {
        return new self(new ResponseError401AllOf1ErrorsItems($code, $title, $detail));
    }

    /**
     * Sets additional info field.
     */
    public function additionalInfo(?array $value): self
    {
        $this->instance->setAdditionalInfo($value);
        return $this;
    }

    /**
     * Unsets additional info field.
     */
    public function unsetAdditionalInfo(): self
    {
        $this->instance->unsetAdditionalInfo();
        return $this;
    }

    /**
     * Initializes a new response error 401 all of 1 errors items object.
     */
    public function build(): ResponseError401AllOf1ErrorsItems
    {
        return CoreHelper::clone($this->instance);
    }
}