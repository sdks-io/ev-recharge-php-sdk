<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Exceptions;

class NotFoundException extends ApiException
{
    /**
     * @var string|null
     */
    private $codeProperty;

    /**
     * @var string|null
     */
    private $messageProperty;

    /**
     * Returns Code Property.
     * Error code
     */
    public function getCodeProperty(): ?string
    {
        return $this->codeProperty;
    }

    /**
     * Sets Code Property.
     * Error code
     *
     * @maps code
     */
    public function setCodeProperty(?string $codeProperty): void
    {
        $this->codeProperty = $codeProperty;
    }

    /**
     * Returns Message Property.
     * Error desctiption in English
     */
    public function getMessageProperty(): ?string
    {
        return $this->messageProperty;
    }

    /**
     * Sets Message Property.
     * Error desctiption in English
     *
     * @maps message
     */
    public function setMessageProperty(?string $messageProperty): void
    {
        $this->messageProperty = $messageProperty;
    }
}