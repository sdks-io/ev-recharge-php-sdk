
# Charge Error

## Structure

`ChargeError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | Session code e.g InternalError | getCode(): ?string | setCode(?string code): void |
| `message` | `?string` | Optional | Session message | getMessage(): ?string | setMessage(?string message): void |

## Example

```php
use ShellEVLib\Models\Builders\ChargeErrorBuilder;

$chargeError = ChargeErrorBuilder::init()
    ->code('code4')
    ->message('message6')
    ->build();
```

