
# Inline Response 202

## Structure

`InlineResponse202`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `string` | Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. | getRequestId(): string | setRequestId(string requestId): void |
| `status` | [`string(GetChargeSessionRetrieveResponse200JsonStatusEnum)`](../../doc/models/get-charge-session-retrieve-response-200-json-status-enum.md) | Required | Indicates overall status of the request | getStatus(): string | setStatus(string status): void |
| `data` | [`InlineResponse202Data[]`](../../doc/models/inline-response-202-data.md) | Required | - | getData(): array | setData(array data): void |

## Example

```php
use ShellEVLib\Models\Builders\InlineResponse202Builder;
use ShellEVLib\Models\GetChargeSessionRetrieveResponse200JsonStatusEnum;
use ShellEVLib\Models\Builders\InlineResponse202DataBuilder;

$inlineResponse202 = InlineResponse202Builder::init(
    '9d2dee33-7803-485a-a2b1-2c7538e597ee',
    GetChargeSessionRetrieveResponse200JsonStatusEnum::SUCCESS,
    [
        InlineResponse202DataBuilder::init()
            ->sessionId('c3e332f0-1bb2-4f50-a96b-e075bbb71e68')
            ->build()
    ]
)->build();
```

