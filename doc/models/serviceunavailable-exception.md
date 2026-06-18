
# Serviceunavailable Exception

## Structure

`ServiceunavailableException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | requestId is unique identifier value that is attached to requests and messages that allow reference to a particular transaction or event chain. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `errors` | [`?(ServiceunavailableErrMsg[])`](../../doc/models/serviceunavailable-err-msg.md) | Optional | Exception details of the error | getErrors(): ?array | setErrors(?array errors): void |

## Example

```php
try {
    // make the API call
} catch (ServiceunavailableException $exp) {
    echo 'Caught ServiceunavailableException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

