# Charging

Charging Endpoints

```php
$chargingController = $client->getChargingController();
```

## Class Name

`ChargingController`

## Methods

* [Start](../../doc/controllers/charging.md#start)
* [Stop](../../doc/controllers/charging.md#stop)
* [Get Charge Session Retrieve](../../doc/controllers/charging.md#get-charge-session-retrieve)
* [Active](../../doc/controllers/charging.md#active)


# Start

This endpoint start the charging session for the user.

```php
function start(string $requestId, ?ChargesessionStartBody $body = null): InlineResponse202
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | RequestId must be unique identifier value that can be used by the consumer to correlate each request /response .<br>Format.<br> Its canonical textual representation, the 16 octets of a UUID are represented as 32 hexadecimal (base-16) digits, displayed in five groups separated by hyphens, in the form 8-4-4-4-12 for a total of 36 characters (32 hexadecimal characters and 4 hyphens) <br> |
| `body` | [`?ChargesessionStartBody`](../../doc/models/chargesession-start-body.md) | Body, Optional | - |

## Response Type

[`InlineResponse202`](../../doc/models/inline-response-202.md)

## Example Usage

```php
$requestId = '123e4567-e89b-12d3-a456-426614174000';

$body = ChargesessionStartBodyBuilder::init(
    'NL-TNM-C00122045-K',
    'NL*TNM*E02003451*0'
)->build();

$result = $chargingController->start(
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "9d2dee33-7803-485a-a2b1-2c7538e597ee",
  "status": "SUCCESS",
  "data": [
    {
      "sessionId": "c3e332f0-1bb2-4f50-a96b-e075bbb71e68"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`BadRequestException`](../../doc/models/bad-request-exception.md) |
| 401 | The request has not been applied because it lacks valid authentication credentials for the target resource. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 404 | Location Not Found | [`NotFoundException`](../../doc/models/not-found-exception.md) |
| 429 | The Request reached maximum allocated rate limit | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal Server error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |
| 503 | Service unavailable | [`ServiceunavailableException`](../../doc/models/serviceunavailable-exception.md) |


# Stop

Accepts a request to stop an active session when a valid session id is provided.

```php
function stop(string $requestId, string $sessionId): InlineResponse2021
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | RequestId must be unique identifier value that can be used by the consumer to correlate each request /response .<br>Format.<br> Its canonical textual representation, the 16 octets of a UUID are represented as 32 hexadecimal (base-16) digits, displayed in five groups separated by hyphens, in the form 8-4-4-4-12 for a total of 36 characters (32 hexadecimal characters and 4 hyphens) <br> |
| `sessionId` | `string` | Query, Required | Session Id<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` |

## Response Type

[`InlineResponse2021`](../../doc/models/inline-response-2021.md)

## Example Usage

```php
$requestId = '123e4567-e89b-12d3-a456-426614174000';

$sessionId = 'c3e332f0-1bb2-4f50-a96b-e075bbb71e68';

$result = $chargingController->stop(
    $requestId,
    $sessionId
);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "9d2dee33-7803-485a-a2b1-2c7538e597ee",
  "status": "SUCCESS"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`BadRequestException`](../../doc/models/bad-request-exception.md) |
| 401 | The request has not been applied because it lacks valid authentication credentials for the target resource. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 404 | Location Not Found | [`NotFoundException`](../../doc/models/not-found-exception.md) |
| 429 | The Request reached maximum allocated rate limit | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal Server error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |
| 503 | Service unavailable | [`ServiceunavailableException`](../../doc/models/serviceunavailable-exception.md) |


# Get Charge Session Retrieve

This endpoint returns the details of the session if the session is found.

```php
function getChargeSessionRetrieve(string $requestId, string $sessionId): GetChargeSessionRetrieveResponse200Json
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | RequestId must be unique identifier value that can be used by the consumer to correlate each request /response .<br>Format.<br> Its canonical textual representation, the 16 octets of a UUID are represented as 32 hexadecimal (base-16) digits, displayed in five groups separated by hyphens, in the form 8-4-4-4-12 for a total of 36 characters (32 hexadecimal characters and 4 hyphens) <br> |
| `sessionId` | `string` | Query, Required | Session Id<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` |

## Response Type

[`GetChargeSessionRetrieveResponse200Json`](../../doc/models/get-charge-session-retrieve-response-200-json.md)

## Example Usage

```php
$requestId = '123e4567-e89b-12d3-a456-426614174000';

$sessionId = 'c3e332f0-1bb2-4f50-a96b-e075bbb71e68';

$result = $chargingController->getChargeSessionRetrieve(
    $requestId,
    $sessionId
);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "9d2dee33-7803-485a-a2b1-2c7538e597ee",
  "status": "SUCCESS",
  "data": [
    {
      "id": "78b5d7a3-bdba-43d7-9851-1c84fcddb782",
      "userId": "281482b6-2c9a-4fd1-b3ea-1928edb40ef9",
      "emaId": "NL-TNM-C00122045-K",
      "evseId": "NL*TNM*E02003451*0",
      "lastUpdated": "2024-06-19T07:36:57.985998Z",
      "startedAt": "2024-06-19T11:20:27Z",
      "stoppedAt": "2014-06-19T12:20:27Z",
      "sessionState": {
        "status": "Started"
      }
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`BadRequestException`](../../doc/models/bad-request-exception.md) |
| 401 | The request has not been applied because it lacks valid authentication credentials for the target resource. | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 404 | Location Not Found | [`NotFoundException`](../../doc/models/not-found-exception.md) |
| 429 | The Request reached maximum allocated rate limit | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal Server error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |
| 503 | Service unavailable | [`ServiceunavailableException`](../../doc/models/serviceunavailable-exception.md) |


# Active

Fetrches the active sessions for user.

```php
function active(string $requestId, string $emaId): ActiveResponse200Json
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | RequestId must be unique identifier value that can be used by the consumer to correlate each request /response .<br>Format.<br> Its canonical textual representation, the 16 octets of a UUID are represented as 32 hexadecimal (base-16) digits, displayed in five groups separated by hyphens, in the form 8-4-4-4-12 for a total of 36 characters (32 hexadecimal characters and 4 hyphens) <br> |
| `emaId` | `string` | Query, Required | Emobility Account Identifier(Ema-ID)<br>**Constraints**: *Minimum Length*: `14`, *Maximum Length*: `19` |

## Response Type

[`ActiveResponse200Json`](../../doc/models/active-response-200-json.md)

## Example Usage

```php
$requestId = '123e4567-e89b-12d3-a456-426614174000';

$emaId = 'NL-TNM-C0216599X-A';

$result = $chargingController->active(
    $requestId,
    $emaId
);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "9d2dee33-7803-485a-a2b1-2c7538e597ee",
  "status": "SUCCESS",
  "data": [
    {
      "id": "78b5d7a3-bdba-43d7-9851-1c84fcddb782",
      "userId": "281482b6-2c9a-4fd1-b3ea-1928edb40ef9",
      "emaId": "NL-TNM-C00122045-K",
      "evseId": "NL*TNM*E02003451*0",
      "startedAt": "2015-08-19T11:20:27Z",
      "stoppedAt": "2015-08-19T11:20:27Z",
      "SessionState": {
        "status": "Started"
      },
      "lastUpdated": "2024-07-17T07:36:57.985998Z"
    }
  ]
}
```

