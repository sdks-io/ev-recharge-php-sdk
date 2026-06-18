
# Tariff Element

## Structure

`TariffElement`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `priceComponents` | [`PriceComponent[]`](../../doc/models/price-component.md) | Required | - | getPriceComponents(): array | setPriceComponents(array priceComponents): void |
| `restrictions` | [`?Restrictions`](../../doc/models/restrictions.md) | Optional | - | getRestrictions(): ?Restrictions | setRestrictions(?Restrictions restrictions): void |

## Example

```php
use ShellEVLib\Models\Builders\TariffElementBuilder;
use ShellEVLib\Models\Builders\PriceComponentBuilder;
use ShellEVLib\Models\TypeEnum;
use ShellEVLib\Models\Builders\RestrictionsBuilder;
use ShellEVLib\Utils\DateTimeHelper;

$tariffElement = TariffElementBuilder::init(
    [
        PriceComponentBuilder::init(
            TypeEnum::FLAT,
            1,
            0.3,
            21
        )->build()
    ]
)
    ->restrictions(
        RestrictionsBuilder::init()
            ->startTime('startTime0')
            ->endTime('endTime2')
            ->startDate(DateTimeHelper::fromSimpleDate('2016-03-13'))
            ->endDate(DateTimeHelper::fromSimpleDate('2016-03-13'))
            ->minKwh(247.22)
            ->build()
    )
    ->build();
```

