
# Chargesession Start Body

## Structure

`ChargesessionStartBody`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `evChargeNumber` | `string` | Required | Ev charge number<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `50` | getEvChargeNumber(): string | setEvChargeNumber(string evChargeNumber): void |
| `evseId` | `string` | Required | This is the Electric Vehicle EquipmentID<br><br>**Constraints**: *Minimum Length*: `18`, *Maximum Length*: `36` | getEvseId(): string | setEvseId(string evseId): void |

## Example

```php
use ShellEVLib\Models\Builders\ChargesessionStartBodyBuilder;

$chargesessionStartBody = ChargesessionStartBodyBuilder::init(
    'NL-TNM-C00122045-K',
    'NL*TNM*E02003451*0'
)->build();
```

