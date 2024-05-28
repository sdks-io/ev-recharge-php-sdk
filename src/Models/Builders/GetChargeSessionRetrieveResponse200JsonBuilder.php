<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellEVLib\Models\GetChargeSessionRetrieveResponse200Json;

/**
 * Builder for model GetChargeSessionRetrieveResponse200Json
 *
 * @see GetChargeSessionRetrieveResponse200Json
 */
class GetChargeSessionRetrieveResponse200JsonBuilder
{
    /**
     * @var GetChargeSessionRetrieveResponse200Json
     */
    private $instance;

    private function __construct(GetChargeSessionRetrieveResponse200Json $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new get charge session retrieve response 200 json Builder object.
     */
    public static function init(string $requestId, string $status): self
    {
        return new self(new GetChargeSessionRetrieveResponse200Json($requestId, $status));
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new get charge session retrieve response 200 json object.
     */
    public function build(): GetChargeSessionRetrieveResponse200Json
    {
        return CoreHelper::clone($this->instance);
    }
}
