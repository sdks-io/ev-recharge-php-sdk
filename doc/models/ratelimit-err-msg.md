
# Ratelimit Err Msg

## Structure

`RatelimitErrMsg`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | Error code | getCode(): ?string | setCode(?string code): void |
| `message` | `?string` | Optional | Error desctiption in English | getMessage(): ?string | setMessage(?string message): void |
| `description` | `?string` | Optional | Technical details of the error message, the example which is given in the sample payload is one of the scenarios. actual response will vary based on the technical nature | getDescription(): ?string | setDescription(?string description): void |
| `details` | `?(string[])` | Optional | - | getDetails(): ?array | setDetails(?array details): void |

## Example (as JSON)

```json
{
  "code": "E0009",
  "message": "Too Many Requests",
  "description": "Exceeded maximum allowed number of request limit",
  "details": [
    "details9",
    "details0"
  ]
}
```

