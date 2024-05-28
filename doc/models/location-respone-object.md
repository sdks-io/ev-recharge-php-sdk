
# Location Respone Object

## Structure

`LocationResponeObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?int` | Optional | Unique Internal identifier used to refer to this Location by Shell Recharge | getUid(): ?int | setUid(?int uid): void |
| `externalId` | `?string` | Optional | Identifier as given by the Shell Recharge Operator, unique for that Operator | getExternalId(): ?string | setExternalId(?string externalId): void |
| `coordinates` | [`?Coordinates`](../../doc/models/coordinates.md) | Optional | Coordinates of the Shell Recharge Site Location | getCoordinates(): ?Coordinates | setCoordinates(?Coordinates coordinates): void |
| `operatorName` | `?string` | Optional | Operator of this Shell Recharge Location | getOperatorName(): ?string | setOperatorName(?string operatorName): void |
| `address` | [`?Address`](../../doc/models/address.md) | Optional | Address of the Shell Recharge Location | getAddress(): ?Address | setAddress(?Address address): void |
| `accessibility` | [`?Accessibility`](../../doc/models/accessibility.md) | Optional | Accessibility of the Location | getAccessibility(): ?Accessibility | setAccessibility(?Accessibility accessibility): void |
| `evses` | [`?(EvseVO[])`](../../doc/models/evse-vo.md) | Optional | - | getEvses(): ?array | setEvses(?array evses): void |
| `openingHours` | [`?(OpeningHoursObject[])`](../../doc/models/opening-hours-object.md) | Optional | Optional Opening Hours of the Location. Please note that it is not available for all sites. | getOpeningHours(): ?array | setOpeningHours(?array openingHours): void |
| `updated` | `?string` | Optional | ISO8601-compliant UTC datetime of the last update of the location | getUpdated(): ?string | setUpdated(?string updated): void |
| `operatorComment` | `?string` | Optional | optional Operator-wide arbitrary text (eg promotional, warning) | getOperatorComment(): ?string | setOperatorComment(?string operatorComment): void |
| `locationType` | `?string` | Optional | the type of the location. Could be "UNKNOWN". | getLocationType(): ?string | setLocationType(?string locationType): void |

## Example (as JSON)

```json
{
  "uid": 12,
  "externalId": "01001188",
  "operatorName": "TheNewMotion",
  "updated": "10/06/2021 10:44:24",
  "operatorComment": "promotional",
  "locationType": "Unknown",
  "coordinates": {
    "latitude": 39.14,
    "longitude": 36.94
  },
  "address": {
    "streetAndNumber": "streetAndNumber2",
    "postalCode": "postalCode8",
    "city": "city6",
    "country": "country0"
  }
}
```

