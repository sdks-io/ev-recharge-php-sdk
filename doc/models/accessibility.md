
# Accessibility

Accessibility of the Location

## Structure

`Accessibility`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`?string(AccessibilityStatusEnum)`](../../doc/models/accessibility-status-enum.md) | Optional | Accessibility Status | getStatus(): ?string | setStatus(?string status): void |
| `remark` | `?string` | Optional | optional Arbitrary text about restrictions of the Location | getRemark(): ?string | setRemark(?string remark): void |

## Example (as JSON)

```json
{
  "status": "FreePublic",
  "remark": "optional comment"
}
```

