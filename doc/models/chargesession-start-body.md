
# Chargesession Start Body

## Structure

`ChargesessionStartBody`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `evChargeNumber` | `string` | Required | The EV Charge Number which can be found on the back of the Shell EV Card<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `50` | getEvChargeNumber(): string | setEvChargeNumber(string evChargeNumber): void |
| `evseId` | `string` | Required | Standard EVSE (Electric Vehicle Supply Equipment) Id identifier (ISO-IEC-15118)<br>**Constraints**: *Minimum Length*: `18`, *Maximum Length*: `36` | getEvseId(): string | setEvseId(string evseId): void |

## Example (as JSON)

```json
{
  "EvChargeNumber": "NL-TNM-C00122045-K",
  "EvseId": "NL*TNM*E02003451*0"
}
```

