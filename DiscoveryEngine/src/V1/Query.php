<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/session.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a user inputed query.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Query</code>
 */
class Query extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique Id for the query.
     *
     * Generated from protobuf field <code>string query_id = 1;</code>
     */
    protected $query_id = '';
    protected $content;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           Plain text.
     *     @type string $query_id
     *           Unique Id for the query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Session::initOnce();
        parent::__construct($data);
    }

    /**
     * Plain text.
     *
     * Generated from protobuf field <code>string text = 2;</code>
     * @return string
     */
    public function getText()
    {
        return $this->readOneof(2);
    }

    public function hasText()
    {
        return $this->hasOneof(2);
    }

    /**
     * Plain text.
     *
     * Generated from protobuf field <code>string text = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Unique Id for the query.
     *
     * Generated from protobuf field <code>string query_id = 1;</code>
     * @return string
     */
    public function getQueryId()
    {
        return $this->query_id;
    }

    /**
     * Unique Id for the query.
     *
     * Generated from protobuf field <code>string query_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_id = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->whichOneof("content");
    }

}

