
# Active Response 200 Json

## Structure

`ActiveResponse200Json`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `string` | Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. | getRequestId(): string | setRequestId(string requestId): void |
| `status` | [`string(GetChargeSessionRetrieveResponse200JsonStatusEnum)`](../../doc/models/get-charge-session-retrieve-response-200-json-status-enum.md) | Required | **Constraints**: *Minimum Length*: `7`, *Maximum Length*: `7` | getStatus(): string | setStatus(string status): void |
| `data` | [`?(DataActive[])`](../../doc/models/data-active.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "requestId": "9d2dee33-7803-485a-a2b1-2c7538e597ee",
  "status": "SUCCESS",
  "data": [
    {
      "id": "00001c2a-0000-0000-0000-000000000000",
      "userId": "userId0",
      "emaId": "emaId8",
      "evseId": "evseId2",
      "startedAt": "2016-03-13T12:52:32.123Z"
    },
    {
      "id": "00001c2a-0000-0000-0000-000000000000",
      "userId": "userId0",
      "emaId": "emaId8",
      "evseId": "evseId2",
      "startedAt": "2016-03-13T12:52:32.123Z"
    },
    {
      "id": "00001c2a-0000-0000-0000-000000000000",
      "userId": "userId0",
      "emaId": "emaId8",
      "evseId": "evseId2",
      "startedAt": "2016-03-13T12:52:32.123Z"
    }
  ]
}
```

