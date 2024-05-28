
# Getting Started with Shell EV

## Introduction

This API Product provides the option to manage charging at all public Shell Recharge locations. The end points provides control to start, stop and get status of the charging session.

Supported Function

* Start a charging session
* Stop a charging session
* Retrieve the status of a charging session
* Retrieve the list of all active sessions for a card   termsOfService: 'https://developer.shell.com/terms-of-use'

Go to the Shell Developer Portal: [https://developer.shell.com](https://developer.shell.com)

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "shell/ev-recharge-sdk:1.0.0"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "shell/ev-recharge-sdk": "1.0.0"
}
```

You can also view the package at:
https://packagist.org/packages/shell/ev-recharge-sdk#1.0.0

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `env` | `string(EnvEnum)` | This variable specifies the type of environment. Environments:<br><br>* `api` - Production<br>* `api-test` - UAT<br>*Default*: `EnvEnum::ENUM_APITESTSHELLCOM` |
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
| `clientCredentialsAuth` | [`ClientCredentialsAuth`](__base_path/$a/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |

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
    ->env(EnvEnum::ENUM_APITESTSHELLCOM)
    ->build();
```

## Authorization

This API uses the following authentication schemes.

* [`BearerAuth (OAuth 2 Client Credentials Grant)`](__base_path/$a/oauth-2-client-credentials-grant.md)

## List of APIs

* [O Auth Authorization](doc/controllers/o-auth-authorization.md)
* [Charging](doc/controllers/charging.md)
* [Locations](doc/controllers/locations.md)

## Classes Documentation

* [ApiException](doc/api-exception.md)
* [HttpRequest](doc/http-request.md)
* [HttpResponse](doc/http-response.md)

