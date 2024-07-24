
# Single Location Marker

A Marker is a place on the map that represent a single Location

## Structure

`SingleLocationMarker`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `markerType` | `string` | Required | Identifies the marker type. If it’s a `SingleLocationMarker`, then the value is `SingleLocation` | getMarkerType(): string | setMarkerType(string markerType): void |
| `uniqueKey` | `?string` | Optional | Uniquely identifies the marker object | getUniqueKey(): ?string | setUniqueKey(?string uniqueKey): void |
| `status` | [`?string(SingleLocationMarkerStatusEnum)`](../../doc/models/single-location-marker-status-enum.md) | Optional | Minimum of all status values in the Marker, e.g. if at least one Evse in the Marker is available, the value will be available | getStatus(): ?string | setStatus(?string status): void |
| `coordinates` | [`?Coordinates`](../../doc/models/coordinates.md) | Optional | Coordinates of the Shell Recharge Site Location | getCoordinates(): ?Coordinates | setCoordinates(?Coordinates coordinates): void |
| `evseCount` | `?float` | Optional | Total number of Evse units in Locations that this Marker represents | getEvseCount(): ?float | setEvseCount(?float evseCount): void |
| `maxPower` | `?float` | Optional | Maximum power in kW across all locations grouped in this marker (disregarding availability) | getMaxPower(): ?float | setMaxPower(?float maxPower): void |
| `geoHash` | `?string` | Optional | GeoHash of marker coordinates | getGeoHash(): ?string | setGeoHash(?string geoHash): void |
| `locationUid` | `?float` | Optional | Unique ID of the Location this Marker represents | getLocationUid(): ?float | setLocationUid(?float locationUid): void |
| `authorizationMethods` | [`?(string(SingleLocationMarkerAuthorizationMethodsItemsEnum)[])`](../../doc/models/single-location-marker-authorization-methods-items-enum.md) | Optional | Methods that can be used to Authorize sessions on this EVSE | getAuthorizationMethods(): ?array | setAuthorizationMethods(?array authorizationMethods): void |
| `operatorId` | `?string` | Optional | Unique Id of the operator | getOperatorId(): ?string | setOperatorId(?string operatorId): void |

## Example (as JSON)

```json
{
  "markerType": "SingleLocation",
  "uniqueKey": "2057411_1",
  "status": "Available",
  "evseCount": 12.0,
  "maxPower": 42.0,
  "geoHash": "sx",
  "locationUid": 2057411,
  "operatorId": "AT-HTB",
  "coordinates": {
    "latitude": 39.14,
    "longitude": 36.94
  }
}
```

