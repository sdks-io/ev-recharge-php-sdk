
# Data Retrieve

## Structure

`DataRetrieve`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Id of the session | getId(): ?string | setId(?string id): void |
| `userId` | `?string` | Optional | Id of the user that started the session<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` | getUserId(): ?string | setUserId(?string userId): void |
| `emaId` | `?string` | Optional | Id of the evse that the user is charging<br>**Constraints**: *Minimum Length*: `12`, *Maximum Length*: `36` | getEmaId(): ?string | setEmaId(?string emaId): void |
| `evseId` | `?string` | Optional | Ema-id of the charge token that is used | getEvseId(): ?string | setEvseId(?string evseId): void |
| `startedAt` | `?DateTime` | Optional | When the session is started | getStartedAt(): ?\DateTime | setStartedAt(?\DateTime startedAt): void |
| `stoppedAt` | `?DateTime` | Optional | When the session is stopped | getStoppedAt(): ?\DateTime | setStoppedAt(?\DateTime stoppedAt): void |
| `sessionState` | [`?string(DataRetrieveSessionStateEnum)`](../../doc/models/data-retrieve-session-state-enum.md) | Optional | Describes the session state | getSessionState(): ?string | setSessionState(?string sessionState): void |
| `sessionCode` | [`?string(DataRetrieveSessionCodeEnum)`](../../doc/models/data-retrieve-session-code-enum.md) | Optional | Session code e.g InternalError<br>**Constraints**: *Minimum Length*: `7`, *Maximum Length*: `14` | getSessionCode(): ?string | setSessionCode(?string sessionCode): void |
| `sessionMessage` | `?string` | Optional | Session message | getSessionMessage(): ?string | setSessionMessage(?string sessionMessage): void |

## Example (as JSON)

```json
{
  "Id": "78b5d7a3-bdba-43d7-9851-1c84fcddb782",
  "UserId": "281482b6-2c9a-4fd1-b3ea-1928edb40ef9",
  "EmaId": "NL-TNM-C00122045-K",
  "EvseId": "NL*TNM*E02003451*0",
  "StartedAt": "08/19/2015 11:20:27",
  "StoppedAt": "08/19/2015 11:20:27",
  "SessionState": "stopped",
  "SessionCode": "InternalError",
  "SessionMessage": "Session stopped due to internal error"
}
```

