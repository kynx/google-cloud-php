<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/answer.proto

namespace Google\Cloud\DiscoveryEngine\V1\Answer\QueryUnderstandingInfo\QueryClassificationInfo;

use UnexpectedValueException;

/**
 * Query classification types.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.Answer.QueryUnderstandingInfo.QueryClassificationInfo.Type</code>
 */
class Type
{
    /**
     * Unspecified query classification type.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Adversarial query classification type.
     *
     * Generated from protobuf enum <code>ADVERSARIAL_QUERY = 1;</code>
     */
    const ADVERSARIAL_QUERY = 1;
    /**
     * Non-answer-seeking query classification type.
     *
     * Generated from protobuf enum <code>NON_ANSWER_SEEKING_QUERY = 2;</code>
     */
    const NON_ANSWER_SEEKING_QUERY = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::ADVERSARIAL_QUERY => 'ADVERSARIAL_QUERY',
        self::NON_ANSWER_SEEKING_QUERY => 'NON_ANSWER_SEEKING_QUERY',
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


