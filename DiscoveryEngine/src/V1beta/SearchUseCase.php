<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/common.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use UnexpectedValueException;

/**
 * Defines a further subdivision of `SolutionType`.
 * Specifically applies to
 * [SOLUTION_TYPE_SEARCH][google.cloud.discoveryengine.v1beta.SolutionType.SOLUTION_TYPE_SEARCH].
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1beta.SearchUseCase</code>
 */
class SearchUseCase
{
    /**
     * Value used when unset. Will not occur in CSS.
     *
     * Generated from protobuf enum <code>SEARCH_USE_CASE_UNSPECIFIED = 0;</code>
     */
    const SEARCH_USE_CASE_UNSPECIFIED = 0;
    /**
     * Search use case. Expects the traffic has a non-empty
     * [query][google.cloud.discoveryengine.v1beta.SearchRequest.query].
     *
     * Generated from protobuf enum <code>SEARCH_USE_CASE_SEARCH = 1;</code>
     */
    const SEARCH_USE_CASE_SEARCH = 1;
    /**
     * Browse use case. Expects the traffic has an empty
     * [query][google.cloud.discoveryengine.v1beta.SearchRequest.query].
     *
     * Generated from protobuf enum <code>SEARCH_USE_CASE_BROWSE = 2;</code>
     */
    const SEARCH_USE_CASE_BROWSE = 2;

    private static $valueToName = [
        self::SEARCH_USE_CASE_UNSPECIFIED => 'SEARCH_USE_CASE_UNSPECIFIED',
        self::SEARCH_USE_CASE_SEARCH => 'SEARCH_USE_CASE_SEARCH',
        self::SEARCH_USE_CASE_BROWSE => 'SEARCH_USE_CASE_BROWSE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

