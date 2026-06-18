
# Opening Hours Object

## Structure

`OpeningHoursObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `weekDay` | [`?string(OpeningHoursObjectWeekDayEnum)`](../../doc/models/opening-hours-object-week-day-enum.md) | Optional | 3 letter day of the week | getWeekDay(): ?string | setWeekDay(?string weekDay): void |
| `startTime` | `?string` | Optional | Hour in 24h local time when the location opens. | getStartTime(): ?string | setStartTime(?string startTime): void |
| `endTime` | `?string` | Optional | Hour in 24h local time when the location closes. | getEndTime(): ?string | setEndTime(?string endTime): void |

## Example

```php
use ShellEVLib\Models\Builders\OpeningHoursObjectBuilder;
use ShellEVLib\Models\OpeningHoursObjectWeekDayEnum;

$openingHoursObject = OpeningHoursObjectBuilder::init()
    ->weekDay(OpeningHoursObjectWeekDayEnum::MON)
    ->startTime('08:00')
    ->endTime('23:00')
    ->build();
```

