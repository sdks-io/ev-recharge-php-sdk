
# Price Component

## Structure

`PriceComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string(TypeEnum)`](../../doc/models/type-enum.md) | Required | Type of the price component | getType(): string | setType(string type): void |
| `stepSize` | `int` | Required | Step size in seconds for TIME-based components, in kWh for ENERGY-based components, or 1 for FLAT components | getStepSize(): int | setStepSize(int stepSize): void |
| `price` | `float` | Required | Price per step in the specified currency for this price component | getPrice(): float | setPrice(float price): void |
| `vat` | `float` | Required | VAT percentage applicable to this price component | getVat(): float | setVat(float vat): void |

## Example (as JSON)

```json
{
  "type": "FLAT",
  "stepSize": 1,
  "price": 0.3,
  "vat": 21.0
}
```

