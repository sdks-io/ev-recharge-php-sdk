
# Single Location Marker Response V2

## Structure

`SingleLocationMarkerResponseV2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | requestId is unique identifier value that is attached to requests and messages that allow reference to a particular transaction or event chain. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | status of the API call | getStatus(): ?string | setStatus(?string status): void |
| `data` | array<[SingleLocationMarkerV2](../../doc/models/single-location-marker-v2.md)\|[MultiLocationMarkerV2](../../doc/models/multi-location-marker-v2.md)>\|null | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellEVLib\Models\Builders\SingleLocationMarkerResponseV2Builder;
use ShellEVLib\Models\Builders\SingleLocationMarkerV2Builder;
use ShellEVLib\Models\SingleLocationMarkerStatusEnum;
use ShellEVLib\Models\Builders\CoordinatesBuilder;

$singleLocationMarkerResponseV2 = SingleLocationMarkerResponseV2Builder::init()
    ->requestId('9d2dee33-7803-485a-a2b1-2c7538e597ee')
    ->status('SUCCESS')
    ->data(
        [
            SingleLocationMarkerV2Builder::init()
                ->status(SingleLocationMarkerStatusEnum::UNAVAILABLE)
                ->coordinates(
                    CoordinatesBuilder::init()
                        ->latitude(39.14)
                        ->longitude(36.94)
                        ->build()
                )
                ->evseCount(223.04)
                ->maxPower(45.08)
                ->locationCount(62.98)
                ->build()
        ]
    )
    ->build();
```

