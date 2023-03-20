<?php
/**
 * User: Damian Zamojski (br33f)
 * Date: 22.06.2021
 * Time: 15:29
 */

namespace Br33f\Ga4\MeasurementProtocol\Enum;


class ErrorCode
{
    const MAX_EVENT_COUNT_EXCEED = 100001;
    const VALIDATION_CLIENT_ID_REQUIRED = 1000002;
    const VALIDATION_EVENTS_MUST_NOT_BE_EMPTY = 1000003;
    const VALIDATION_ITEM_AT_LEAST_ITEM_ID_OR_ITEM_NAME_REQUIRED = 1000004;
    const VALIDATION_FIELD_REQUIRED = 1000005;
    const VALIDATION_APP_INSTANCE_ID_REQUIRED = 1000006;
    const VALIDATION_CLIENT_IDENTIFIER_MISCONFIGURED = 1000007;
}