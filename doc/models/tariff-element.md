
# Tariff Element

## Structure

`TariffElement`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `priceComponents` | [`PriceComponent[]`](../../doc/models/price-component.md) | Required | - | getPriceComponents(): array | setPriceComponents(array priceComponents): void |
| `restrictions` | [`?Restrictions`](../../doc/models/restrictions.md) | Optional | - | getRestrictions(): ?Restrictions | setRestrictions(?Restrictions restrictions): void |

## Example (as JSON)

```json
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
```

