<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/folder.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message that contains the resource name and display name of a folder
 * resource.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.Folder</code>
 */
class Folder extends \Google\Protobuf\Internal\Message
{
    /**
     * Full resource name of this folder. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string resource_folder = 1;</code>
     */
    private $resource_folder = '';
    /**
     * The user defined display name for this folder.
     *
     * Generated from protobuf field <code>string resource_folder_display_name = 2;</code>
     */
    private $resource_folder_display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_folder
     *           Full resource name of this folder. See:
     *           https://cloud.google.com/apis/design/resource_names#full_resource_name
     *     @type string $resource_folder_display_name
     *           The user defined display name for this folder.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Folder::initOnce();
        parent::__construct($data);
    }

    /**
     * Full resource name of this folder. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string resource_folder = 1;</code>
     * @return string
     */
    public function getResourceFolder()
    {
        return $this->resource_folder;
    }

    /**
     * Full resource name of this folder. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string resource_folder = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceFolder($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_folder = $var;

        return $this;
    }

    /**
     * The user defined display name for this folder.
     *
     * Generated from protobuf field <code>string resource_folder_display_name = 2;</code>
     * @return string
     */
    public function getResourceFolderDisplayName()
    {
        return $this->resource_folder_display_name;
    }

    /**
     * The user defined display name for this folder.
     *
     * Generated from protobuf field <code>string resource_folder_display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceFolderDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_folder_display_name = $var;

        return $this;
    }

}

