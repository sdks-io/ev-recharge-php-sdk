
# Multi Location Marker

A Marker is a place on the map that represent multiple Locations at the same spot

## Structure

`MultiLocationMarker`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `markerType` | `string` | Required | Identifies the marker type. If it's a `MultiLocationMarker`, then the value is `MultiLocation` | getMarkerType(): string | setMarkerType(string markerType): void |
| `uniqueKey` | `?string` | Optional | Uniquely identifies the marker object | getUniqueKey(): ?string | setUniqueKey(?string uniqueKey): void |
| `coordinates` | [`?Coordinates`](../../doc/models/coordinates.md) | Optional | Coordinates of the Shell Recharge Site Location | getCoordinates(): ?Coordinates | setCoordinates(?Coordinates coordinates): void |
| `locationCount` | `?float` | Optional | Number of Locations that this Marker represents in the given set of bounds | getLocationCount(): ?float | setLocationCount(?float locationCount): void |
| `evseCount` | `?float` | Optional | Total number of Evses in Locations that this Marker represents | getEvseCount(): ?float | setEvseCount(?float evseCount): void |
| `maxPower` | `?float` | Optional | Maximum power in kW across all locations grouped in this marker (disregarding availability) | getMaxPower(): ?float | setMaxPower(?float maxPower): void |
| `geoHash` | `?string` | Optional | GeoHash of marker coordinates | getGeoHash(): ?string | setGeoHash(?string geoHash): void |

## Example (as JSON)

```json
{
  "markerType": "MultiLocation",
  "uniqueKey": "2060319_6",
  "locationCount": 6.0,
  "evseCount": 10.0,
  "maxPower": 42.0,
  "geoHash": "sx",
  "coordinates": {
    "latitude": 39.14,
    "longitude": 36.94
  }
}
```

