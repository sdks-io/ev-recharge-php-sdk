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

class GetMarkersListConnectorTypesEnum
{
    public const AVCON = 'Avcon';

    public const DOMESTIC = 'Domestic';

    public const INDUSTRIAL2PDC = 'Industrial2PDc';

    public const INDUSTRIALPNEAC = 'IndustrialPneAc';

    public const INDUSTRIAL3PEAC = 'Industrial3PEAc';

    public const INDUSTRIAL3PENAC = 'Industrial3PENAc';

    public const TYPE1 = 'Type1';

    public const TYPE1COMBO = 'Type1Combo';

    public const TYPE2 = 'Type2';

    public const TYPE2COMBO = 'Type2Combo';

    public const TYPE3 = 'Type3';

    public const LPI = 'LPI';

    public const NEMA520 = 'Nema520';

    public const SAEJ1772 = 'SAEJ1772';

    public const SPI = 'SPI';

    public const TEPCOCHADEMO = 'TepcoCHAdeMO';

    public const TESLA = 'Tesla';

    public const UNSPECIFIED = 'Unspecified';

    private const _ALL_VALUES = [
        self::AVCON,
        self::DOMESTIC,
        self::INDUSTRIAL2PDC,
        self::INDUSTRIALPNEAC,
        self::INDUSTRIAL3PEAC,
        self::INDUSTRIAL3PENAC,
        self::TYPE1,
        self::TYPE1COMBO,
        self::TYPE2,
        self::TYPE2COMBO,
        self::TYPE3,
        self::LPI,
        self::NEMA520,
        self::SAEJ1772,
        self::SPI,
        self::TEPCOCHADEMO,
        self::TESLA,
        self::UNSPECIFIED
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
        throw new Exception("$value is invalid for GetMarkersListConnectorTypesEnum.");
    }
}
