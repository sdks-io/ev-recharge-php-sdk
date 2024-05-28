
# Electrical Properties

Electrical Properties of the Connector

## Structure

`ElectricalProperties`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `powerType` | [`?string(ElectricalPropertiesPowerTypeEnum)`](../../doc/models/electrical-properties-power-type-enum.md) | Optional | Power Type used in this connector. | getPowerType(): ?string | setPowerType(?string powerType): void |
| `voltage` | `?float` | Optional | Voltage in Volts for this connector | getVoltage(): ?float | setVoltage(?float voltage): void |
| `amperage` | `?float` | Optional | Electric Current in Amperes for this connector | getAmperage(): ?float | setAmperage(?float amperage): void |
| `maxElectricPower` | `?float` | Optional | Power in Kilowatts for this connector | getMaxElectricPower(): ?float | setMaxElectricPower(?float maxElectricPower): void |

## Example (as JSON)

```json
{
  "powerType": "AC1Phase",
  "voltage": 230.0,
  "amperage": 16.0,
  "maxElectricPower": 3.7
}
```

