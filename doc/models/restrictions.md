
# Restrictions

## Structure

`Restrictions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startTime` | `?string` | Optional | Valid from this time of the day (HH:mm) | getStartTime(): ?string | setStartTime(?string startTime): void |
| `endTime` | `?string` | Optional | Valid until this time of the day (HH:mm) | getEndTime(): ?string | setEndTime(?string endTime): void |
| `startDate` | `?DateTime` | Optional | - | getStartDate(): ?\DateTime | setStartDate(?\DateTime startDate): void |
| `endDate` | `?DateTime` | Optional | - | getEndDate(): ?\DateTime | setEndDate(?\DateTime endDate): void |
| `minKwh` | `?float` | Optional | - | getMinKwh(): ?float | setMinKwh(?float minKwh): void |
| `maxKwh` | `?float` | Optional | - | getMaxKwh(): ?float | setMaxKwh(?float maxKwh): void |
| `minCurrent` | `?float` | Optional | - | getMinCurrent(): ?float | setMinCurrent(?float minCurrent): void |
| `maxCurrent` | `?float` | Optional | - | getMaxCurrent(): ?float | setMaxCurrent(?float maxCurrent): void |
| `minPower` | `?float` | Optional | - | getMinPower(): ?float | setMinPower(?float minPower): void |
| `maxPower` | `?float` | Optional | - | getMaxPower(): ?float | setMaxPower(?float maxPower): void |
| `minDuration` | `?int` | Optional | Minimum session duration in seconds | getMinDuration(): ?int | setMinDuration(?int minDuration): void |
| `maxDuration` | `?int` | Optional | Maximum session duration in seconds | getMaxDuration(): ?int | setMaxDuration(?int maxDuration): void |
| `dayOfWeek` | [`?(string(DayOfWeekEnum)[])`](../../doc/models/day-of-week-enum.md) | Optional | - | getDayOfWeek(): ?array | setDayOfWeek(?array dayOfWeek): void |

## Example

```php
use ShellEVLib\Models\Builders\RestrictionsBuilder;
use ShellEVLib\Utils\DateTimeHelper;

$restrictions = RestrictionsBuilder::init()
    ->startTime('08:00')
    ->endTime('18:00')
    ->startDate(DateTimeHelper::fromSimpleDate('2021-10-06'))
    ->endDate(DateTimeHelper::fromSimpleDate('2021-10-31'))
    ->minKwh(0.1)
    ->maxKwh(100)
    ->minCurrent(0)
    ->maxCurrent(500)
    ->minPower(0)
    ->maxPower(100)
    ->minDuration(0)
    ->maxDuration(86400)
    ->build();
```

