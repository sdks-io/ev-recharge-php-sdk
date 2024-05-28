
# Success Response

## Structure

`SuccessResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `string` | Required | A unique request id in GUID format. The value is written to the Shell API Platform audit log for end to end traceability of a request.<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` | getRequestId(): string | setRequestId(string requestId): void |
| `status` | [`string(ResponseBaseStatusEnum)`](../../doc/models/response-base-status-enum.md) | Required | Indicates overall status of the request | getStatus(): string | setStatus(string status): void |

## Example (as JSON)

```json
{
  "RequestId": "eb621f45-a543-4d9a-a934-2f223b263c42",
  "Status": "SUCCESS"
}
```

