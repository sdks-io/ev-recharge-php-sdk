
# Coordinates 1

## Structure

`Coordinates1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `latitude` | `?float` | Optional | Latitude of the Coordinate<br><br>**Constraints**: `>= -90`, `<= 90` | getLatitude(): ?float | setLatitude(?float latitude): void |
| `longitude` | `?float` | Optional | Longitude of the Coordinate<br><br>**Constraints**: `>= -180`, `<= 180` | getLongitude(): ?float | setLongitude(?float longitude): void |

## Example

```php
use ShellEVLib\Models\Builders\Coordinates1Builder;

$coordinates1 = Coordinates1Builder::init()
    ->latitude(52.143814)
    ->longitude(52.143814)
    ->build();
```

