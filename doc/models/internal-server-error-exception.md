
# Internal Server Error Exception

## Structure

`InternalServerErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | requestId is unique identifier value that is attached to requests and messages that allow reference to a particular transaction or event chain. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `errors` | [`?(InternalErrorObject[])`](../../doc/models/internal-error-object.md) | Optional | Exception details of the error | getErrors(): ?array | setErrors(?array errors): void |
| `details` | `?(string[])` | Optional | - | getDetails(): ?array | setDetails(?array details): void |

## Example (as JSON)

```json
{
  "requestId": "9d2dee33-7803-485a-a2b1-2c7538e597ee",
  "status": "FAILED",
  "errors": [
    {
      "code": "code8",
      "message": "message0",
      "description": "description0"
    },
    {
      "code": "code8",
      "message": "message0",
      "description": "description0"
    },
    {
      "code": "code8",
      "message": "message0",
      "description": "description0"
    }
  ],
  "details": [
    "details3",
    "details4",
    "details5"
  ]
}
```

