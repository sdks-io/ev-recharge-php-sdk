
# Address

Address of the Shell Recharge Location

## Structure

`Address`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `streetAndNumber` | `?string` | Optional | Street Name and Number of the Shell Recharge Location | getStreetAndNumber(): ?string | setStreetAndNumber(?string streetAndNumber): void |
| `postalCode` | `?string` | Optional | Postal Code of the Shell Recharge Location | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `city` | `?string` | Optional | City name of the Shell Recharge Location | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | ISO 3166 Alpha-2 Country Code of the Shell Recharge Location | getCountry(): ?string | setCountry(?string country): void |

## Example (as JSON)

```json
{
  "streetAndNumber": "Maarssenbroeksedijk 33",
  "postalCode": "3542 DM",
  "city": "Utrecht",
  "country": "NLD"
}
```

