
# Electrical Properties V2

Electrical Properties of the Connector

## Structure

`ElectricalPropertiesV2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `powerType` | [`?string(ElectricalPropertiesPowerTypeEnum)`](../../doc/models/electrical-properties-power-type-enum.md) | Optional | Power Type used in this connector. | getPowerType(): ?string | setPowerType(?string powerType): void |
| `voltage` | `?float` | Optional | Voltage in Volts for this connector | getVoltage(): ?float | setVoltage(?float voltage): void |
| `amperage` | `?float` | Optional | Electric Current in Amperes for this connector | getAmperage(): ?float | setAmperage(?float amperage): void |
| `maxElectricPower` | `?float` | Optional | Power in Kilowatts for this connector | getMaxElectricPower(): ?float | setMaxElectricPower(?float maxElectricPower): void |

## Example

```php
use ShellEVLib\Models\Builders\ElectricalPropertiesV2Builder;
use ShellEVLib\Models\ElectricalPropertiesPowerTypeEnum;

$electricalPropertiesV2 = ElectricalPropertiesV2Builder::init()
    ->powerType(ElectricalPropertiesPowerTypeEnum::AC1PHASE)
    ->voltage(230)
    ->amperage(16)
    ->maxElectricPower(3.7)
    ->build();
```

