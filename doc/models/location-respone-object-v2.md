
# Location Respone Object V2

## Structure

`LocationResponeObjectV2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | Unique Internal identifier used to refer to this Location by Shell Recharge | getUid(): ?string | setUid(?string uid): void |
| `externalId` | `?string` | Optional | Identifier as given by the Shell Recharge Operator, unique for that Operator | getExternalId(): ?string | setExternalId(?string externalId): void |
| `coordinates` | [`?Coordinates`](../../doc/models/coordinates.md) | Optional | Coordinates of the Shell Recharge Site Location | getCoordinates(): ?Coordinates | setCoordinates(?Coordinates coordinates): void |
| `operatorName` | `?string` | Optional | Operator of this Shell Recharge Location | getOperatorName(): ?string | setOperatorName(?string operatorName): void |
| `address` | [`?Address`](../../doc/models/address.md) | Optional | Address of the Shell Recharge Location | getAddress(): ?Address | setAddress(?Address address): void |
| `accessibility` | [`?AccessibilityV2`](../../doc/models/accessibility-v2.md) | Optional | Accessibility of the Location | getAccessibility(): ?AccessibilityV2 | setAccessibility(?AccessibilityV2 accessibility): void |
| `evses` | [`?(EvseV2[])`](../../doc/models/evse-v2.md) | Optional | - | getEvses(): ?array | setEvses(?array evses): void |
| `openingHours` | [`?(OpeningHoursObject[])`](../../doc/models/opening-hours-object.md) | Optional | Optional Opening Hours of the Location. Please note that it is not available for all sites. | getOpeningHours(): ?array | setOpeningHours(?array openingHours): void |
| `updated` | `?string` | Optional | ISO8601-compliant UTC datetime of the last update of the location | getUpdated(): ?string | setUpdated(?string updated): void |
| `locationType` | `?string` | Optional | the type of the location. Could be "UNKNOWN". | getLocationType(): ?string | setLocationType(?string locationType): void |
| `operatorId` | `?string` | Optional | Unique Id of the operator | getOperatorId(): ?string | setOperatorId(?string operatorId): void |
| `openTwentyFourSeven` | `?bool` | Optional | Whether the location is open 24/7 | getOpenTwentyFourSeven(): ?bool | setOpenTwentyFourSeven(?bool openTwentyFourSeven): void |

## Example

```php
use ShellEVLib\Models\Builders\LocationResponeObjectV2Builder;
use ShellEVLib\Models\Builders\CoordinatesBuilder;
use ShellEVLib\Models\Builders\AddressBuilder;

$locationResponeObjectV2 = LocationResponeObjectV2Builder::init()
    ->uid('NL*MKS*E0000001*0')
    ->externalId('01001188')
    ->coordinates(
        CoordinatesBuilder::init()
            ->latitude(39.14)
            ->longitude(36.94)
            ->build()
    )
    ->operatorName('TheNewMotion')
    ->address(
        AddressBuilder::init()
            ->streetAndNumber('streetAndNumber2')
            ->postalCode('postalCode8')
            ->city('city6')
            ->country('country0')
            ->build()
    )
    ->updated('2021-10-06T10:44:24Z')
    ->locationType('Unknown')
    ->operatorId('AT-HTB')
    ->openTwentyFourSeven(true)
    ->build();
```

