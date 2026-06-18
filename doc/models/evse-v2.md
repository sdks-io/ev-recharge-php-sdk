
# Evse V2

Each Location will contain one or more EVSEs (Electric Vehicle Supply Equipment). Each EVSE is capable of charging one car at a time.

## Structure

`EvseV2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | Internal identifier used to refer to single individual  EVSE unit. | getUid(): ?string | setUid(?string uid): void |
| `externalId` | `?string` | Optional | Identifier of the Evse as given by the Operator, unique for that Operator | getExternalId(): ?string | setExternalId(?string externalId): void |
| `evseId` | `?string` | Optional | Standard EVSEId identifier (ISO-IEC-15118) | getEvseId(): ?string | setEvseId(?string evseId): void |
| `status` | [`?string(EvseVOStatusEnum)`](../../doc/models/evse-vo-status-enum.md) | Optional | The current status of the EVSE units availability | getStatus(): ?string | setStatus(?string status): void |
| `updated` | `?string` | Optional | ISO8601-compliant UTC datetime of the last update of the EVSE | getUpdated(): ?string | setUpdated(?string updated): void |
| `physicalReference` | `?string` | Optional | An optional number/string printed on the outside of the EVSE for visual identification | getPhysicalReference(): ?string | setPhysicalReference(?string physicalReference): void |
| `connectors` | [`?(ConnectorV2[])`](../../doc/models/connector-v2.md) | Optional | List of all connectors available on this EVSE unit. | getConnectors(): ?array | setConnectors(?array connectors): void |
| `authorizationMethods` | [`?(string(SingleLocationMarkerAuthorizationMethodsItemsEnum)[])`](../../doc/models/single-location-marker-authorization-methods-items-enum.md) | Optional | Methods that can be used to Authorize sessions on this EVSE | getAuthorizationMethods(): ?array | setAuthorizationMethods(?array authorizationMethods): void |

## Example

```php
use ShellEVLib\Models\Builders\EvseV2Builder;
use ShellEVLib\Models\EvseVOStatusEnum;
use ShellEVLib\Models\SingleLocationMarkerAuthorizationMethodsItemsEnum;

$evseV2 = EvseV2Builder::init()
    ->uid('NL*MKS*E0000001*0_1')
    ->externalId('01001188_1')
    ->evseId('NL*TNM*E01000401*0')
    ->status(EvseVOStatusEnum::AVAILABLE)
    ->updated('2021-10-06T10:44:24Z')
    ->physicalReference('Green')
    ->authorizationMethods(
        [
            SingleLocationMarkerAuthorizationMethodsItemsEnum::NEWMOTIONAPP
        ]
    )
    ->build();
```

