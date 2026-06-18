
# Accessibility V2

Accessibility of the Location

## Structure

`AccessibilityV2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`?string(AccessibilityStatusEnum)`](../../doc/models/accessibility-status-enum.md) | Optional | Accessibility Status | getStatus(): ?string | setStatus(?string status): void |

## Example

```php
use ShellEVLib\Models\Builders\AccessibilityV2Builder;
use ShellEVLib\Models\AccessibilityStatusEnum;

$accessibilityV2 = AccessibilityV2Builder::init()
    ->status(AccessibilityStatusEnum::FREEPUBLIC)
    ->build();
```

