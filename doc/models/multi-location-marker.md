
# Multi Location Marker

A Marker is a place on the map that represent multiple Locations at the same spot

## Structure

`MultiLocationMarker`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `markerType` | `string` | Required | Identifies the marker type. If it's a `MultiLocationMarker`, then the value is `MultiLocation` | getMarkerType(): string | setMarkerType(string markerType): void |
| `uniqueKey` | `?string` | Optional | Uniquely identifies the marker object | getUniqueKey(): ?string | setUniqueKey(?string uniqueKey): void |
| `coordinates` | [`?Coordinates1`](../../doc/models/coordinates-1.md) | Optional | - | getCoordinates(): ?Coordinates1 | setCoordinates(?Coordinates1 coordinates): void |
| `locationCount` | `?float` | Optional | Number of Locations that this Marker represents in the given set of bounds | getLocationCount(): ?float | setLocationCount(?float locationCount): void |
| `evseCount` | `?float` | Optional | Total number of Evses in Locations that this Marker represents | getEvseCount(): ?float | setEvseCount(?float evseCount): void |
| `maxPower` | `?float` | Optional | Maximum power in kW across all locations grouped in this marker (disregarding availability) | getMaxPower(): ?float | setMaxPower(?float maxPower): void |
| `geoHash` | `?string` | Optional | GeoHash of marker coordinates | getGeoHash(): ?string | setGeoHash(?string geoHash): void |

## Example

```php
use ShellEVLib\Models\Builders\MultiLocationMarkerBuilder;
use ShellEVLib\Models\Builders\Coordinates1Builder;

$multiLocationMarker = MultiLocationMarkerBuilder::init(
    'MultiLocation'
)
    ->uniqueKey('2060319_6')
    ->coordinates(
        Coordinates1Builder::init()
            ->latitude(39.14)
            ->longitude(36.94)
            ->build()
    )
    ->locationCount(6)
    ->evseCount(10)
    ->maxPower(42)
    ->geoHash('sx')
    ->build();
```

