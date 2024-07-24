
# Response

## Structure

`Response`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | requestId is unique identifier value that is attached to requests and messages that allow reference to a particular transaction or event chain. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | status of the API call | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(LocationResponeObject[])`](../../doc/models/location-respone-object.md) | Optional | API Response | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "requestId": "9d2dee33-7803-485a-a2b1-2c7538e597ee",
  "status": "SUCCESS",
  "data": [
    {
      "uid": 74,
      "externalId": "externalId6",
      "coordinates": {
        "latitude": 39.14,
        "longitude": 36.94
      },
      "operatorName": "operatorName0",
      "address": {
        "streetAndNumber": "streetAndNumber2",
        "postalCode": "postalCode8",
        "city": "city6",
        "country": "country0"
      }
    }
  ]
}
```

