
# Tariff Alt Text

## Structure

`TariffAltText`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `language` | `string` | Required | ISO language code | getLanguage(): string | setLanguage(string language): void |
| `text` | `string` | Required | Human readable tariff description | getText(): string | setText(string text): void |

## Example

```php
use ShellEVLib\Models\Builders\TariffAltTextBuilder;

$tariffAltText = TariffAltTextBuilder::init(
    'en',
    '€0.30 per kWh'
)->build();
```

