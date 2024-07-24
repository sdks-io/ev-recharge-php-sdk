
# Data Active

## Structure

`DataActive`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Id of the session | getId(): ?string | setId(?string id): void |
| `userId` | `?string` | Optional | Id of the user that started the session<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` | getUserId(): ?string | setUserId(?string userId): void |
| `emaId` | `?string` | Optional | Id of the evse that the user is charging<br>**Constraints**: *Minimum Length*: `12`, *Maximum Length*: `36` | getEmaId(): ?string | setEmaId(?string emaId): void |
| `evseId` | `?string` | Optional | Electric Vehicle Supply Equipment Identifier. An EVSEID identifies a Charging Point. | getEvseId(): ?string | setEvseId(?string evseId): void |
| `startedAt` | `?DateTime` | Optional | When the session is started | getStartedAt(): ?\DateTime | setStartedAt(?\DateTime startedAt): void |
| `stoppedAt` | `?DateTime` | Optional | When the session is stopped | getStoppedAt(): ?\DateTime | setStoppedAt(?\DateTime stoppedAt): void |
| `sessionState` | [`?ChargeRetrieveState`](../../doc/models/charge-retrieve-state.md) | Optional | - | getSessionState(): ?ChargeRetrieveState | setSessionState(?ChargeRetrieveState sessionState): void |
| `lastUpdated` | `?string` | Optional | - | getLastUpdated(): ?string | setLastUpdated(?string lastUpdated): void |

## Example (as JSON)

```json
{
  "id": "78b5d7a3-bdba-43d7-9851-1c84fcddb782",
  "userId": "281482b6-2c9a-4fd1-b3ea-1928edb40ef9",
  "emaId": "NL-TNM-C00122045-K",
  "evseId": "NL*TNM*E02003451*0",
  "startedAt": "08/19/2015 11:20:27",
  "stoppedAt": "08/19/2015 11:20:27"
}
```

