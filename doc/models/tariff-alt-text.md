
# Tariff Alt Text

## Structure

`TariffAltText`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `language` | `string` | Required | ISO language code | getLanguage(): string | setLanguage(string language): void |
| `text` | `string` | Required | Human readable tariff description | getText(): string | setText(string text): void |

## Example (as JSON)

```json
{
  "language": "en",
  "text": "€0.30 per kWh"
}
```

