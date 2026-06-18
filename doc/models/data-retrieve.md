
# Data Retrieve

## Structure

`DataRetrieve`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Id of the session | getId(): ?string | setId(?string id): void |
| `userId` | `?string` | Optional | Id of the user that started the session<br><br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` | getUserId(): ?string | setUserId(?string userId): void |
| `emaId` | `?string` | Optional | Id of the evse that the user is charging<br><br>**Constraints**: *Minimum Length*: `12`, *Maximum Length*: `36` | getEmaId(): ?string | setEmaId(?string emaId): void |
| `evseId` | `?string` | Optional | Ema-id of the charge token that is used | getEvseId(): ?string | setEvseId(?string evseId): void |
| `lastUpdated` | `?string` | Optional | Last updated date | getLastUpdated(): ?string | setLastUpdated(?string lastUpdated): void |
| `startedAt` | `?DateTime` | Optional | When the session is started | getStartedAt(): ?\DateTime | setStartedAt(?\DateTime startedAt): void |
| `stoppedAt` | `?DateTime` | Optional | When the session is stopped | getStoppedAt(): ?\DateTime | setStoppedAt(?\DateTime stoppedAt): void |
| `sessionState` | [`?ChargeRetrieveState`](../../doc/models/charge-retrieve-state.md) | Optional | - | getSessionState(): ?ChargeRetrieveState | setSessionState(?ChargeRetrieveState sessionState): void |

## Example

```php
use ShellEVLib\Models\Builders\DataRetrieveBuilder;
use ShellEVLib\Utils\DateTimeHelper;

$dataRetrieve = DataRetrieveBuilder::init()
    ->id('78b5d7a3-bdba-43d7-9851-1c84fcddb782')
    ->userId('281482b6-2c9a-4fd1-b3ea-1928edb40ef9')
    ->emaId('NL-TNM-C00122045-K')
    ->evseId('NL*TNM*E02003451*0')
    ->lastUpdated('lastUpdated8')
    ->startedAt(DateTimeHelper::fromRfc3339DateTime('2015-08-19T11:20:27Z'))
    ->stoppedAt(DateTimeHelper::fromRfc3339DateTime('2015-08-19T11:20:27Z'))
    ->build();
```

