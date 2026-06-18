
# Multi Location Marker V2

A Marker is a place on the map that represent multiple Locations at the same spot

## Structure

`MultiLocationMarkerV2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `coordinates` | [`?Coordinates`](../../doc/models/coordinates.md) | Optional | Coordinates of the Shell Recharge Site Location | getCoordinates(): ?Coordinates | setCoordinates(?Coordinates coordinates): void |
| `locationCount` | `?float` | Optional | Number of Locations that this Marker represents in the given set of bounds | getLocationCount(): ?float | setLocationCount(?float locationCount): void |
| `evseCount` | `?float` | Optional | Total number of Evses in Locations that this Marker represents | getEvseCount(): ?float | setEvseCount(?float evseCount): void |
| `maxPower` | `?float` | Optional | Maximum power in kW across all locations grouped in this marker (disregarding availability) | getMaxPower(): ?float | setMaxPower(?float maxPower): void |
| `operatorName` | `?string` | Optional | Operator of this Shell Recharge Location | getOperatorName(): ?string | setOperatorName(?string operatorName): void |
| `markerType` | `string` | Required, Constant | Type of the Marker, in this case it will always be MultiLocation<br><br>**Value**: `'MultiLocation'` | getMarkerType(): string | setMarkerType(string markerType): void |

## Example

```php
use ShellEVLib\Models\Builders\MultiLocationMarkerV2Builder;
use ShellEVLib\Models\Builders\CoordinatesBuilder;

$multiLocationMarkerV2 = MultiLocationMarkerV2Builder::init()
    ->coordinates(
        CoordinatesBuilder::init()
            ->latitude(39.14)
            ->longitude(36.94)
            ->build()
    )
    ->locationCount(6)
    ->evseCount(10)
    ->maxPower(42)
    ->operatorName('TheNewMotion')
    ->build();
```

