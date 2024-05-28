
# Inline Response 2021

## Structure

`InlineResponse2021`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `string` | Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. | getRequestId(): string | setRequestId(string requestId): void |
| `status` | [`string(InlineResponse2021StatusEnum)`](../../doc/models/inline-response-2021-status-enum.md) | Required | Indicates overall status of the request<br>**Constraints**: *Minimum Length*: `6`, *Maximum Length*: `7` | getStatus(): string | setStatus(string status): void |

## Example (as JSON)

```json
{
  "RequestId": "9d2dee33-7803-485a-a2b1-2c7538e597ee",
  "Status": "SUCCESS"
}
```

