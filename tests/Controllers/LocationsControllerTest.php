<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Tests\Controllers;

use Core\TestCase\TestParam;
use ShellEVLib\Controllers\LocationsController;
use ShellEVLib\Exceptions;

class LocationsControllerTest extends BaseTestController
{
    /**
     * @var LocationsController LocationsController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getLocationsController();
    }

    public function testGetEVLocations()
    {
        // Parameters for the API call
        $requestId = '123e4567-e89b-12d3-a456-426614174000';
        $evseStatus = null;
        $connectorTypes = null;
        $connectorMinPower =
            null;
        $authorizationMethods =
            null;
        $withOperatorName =
            null;
        $evseId = 'NL*TNM*E01000401*0';
        $locationExternalId =
            null;
        $evseExternalId = null;
        $pageNumber = null;
        $perPage = null;
        $updatedSince = null;
        $country = TestParam::object('["NED"]');
        $excludeCountry = TestParam::object('["NED"]');

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getEVLocations(
                $requestId,
                $evseStatus,
                $connectorTypes,
                $connectorMinPower,
                $authorizationMethods,
                $withOperatorName,
                $evseId,
                $locationExternalId,
                $evseExternalId,
                $pageNumber,
                $perPage,
                $updatedSince,
                $country,
                $excludeCountry
            );
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->allowExtraHeaders()->expectHeaders($headers)->assert();
    }
}
