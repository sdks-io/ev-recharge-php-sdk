
# Inline Response 202

## Structure

`InlineResponse202`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `string` | Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. | getRequestId(): string | setRequestId(string requestId): void |
| `status` | [`string(InlineResponse202StatusEnum)`](../../doc/models/inline-response-202-status-enum.md) | Required | Indicates overall status of the request | getStatus(): string | setStatus(string status): void |
| `data` | [`InlineResponse202Data[]`](../../doc/models/inline-response-202-data.md) | Required | - | getData(): array | setData(array data): void |

## Example (as JSON)

```json
{
  "RequestId": "9d2dee33-7803-485a-a2b1-2c7538e597ee",
  "Status": "SUCCESS",
  "Data": [
    {
      "SessionId": "c3e332f0-1bb2-4f50-a96b-e075bbb71e68"
    }
  ]
}
```

