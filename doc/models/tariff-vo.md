
# Tariff VO

Tariff details for charging on this Connector

## Structure

`TariffVO`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startFee` | `?float` | Optional | Tariff to start a charging session | getStartFee(): ?float | setStartFee(?float startFee): void |
| `perMinute` | `?float` | Optional | Tariff per minute of charging time | getPerMinute(): ?float | setPerMinute(?float perMinute): void |
| `perKWh` | `?float` | Optional | Tariff per kWh of energy consumed | getPerKWh(): ?float | setPerKWh(?float perKWh): void |
| `currency` | `?string` | Optional | ISO 4217 Currency Code of the local currency. | getCurrency(): ?string | setCurrency(?string currency): void |
| `updated` | `?string` | Optional | ISO8601-compliant UTC datetime of the last update of the Tariff | getUpdated(): ?string | setUpdated(?string updated): void |
| `updatedBy` | [`?string(TariffVOUpdatedByEnum)`](../../doc/models/tariff-vo-updated-by-enum.md) | Optional | Source of the last update of the tariff details | getUpdatedBy(): ?string | setUpdatedBy(?string updatedBy): void |
| `structure` | `?string` | Optional | Tariff structure that this tariff belongs to, typically Default unless specific tariff is defined for provider | getStructure(): ?string | setStructure(?string structure): void |

## Example (as JSON)

```json
{
  "startFee": 0.0,
  "perMinute": 0.12,
  "perKWh": 0.89,
  "currency": "EUR",
  "updated": "07/06/2021 10:44:24",
  "updatedBy": "TariffService",
  "structure": "default"
}
```

