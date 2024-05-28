
# Stop Charge Session Request Body Json

## Structure

`StopChargeSessionRequestBodyJson`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sesssionId` | `string` | Required | Session Id is to be fetched<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` | getSesssionId(): string | setSesssionId(string sesssionId): void |

## Example (as JSON)

```json
{
  "SesssionId": "c3e332f0-1bb2-4f50-a96b-e075bbb71e68"
}
```

