<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib;

use Core\ClientBuilder;
use Core\Request\Parameters\TemplateParam;
use Core\Utils\CoreHelper;
use ShellEVLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use ShellEVLib\Authentication\ClientCredentialsAuthManager;
use ShellEVLib\Controllers\ChargingController;
use ShellEVLib\Controllers\LocationsController;
use ShellEVLib\Controllers\OAuthAuthorizationController;
use ShellEVLib\Utils\CompatibilityConverter;
use Unirest\Configuration;
use Unirest\HttpClient;

class ShellEVClient implements ConfigurationInterface
{
    private $charging;

    private $locations;

    private $oAuthAuthorization;

    private $clientCredentialsAuthManager;

    private $config;

    private $client;

    /**
     * @see ShellEVClientBuilder::init()
     * @see ShellEVClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $this->clientCredentialsAuthManager = new ClientCredentialsAuthManager(
            $this->config['oAuthClientId'] ?? ConfigurationDefaults::O_AUTH_CLIENT_ID,
            $this->config['oAuthClientSecret'] ?? ConfigurationDefaults::O_AUTH_CLIENT_SECRET,
            $this->config['oAuthToken']
        );
        $this->client = ClientBuilder::init(new HttpClient(Configuration::init($this)))
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('APIMATIC 3.0')
            ->globalConfig($this->getGlobalConfiguration())
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::DEFAULT_)
            ->authManagers(['BearerAuth' => $this->clientCredentialsAuthManager])
            ->build();
        $this->clientCredentialsAuthManager->setClient($this->client);
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return ShellEVClientBuilder ShellEVClientBuilder instance
     */
    public function toBuilder(): ShellEVClientBuilder
    {
        $builder = ShellEVClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->environment($this->getEnvironment())
            ->env($this->getEnv())
            ->httpCallback($this->config['httpCallback'] ?? null);

        $clientCredentialsAuth = $this->getClientCredentialsAuthCredentialsBuilder();
        if ($clientCredentialsAuth != null) {
            $builder->clientCredentialsAuthCredentials($clientCredentialsAuth);
        }
        return $builder;
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getEnv(): string
    {
        return $this->config['env'] ?? ConfigurationDefaults::ENV;
    }

    public function getClientCredentialsAuth(): ClientCredentialsAuth
    {
        return $this->clientCredentialsAuthManager;
    }

    public function getClientCredentialsAuthCredentialsBuilder(): ?ClientCredentialsAuthCredentialsBuilder
    {
        if (
            empty($this->clientCredentialsAuthManager->getOAuthClientId()) &&
            empty($this->clientCredentialsAuthManager->getOAuthClientSecret())
        ) {
            return null;
        }
        return ClientCredentialsAuthCredentialsBuilder::init(
            $this->clientCredentialsAuthManager->getOAuthClientId(),
            $this->clientCredentialsAuthManager->getOAuthClientSecret()
        )->oAuthToken($this->clientCredentialsAuthManager->getOAuthToken());
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see ShellEVClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see ShellEVClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns Charging Controller
     */
    public function getChargingController(): ChargingController
    {
        if ($this->charging == null) {
            $this->charging = new ChargingController($this->client);
        }
        return $this->charging;
    }

    /**
     * Returns Locations Controller
     */
    public function getLocationsController(): LocationsController
    {
        if ($this->locations == null) {
            $this->locations = new LocationsController($this->client);
        }
        return $this->locations;
    }

    /**
     * Returns O Auth Authorization Controller
     */
    public function getOAuthAuthorizationController(): OAuthAuthorizationController
    {
        if ($this->oAuthAuthorization == null) {
            $this->oAuthAuthorization = new OAuthAuthorizationController($this->client);
        }
        return $this->oAuthAuthorization;
    }

    /**
     * Get the defined global configurations
     */
    private function getGlobalConfiguration(): array
    {
        return [TemplateParam::init('env', $this->getEnv())->dontEncode()];
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [Environment::PRODUCTION => [Server::DEFAULT_ => 'https://{env}']];
}