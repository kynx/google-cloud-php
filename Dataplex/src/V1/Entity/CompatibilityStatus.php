<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/metadata.proto

namespace Google\Cloud\Dataplex\V1\Entity;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provides compatibility information for various metadata stores.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Entity.CompatibilityStatus</code>
 */
class CompatibilityStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Whether this entity is compatible with Hive Metastore.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Entity.CompatibilityStatus.Compatibility hive_metastore = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $hive_metastore = null;
    /**
     * Output only. Whether this entity is compatible with BigQuery.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Entity.CompatibilityStatus.Compatibility bigquery = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $bigquery = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataplex\V1\Entity\CompatibilityStatus\Compatibility $hive_metastore
     *           Output only. Whether this entity is compatible with Hive Metastore.
     *     @type \Google\Cloud\Dataplex\V1\Entity\CompatibilityStatus\Compatibility $bigquery
     *           Output only. Whether this entity is compatible with BigQuery.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Metadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Whether this entity is compatible with Hive Metastore.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Entity.CompatibilityStatus.Compatibility hive_metastore = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\Entity\CompatibilityStatus\Compatibility|null
     */
    public function getHiveMetastore()
    {
        return $this->hive_metastore;
    }

    public function hasHiveMetastore()
    {
        return isset($this->hive_metastore);
    }

    public function clearHiveMetastore()
    {
        unset($this->hive_metastore);
    }

    /**
     * Output only. Whether this entity is compatible with Hive Metastore.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Entity.CompatibilityStatus.Compatibility hive_metastore = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\Entity\CompatibilityStatus\Compatibility $var
     * @return $this
     */
    public function setHiveMetastore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Entity\CompatibilityStatus\Compatibility::class);
        $this->hive_metastore = $var;

        return $this;
    }

    /**
     * Output only. Whether this entity is compatible with BigQuery.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Entity.CompatibilityStatus.Compatibility bigquery = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\Entity\CompatibilityStatus\Compatibility|null
     */
    public function getBigquery()
    {
        return $this->bigquery;
    }

    public function hasBigquery()
    {
        return isset($this->bigquery);
    }

    public function clearBigquery()
    {
        unset($this->bigquery);
    }

    /**
     * Output only. Whether this entity is compatible with BigQuery.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Entity.CompatibilityStatus.Compatibility bigquery = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\Entity\CompatibilityStatus\Compatibility $var
     * @return $this
     */
    public function setBigquery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Entity\CompatibilityStatus\Compatibility::class);
        $this->bigquery = $var;

        return $this;
    }

}


