
# M500 Error Response Error

## Structure

`M500ErrorResponseError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `string` | Required | Error code that logically best represents the error encountered<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `5` | getCode(): string | setCode(string code): void |
| `title` | `string` | Required | Description of the error type<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `100` | getTitle(): string | setTitle(string title): void |
| `detail` | `string` | Required | Details of the error that can help under the cause of the error<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `250` | getDetail(): string | setDetail(string detail): void |
| `additionalInfo` | `?array<string,?string>` | Optional | - | getAdditionalInfo(): ?array | setAdditionalInfo(?array additionalInfo): void |

## Example (as JSON)

```json
{
  "Code": "E0002",
  "Title": "Unknown Error",
  "Detail": "Something is wrong! Please retry after sometime. If the  problem persists contact support",
  "AdditionalInfo": {
    "key0": "AdditionalInfo2",
    "key1": "AdditionalInfo1"
  }
}
```

