<?php

declare(strict_types=1);

/*
 * ShellEVLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellEVLib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use ShellEVLib\Controllers\ChargingController;
use ShellEVLib\Exceptions;

class ChargingControllerTest extends BaseTestController
{
    /**
     * @var ChargingController ChargingController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getChargingController();
    }

    public function testStart()
    {
        // Parameters for the API call
        $requestId = '123e4567-e89b-12d3-a456-426614174000';
        $body = null;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->start($requestId, $body);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"requestId":"9d2dee33-7803-485a-a2b1-2c7538e597ee","status":"SUCCESS","data":' .
                '[{"sessionId":"c3e332f0-1bb2-4f50-a96b-e075bbb71e68"}]}'
            )))
            ->assert();
    }

    public function testStop()
    {
        // Parameters for the API call
        $requestId = '123e4567-e89b-12d3-a456-426614174000';
        $sessionId = 'c3e332f0-1bb2-4f50-a96b-e075bbb71e68';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->stop($requestId, $sessionId);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(
                TestParam::object('{"requestId":"9d2dee33-7803-485a-a2b1-2c7538e597ee","status":"SUCCESS"}')
            ))
            ->assert();
    }

    public function testGetChargeSessionRetrieve()
    {
        // Parameters for the API call
        $requestId = '123e4567-e89b-12d3-a456-426614174000';
        $sessionId = 'c3e332f0-1bb2-4f50-a96b-e075bbb71e68';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getChargeSessionRetrieve($requestId, $sessionId);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"requestId":"9d2dee33-7803-485a-a2b1-2c7538e597ee","status":"SUCCESS","data":' .
                '[{"id":"78b5d7a3-bdba-43d7-9851-1c84fcddb782","userId":"281482b6-2c9a-4fd1-b3ea' .
                '-1928edb40ef9","emaId":"NL-TNM-C00122045-K","evseId":"NL*TNM*E02003451*0","last' .
                'Updated":"2024-06-19T07:36:57.985998Z","startedAt":"2024-06-19T11:20:27Z","stop' .
                'pedAt":"2014-06-19T12:20:27Z","sessionState":{"status":"Started"}}]}'
            )))
            ->assert();
    }

    public function testActive()
    {
        // Parameters for the API call
        $requestId = '123e4567-e89b-12d3-a456-426614174000';
        $emaId = 'NL-TNM-C0216599X-A';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->active($requestId, $emaId);
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"requestId":"9d2dee33-7803-485a-a2b1-2c7538e597ee","status":"SUCCESS","data":' .
                '[{"id":"78b5d7a3-bdba-43d7-9851-1c84fcddb782","userId":"281482b6-2c9a-4fd1-b3ea' .
                '-1928edb40ef9","emaId":"NL-TNM-C00122045-K","evseId":"NL*TNM*E02003451*0","star' .
                'tedAt":"2015-08-19T11:20:27Z","stoppedAt":"2015-08-19T11:20:27Z","SessionState"' .
                ':{"status":"Started"},"lastUpdated":"2024-07-17T07:36:57.985998Z"}]}'
            )))
            ->assert();
    }
}
