
# Connector VO

An EVSE can have one or many Connectors. Each Connector will normally have a different socket / cable and only one can be used to charge at a time.

## Structure

`ConnectorVO`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?int` | Optional | Internal identifier used to refer to this Connector | getUid(): ?int | setUid(?int uid): void |
| `externalId` | `?string` | Optional | Identifier of the Evse as given by the Operator, unique for the containing EVSE' | getExternalId(): ?string | setExternalId(?string externalId): void |
| `connectorType` | [`?string(ConnectorVOConnectorTypeEnum)`](../../doc/models/connector-vo-connector-type-enum.md) | Optional | Type of the connector in the EVSE unit. | getConnectorType(): ?string | setConnectorType(?string connectorType): void |
| `electricalProperties` | [`?ElectricalProperties`](../../doc/models/electrical-properties.md) | Optional | Electrical Properties of the Connector | getElectricalProperties(): ?ElectricalProperties | setElectricalProperties(?ElectricalProperties electricalProperties): void |
| `fixedCable` | `?bool` | Optional | Indicates whether Connector has a fixed cable attached. False by default (not sent in this case) | getFixedCable(): ?bool | setFixedCable(?bool fixedCable): void |
| `tariff` | [`?TariffVO`](../../doc/models/tariff-vo.md) | Optional | Tariff details for charging on this Connector | getTariff(): ?TariffVO | setTariff(?TariffVO tariff): void |
| `updated` | `?string` | Optional | ISO8601-compliant UTC datetime of the last update of the Connectors's data | getUpdated(): ?string | setUpdated(?string updated): void |
| `updatedBy` | [`?string(ConnectorVOUpdatedByEnum)`](../../doc/models/connector-vo-updated-by-enum.md) | Optional | Source of the last update | getUpdatedBy(): ?string | setUpdatedBy(?string updatedBy): void |
| `deleted` | `?string` | Optional | optional  ISO8601-compliant UTC deletion timestamp of the connector | getDeleted(): ?string | setDeleted(?string deleted): void |

## Example (as JSON)

```json
{
  "uid": 2,
  "externalId": "01000861_1_21",
  "connectorType": "Type2",
  "fixedCable": true,
  "updated": "10/06/2021 10:44:24",
  "updatedBy": "TariffService",
  "deleted": "12/06/2021 10:44:24",
  "electricalProperties": {
    "powerType": "AC1Phase",
    "voltage": 110.62,
    "amperage": 46.4,
    "maxElectricPower": 232.04
  }
}
```

