
# Power Range

## Structure

`PowerRange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `min` | `int` | Required | Minimum supported power in kW | getMin(): int | setMin(int min): void |
| `max` | `int` | Required | Maximum supported power in kW | getMax(): int | setMax(int max): void |

## Example

```php
use ShellEVLib\Models\Builders\PowerRangeBuilder;

$powerRange = PowerRangeBuilder::init(
    0,
    100
)->build();
```

