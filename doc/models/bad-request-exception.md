
# Bad Request Exception

## Structure

`BadRequestException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | Error code | getCode(): ?string | setCode(?string code): void |
| `message` | `?string` | Optional | Error desctiption in English | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "code": "Bad Request",
  "message": "Request was not processed due to client error"
}
```

