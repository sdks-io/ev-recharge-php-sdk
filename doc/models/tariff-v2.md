
# Tariff V2

Tariff metadata aligned with TariffV2 GraphQL schema

## Structure

`TariffV2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `tariffId` | `string` | Required | Unique identifier for the tariff | getTariffId(): string | setTariffId(string tariffId): void |
| `tariffType` | [`string(TariffTypeEnum)`](../../doc/models/tariff-type-enum.md) | Required | Tariff type classification | getTariffType(): string | setTariffType(string tariffType): void |
| `powerRange` | [`PowerRange`](../../doc/models/power-range.md) | Required | - | getPowerRange(): PowerRange | setPowerRange(PowerRange powerRange): void |
| `internalId` | `string` | Required | Internal identifier used by the platform | getInternalId(): string | setInternalId(string internalId): void |
| `operatorId` | `string` | Required | Unique identifier of the operator | getOperatorId(): string | setOperatorId(string operatorId): void |
| `providerId` | `string` | Required | Unique identifier of the provider | getProviderId(): string | setProviderId(string providerId): void |
| `currency` | `string` | Required | ISO 4217 Currency Code | getCurrency(): string | setCurrency(string currency): void |
| `tariffAltText` | [`?(TariffAltText[])`](../../doc/models/tariff-alt-text.md) | Required | - | getTariffAltText(): ?array | setTariffAltText(?array tariffAltText): void |
| `minPrice` | `float` | Required | - | getMinPrice(): float | setMinPrice(float minPrice): void |
| `maxPrice` | `float` | Required | - | getMaxPrice(): float | setMaxPrice(float maxPrice): void |
| `elements` | [`TariffElement[]`](../../doc/models/tariff-element.md) | Required | - | getElements(): array | setElements(array elements): void |
| `startDateTime` | `DateTime` | Required | - | getStartDateTime(): \DateTime | setStartDateTime(\DateTime startDateTime): void |
| `endDateTime` | `DateTime` | Required | - | getEndDateTime(): \DateTime | setEndDateTime(\DateTime endDateTime): void |
| `lastUpdated` | `DateTime` | Required | - | getLastUpdated(): \DateTime | setLastUpdated(\DateTime lastUpdated): void |
| `createdBy` | `string` | Required | Identifier of the actor who created the tariff | getCreatedBy(): string | setCreatedBy(string createdBy): void |

## Example

```php
use ShellEVLib\Models\Builders\TariffV2Builder;
use ShellEVLib\Models\TariffTypeEnum;
use ShellEVLib\Models\Builders\PowerRangeBuilder;
use ShellEVLib\Models\Builders\TariffElementBuilder;
use ShellEVLib\Models\Builders\PriceComponentBuilder;
use ShellEVLib\Models\TypeEnum;
use ShellEVLib\Models\Builders\RestrictionsBuilder;
use ShellEVLib\Utils\DateTimeHelper;
use ShellEVLib\Models\Builders\TariffAltTextBuilder;

$tariffV2 = TariffV2Builder::init(
    '123e4567-e89b-12d3-a456-426614174000',
    TariffTypeEnum::REIMBURSEMENT,
    PowerRangeBuilder::init(
        0,
        100
    )->build(),
    '123e4567-e89b-12d3-a456-426614174000',
    'AT-HTB',
    'Shell_RP_2',
    'EUR',
    0.3,
    999,
    [
        TariffElementBuilder::init(
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
            ->build()
    ],
    DateTimeHelper::fromRfc3339DateTimeRequired('2021-10-06T10:44:24Z'),
    DateTimeHelper::fromRfc3339DateTimeRequired('2021-10-06T10:44:24Z'),
    DateTimeHelper::fromRfc3339DateTimeRequired('2021-10-06T10:44:24Z'),
    'STAGE_API'
)
    ->tariffAltText(
        [
            TariffAltTextBuilder::init(
                'en',
                '€0.30 per kWh'
            )->build()
        ]
    )->build();
```

