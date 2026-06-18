
# Response V2

## Structure

`ResponseV2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | requestId is unique identifier value that is attached to requests and messages that allow reference to a particular transaction or event chain. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | status of the API call | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(LocationResponeObjectV2[])`](../../doc/models/location-respone-object-v2.md) | Optional | API Response | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellEVLib\Models\Builders\ResponseV2Builder;
use ShellEVLib\Models\Builders\LocationResponeObjectV2Builder;
use ShellEVLib\Models\Builders\CoordinatesBuilder;
use ShellEVLib\Models\Builders\AddressBuilder;

$responseV2 = ResponseV2Builder::init()
    ->requestId('9d2dee33-7803-485a-a2b1-2c7538e597ee')
    ->status('SUCCESS')
    ->data(
        [
            LocationResponeObjectV2Builder::init()
                ->uid('uid0')
                ->externalId('externalId6')
                ->coordinates(
                    CoordinatesBuilder::init()
                        ->latitude(39.14)
                        ->longitude(36.94)
                        ->build()
                )
                ->operatorName('operatorName0')
                ->address(
                    AddressBuilder::init()
                        ->streetAndNumber('streetAndNumber2')
                        ->postalCode('postalCode8')
                        ->city('city6')
                        ->country('country0')
                        ->build()
                )
                ->build(),
            LocationResponeObjectV2Builder::init()
                ->uid('uid0')
                ->externalId('externalId6')
                ->coordinates(
                    CoordinatesBuilder::init()
                        ->latitude(39.14)
                        ->longitude(36.94)
                        ->build()
                )
                ->operatorName('operatorName0')
                ->address(
                    AddressBuilder::init()
                        ->streetAndNumber('streetAndNumber2')
                        ->postalCode('postalCode8')
                        ->city('city6')
                        ->country('country0')
                        ->build()
                )
                ->build(),
            LocationResponeObjectV2Builder::init()
                ->uid('uid0')
                ->externalId('externalId6')
                ->coordinates(
                    CoordinatesBuilder::init()
                        ->latitude(39.14)
                        ->longitude(36.94)
                        ->build()
                )
                ->operatorName('operatorName0')
                ->address(
                    AddressBuilder::init()
                        ->streetAndNumber('streetAndNumber2')
                        ->postalCode('postalCode8')
                        ->city('city6')
                        ->country('country0')
                        ->build()
                )
                ->build()
        ]
    )
    ->build();
```

