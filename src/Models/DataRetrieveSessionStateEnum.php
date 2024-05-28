<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * Describes the session state
 */
class DataRetrieveSessionStateEnum
{
    public const STARTED = 'started';

    public const STOPPED = 'stopped';

    public const STARTREQUESTED = 'start-requested';

    public const STOPREQUESTED = 'stop-requested';

    public const FAILEDTOSTART = 'failed-to-start';

    public const FAILEDTOSTOP = 'failed-to-stop';

    private const _ALL_VALUES = [
        self::STARTED,
        self::STOPPED,
        self::STARTREQUESTED,
        self::STOPREQUESTED,
        self::FAILEDTOSTART,
        self::FAILEDTOSTOP
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for DataRetrieveSessionStateEnum.");
    }
}