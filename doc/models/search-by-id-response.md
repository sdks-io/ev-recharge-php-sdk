
# Search by Id Response

## Structure

`SearchByIdResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | requestId is unique identifier value that is attached to requests and messages that allow reference to a particular transaction or event chain. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | status of the API call | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SearchByIdLocationRespone[])`](../../doc/models/search-by-id-location-respone.md) | Optional | API Response | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellEVLib\Models\Builders\SearchByIdResponseBuilder;
use ShellEVLib\Models\Builders\SearchByIdLocationResponeBuilder;
use ShellEVLib\Models\Builders\CoordinatesBuilder;
use ShellEVLib\Models\Builders\AddressBuilder;

$searchByIdResponse = SearchByIdResponseBuilder::init()
    ->requestId('9d2dee33-7803-485a-a2b1-2c7538e597ee')
    ->status('SUCCESS')
    ->data(
        [
            SearchByIdLocationResponeBuilder::init()
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
            SearchByIdLocationResponeBuilder::init()
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

