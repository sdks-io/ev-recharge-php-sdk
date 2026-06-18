
# Single Location Marker Response

## Structure

`SingleLocationMarkerResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | requestId is unique identifier value that is attached to requests and messages that allow reference to a particular transaction or event chain. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | status of the API call | getStatus(): ?string | setStatus(?string status): void |
| `data` | array<[SingleLocationMarker](../../doc/models/single-location-marker.md)\|[MultiLocationMarker](../../doc/models/multi-location-marker.md)>\|null | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellEVLib\Models\Builders\SingleLocationMarkerResponseBuilder;
use ShellEVLib\Models\Builders\SingleLocationMarkerBuilder;
use ShellEVLib\Models\SingleLocationMarkerStatusEnum;
use ShellEVLib\Models\Builders\Coordinates1Builder;

$singleLocationMarkerResponse = SingleLocationMarkerResponseBuilder::init()
    ->requestId('9d2dee33-7803-485a-a2b1-2c7538e597ee')
    ->status('SUCCESS')
    ->data(
        [
            SingleLocationMarkerBuilder::init(
                'SingleLocation'
            )
                ->uniqueKey('uniqueKey2')
                ->status(SingleLocationMarkerStatusEnum::AVAILABLE)
                ->coordinates(
                    Coordinates1Builder::init()
                        ->latitude(39.14)
                        ->longitude(36.94)
                        ->build()
                )
                ->evseCount(26.34)
                ->maxPower(241.78)
                ->build(),
            SingleLocationMarkerBuilder::init(
                'SingleLocation'
            )
                ->uniqueKey('uniqueKey2')
                ->status(SingleLocationMarkerStatusEnum::AVAILABLE)
                ->coordinates(
                    Coordinates1Builder::init()
                        ->latitude(39.14)
                        ->longitude(36.94)
                        ->build()
                )
                ->evseCount(26.34)
                ->maxPower(241.78)
                ->build(),
            SingleLocationMarkerBuilder::init(
                'SingleLocation'
            )
                ->uniqueKey('uniqueKey2')
                ->status(SingleLocationMarkerStatusEnum::AVAILABLE)
                ->coordinates(
                    Coordinates1Builder::init()
                        ->latitude(39.14)
                        ->longitude(36.94)
                        ->build()
                )
                ->evseCount(26.34)
                ->maxPower(241.78)
                ->build()
        ]
    )
    ->build();
```

