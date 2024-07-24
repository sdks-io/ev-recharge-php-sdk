
# Internal Error Object

## Structure

`InternalErrorObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | Error code | getCode(): ?string | setCode(?string code): void |
| `message` | `?string` | Optional | Error description in English | getMessage(): ?string | setMessage(?string message): void |
| `description` | `?string` | Optional | Technical details of the error message, the example which is given in the sample payload is one of the scenario. actual response will vary based on the technical nature | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "code": "E0005",
  "message": "Internal Server Error",
  "description": "Server encountered an unexpected condition that prevented it from fulfilling the request"
}
```

