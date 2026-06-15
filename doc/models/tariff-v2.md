
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

## Example (as JSON)

```json
{
  "tariffId": "123e4567-e89b-12d3-a456-426614174000",
  "tariffType": "DRIVER",
  "powerRange": {
    "min": 0,
    "max": 100
  },
  "internalId": "123e4567-e89b-12d3-a456-426614174000",
  "operatorId": "AT-HTB",
  "providerId": "Shell_RP_2",
  "currency": "EUR",
  "tariffAltText": [
    {
      "language": "en",
      "text": "€0.30 per kWh"
    }
  ],
  "minPrice": 0.3,
  "maxPrice": 999.0,
  "elements": [
    {
      "priceComponents": [
        {
          "type": "FLAT",
          "stepSize": 1,
          "price": 0.3,
          "vat": 21.0
        }
      ],
      "restrictions": {
        "startTime": "startTime0",
        "endTime": "endTime2",
        "startDate": "2016-03-13",
        "endDate": "2016-03-13",
        "minKwh": 247.22
      }
    }
  ],
  "startDateTime": "10/06/2021 10:44:24",
  "endDateTime": "10/06/2021 10:44:24",
  "lastUpdated": "10/06/2021 10:44:24",
  "createdBy": "STAGE_API"
}
```

