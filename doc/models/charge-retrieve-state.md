
# Charge Retrieve State

## Structure

`ChargeRetrieveState`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `?string` | Optional | Describes the session state<br><br>started, stopped, start-requested, stop-requested, failed-to-start, failed-to-stop | getStatus(): ?string | setStatus(?string status): void |
| `error` | [`?ChargeError`](../../doc/models/charge-error.md) | Optional | - | getError(): ?ChargeError | setError(?ChargeError error): void |

## Example (as JSON)

```json
{
  "status": "status6",
  "error": {
    "code": "code2",
    "message": "message4"
  }
}
```

