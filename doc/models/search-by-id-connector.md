
# Search by Id Connector

An EVSE can have one or many Connectors. Each Connector will normally have a different socket / cable and only one can be used to charge at a time.

## Structure

`SearchByIdConnector`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | Internal identifier used to refer to this Connector | getUid(): ?string | setUid(?string uid): void |
| `externalId` | `?string` | Optional | Identifier of the Evse as given by the Operator, unique for the containing EVSE' | getExternalId(): ?string | setExternalId(?string externalId): void |
| `connectorType` | [`?string(ConnectorVOConnectorTypeEnum)`](../../doc/models/connector-vo-connector-type-enum.md) | Optional | Type of the connector in the EVSE unit. | getConnectorType(): ?string | setConnectorType(?string connectorType): void |
| `electricalProperties` | [`?ElectricalPropertiesV2`](../../doc/models/electrical-properties-v2.md) | Optional | Electrical Properties of the Connector | getElectricalProperties(): ?ElectricalPropertiesV2 | setElectricalProperties(?ElectricalPropertiesV2 electricalProperties): void |
| `tariffs` | [`?(TariffV2[])`](../../doc/models/tariff-v2.md) | Optional | Tariffs applicable to this Connector | getTariffs(): ?array | setTariffs(?array tariffs): void |

## Example

```php
use ShellEVLib\Models\Builders\SearchByIdConnectorBuilder;
use ShellEVLib\Models\ConnectorVOConnectorTypeEnum;
use ShellEVLib\Models\Builders\ElectricalPropertiesV2Builder;
use ShellEVLib\Models\ElectricalPropertiesPowerTypeEnum;
use ShellEVLib\Models\Builders\TariffV2Builder;
use ShellEVLib\Models\TariffTypeEnum;
use ShellEVLib\Models\Builders\PowerRangeBuilder;
use ShellEVLib\Models\Builders\TariffElementBuilder;
use ShellEVLib\Models\Builders\PriceComponentBuilder;
use ShellEVLib\Models\TypeEnum;
use ShellEVLib\Models\Builders\RestrictionsBuilder;
use ShellEVLib\Utils\DateTimeHelper;
use ShellEVLib\Models\Builders\TariffAltTextBuilder;

$searchByIdConnector = SearchByIdConnectorBuilder::init()
    ->uid('2')
    ->externalId('01000861_1_21')
    ->connectorType(ConnectorVOConnectorTypeEnum::TYPE2)
    ->electricalProperties(
        ElectricalPropertiesV2Builder::init()
            ->powerType(ElectricalPropertiesPowerTypeEnum::AC1PHASE)
            ->voltage(110.62)
            ->amperage(46.4)
            ->maxElectricPower(232.04)
            ->build()
    )
    ->tariffs(
        [
            TariffV2Builder::init(
                'tariffId4',
                TariffTypeEnum::DRIVER,
                PowerRangeBuilder::init(
                    102,
                    20
                )->build(),
                'internalId2',
                'operatorId8',
                'providerId2',
                'currency8',
                189.42,
                247.64,
                [
                    TariffElementBuilder::init(
                        [
                            PriceComponentBuilder::init(
                                TypeEnum::TIME,
                                124,
                                196.82,
                                137.74
                            )->build(),
                            PriceComponentBuilder::init(
                                TypeEnum::TIME,
                                124,
                                196.82,
                                137.74
                            )->build(),
                            PriceComponentBuilder::init(
                                TypeEnum::TIME,
                                124,
                                196.82,
                                137.74
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
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
                'createdBy4'
            )
                ->tariffAltText(
                    [
                        TariffAltTextBuilder::init(
                            'language8',
                            'text6'
                        )->build()
                    ]
                )->build(),
            TariffV2Builder::init(
                'tariffId4',
                TariffTypeEnum::DRIVER,
                PowerRangeBuilder::init(
                    102,
                    20
                )->build(),
                'internalId2',
                'operatorId8',
                'providerId2',
                'currency8',
                189.42,
                247.64,
                [
                    TariffElementBuilder::init(
                        [
                            PriceComponentBuilder::init(
                                TypeEnum::TIME,
                                124,
                                196.82,
                                137.74
                            )->build(),
                            PriceComponentBuilder::init(
                                TypeEnum::TIME,
                                124,
                                196.82,
                                137.74
                            )->build(),
                            PriceComponentBuilder::init(
                                TypeEnum::TIME,
                                124,
                                196.82,
                                137.74
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
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
                'createdBy4'
            )
                ->tariffAltText(
                    [
                        TariffAltTextBuilder::init(
                            'language8',
                            'text6'
                        )->build()
                    ]
                )->build(),
            TariffV2Builder::init(
                'tariffId4',
                TariffTypeEnum::DRIVER,
                PowerRangeBuilder::init(
                    102,
                    20
                )->build(),
                'internalId2',
                'operatorId8',
                'providerId2',
                'currency8',
                189.42,
                247.64,
                [
                    TariffElementBuilder::init(
                        [
                            PriceComponentBuilder::init(
                                TypeEnum::TIME,
                                124,
                                196.82,
                                137.74
                            )->build(),
                            PriceComponentBuilder::init(
                                TypeEnum::TIME,
                                124,
                                196.82,
                                137.74
                            )->build(),
                            PriceComponentBuilder::init(
                                TypeEnum::TIME,
                                124,
                                196.82,
                                137.74
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
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
                DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
                'createdBy4'
            )
                ->tariffAltText(
                    [
                        TariffAltTextBuilder::init(
                            'language8',
                            'text6'
                        )->build()
                    ]
                )->build()
        ]
    )->build();
```

