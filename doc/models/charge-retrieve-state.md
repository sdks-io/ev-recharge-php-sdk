
# Charge Retrieve State

## Structure

`ChargeRetrieveState`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `?string` | Optional | Describes the session state<br><br>started, stopped, start-requested, stop-requested, failed-to-start, failed-to-stop | getStatus(): ?string | setStatus(?string status): void |
| `error` | [`?ChargeError`](../../doc/models/charge-error.md) | Optional | - | getError(): ?ChargeError | setError(?ChargeError error): void |

## Example

```php
use ShellEVLib\Models\Builders\ChargeRetrieveStateBuilder;
use ShellEVLib\Models\Builders\ChargeErrorBuilder;

$chargeRetrieveState = ChargeRetrieveStateBuilder::init()
    ->status('status0')
    ->error(
        ChargeErrorBuilder::init()
            ->code('code2')
            ->message('message4')
            ->build()
    )
    ->build();
```

