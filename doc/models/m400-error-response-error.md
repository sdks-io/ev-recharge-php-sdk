
# M400 Error Response Error

## Structure

`M400ErrorResponseError`

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
  "Code": "E0001",
  "Title": "Validation Error",
  "Detail": "Missing / Invalid value for: EvChargeNumber | EvseId",
  "AdditionalInfo": {
    "key0": "AdditionalInfo0",
    "key1": "AdditionalInfo1"
  }
}
```
