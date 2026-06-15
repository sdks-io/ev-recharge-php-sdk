
# Single Location Marker V2

A Marker is a place on the map that represent a single Location

## Structure

`SingleLocationMarkerV2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`?string(SingleLocationMarkerStatusEnum)`](../../doc/models/single-location-marker-status-enum.md) | Optional | Minimum of all status values in the Marker, e.g. if at least one Evse in the Marker is available, the value will be available | getStatus(): ?string | setStatus(?string status): void |
| `coordinates` | [`?Coordinates`](../../doc/models/coordinates.md) | Optional | Coordinates of the Shell Recharge Site Location | getCoordinates(): ?Coordinates | setCoordinates(?Coordinates coordinates): void |
| `evseCount` | `?float` | Optional | Total number of Evse units in Locations that this Marker represents | getEvseCount(): ?float | setEvseCount(?float evseCount): void |
| `maxPower` | `?float` | Optional | Maximum power in kW across all locations grouped in this marker (disregarding availability) | getMaxPower(): ?float | setMaxPower(?float maxPower): void |
| `locationCount` | `?float` | Optional | Number of Locations that this Marker represents in the given set of bounds | getLocationCount(): ?float | setLocationCount(?float locationCount): void |
| `locationUid` | `?string` | Optional | Unique ID of the Location this Marker represents | getLocationUid(): ?string | setLocationUid(?string locationUid): void |
| `authorizationMethods` | [`?(string(SingleLocationMarkerAuthorizationMethodsItemsEnum)[])`](../../doc/models/single-location-marker-authorization-methods-items-enum.md) | Optional | Methods that can be used to Authorize sessions on this EVSE | getAuthorizationMethods(): ?array | setAuthorizationMethods(?array authorizationMethods): void |
| `operatorName` | `?string` | Optional | Operator of this Shell Recharge Location | getOperatorName(): ?string | setOperatorName(?string operatorName): void |
| `markerType` | `string` | Required, Constant | Type of the Marker, in this case it will always be SingleLocation<br><br>**Value**: `'SingleLocation'` | getMarkerType(): string | setMarkerType(string markerType): void |

## Example (as JSON)

```json
{
  "status": "Available",
  "evseCount": 12.0,
  "locationCount": 6.0,
  "locationUid": "2057411",
  "operatorName": "TheNewMotion",
  "markerType": "SingleLocation",
  "coordinates": {
    "latitude": 39.14,
    "longitude": 36.94
  },
  "maxPower": 45.08
}
```

