
# Getting Started with Shell EV

## Introduction

This API Product provides the list of all Shell Recharge locations. The list includes all Shell Recharge network and all locations available through our roaming partners.

Supported Functions

* Get the list of all the locations and its details.
* Get the details of a particular location.
* Get the list of locations nearby using the latitude and longitude.
* Get the list of locations for a given set of bounds with different zoom levels.

The Charging endpoints provides control to start, stop and get status of the charging session.

Supported Functions

* Start a charging session\n
* Stop a charging session \n
* Retrieve the status of a charging session \n
* Retrieve the list of all active sessions for a card

Go to the Shell Developer Portal: [https://developer.shell.com](https://developer.shell.com)

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "shell/ev-recharge-sdk:1.2.0"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "shell/ev-recharge-sdk": "1.2.0"
}
```

You can also view the package at:
https://packagist.org/packages/shell/ev-recharge-sdk#1.2.0

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/sdks-io/ev-recharge-php-sdk/tree/1.2.0/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | `Environment` | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `clientCredentialsAuth` | [`ClientCredentialsAuth`](https://www.github.com/sdks-io/ev-recharge-php-sdk/tree/1.2.0/doc/$a/https://www.github.com/sdks-io/ev-recharge-php-sdk/tree/1.2.0/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |

The API client can be initialized as follows:

```php
$client = ShellEVClientBuilder::init()
    ->clientCredentialsAuthCredentials(
        ClientCredentialsAuthCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
    )
    ->environment('production')
    ->build();
```

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| production | **Default** Production |
| environment2 | Test |

## Authorization

This API uses the following authentication schemes.

* [`BearerAuth (OAuth 2 Client Credentials Grant)`](https://www.github.com/sdks-io/ev-recharge-php-sdk/tree/1.2.0/doc/$a/https://www.github.com/sdks-io/ev-recharge-php-sdk/tree/1.2.0/oauth-2-client-credentials-grant.md)

## List of APIs

* [Locations](https://www.github.com/sdks-io/ev-recharge-php-sdk/tree/1.2.0/doc/controllers/locations.md)
* [Charging](https://www.github.com/sdks-io/ev-recharge-php-sdk/tree/1.2.0/doc/controllers/charging.md)

## Classes Documentation

* [ApiException](https://www.github.com/sdks-io/ev-recharge-php-sdk/tree/1.2.0/doc/api-exception.md)
* [HttpRequest](https://www.github.com/sdks-io/ev-recharge-php-sdk/tree/1.2.0/doc/http-request.md)
* [HttpResponse](https://www.github.com/sdks-io/ev-recharge-php-sdk/tree/1.2.0/doc/http-response.md)

