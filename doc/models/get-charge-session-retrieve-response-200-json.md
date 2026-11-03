
# Get Charge Session Retrieve Response 200 Json

## Structure

`GetChargeSessionRetrieveResponse200Json`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `string` | Required, Read-only | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. | getRequestId(): string | setRequestId(string requestId): void |
| `status` | [`string(GetChargeSessionRetrieveResponse200JsonStatusEnum)`](../../doc/models/get-charge-session-retrieve-response-200-json-status-enum.md) | Required, Read-only | **Constraints**: *Minimum Length*: `6`, *Maximum Length*: `15` | getStatus(): string | setStatus(string status): void |
| `data` | [`?(DataRetrieve[])`](../../doc/models/data-retrieve.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example

```php
use ShellEVLib\Models\Builders\GetChargeSessionRetrieveResponse200JsonBuilder;
use ShellEVLib\Models\Builders\DataRetrieveBuilder;

$getChargeSessionRetrieveResponse200Json = GetChargeSessionRetrieveResponse200JsonBuilder::init(
    '9d2dee33-7803-485a-a2b1-2c7538e597ee',
    ''
)
    ->data(
        [
            DataRetrieveBuilder::init()
                ->id('00001c2a-0000-0000-0000-000000000000')
                ->userId('userId0')
                ->emaId('emaId8')
                ->evseId('evseId2')
                ->lastUpdated('lastUpdated0')
                ->build(),
            DataRetrieveBuilder::init()
                ->id('00001c2a-0000-0000-0000-000000000000')
                ->userId('userId0')
                ->emaId('emaId8')
                ->evseId('evseId2')
                ->lastUpdated('lastUpdated0')
                ->build(),
            DataRetrieveBuilder::init()
                ->id('00001c2a-0000-0000-0000-000000000000')
                ->userId('userId0')
                ->emaId('emaId8')
                ->evseId('evseId2')
                ->lastUpdated('lastUpdated0')
                ->build()
        ]
    )
    ->build();
```

