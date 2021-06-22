<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1/managed_identities_service.proto

namespace Google\Cloud\ManagedIdentities\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CreateMicrosoftAdDomain][google.cloud.managedidentities.v1.CreateMicrosoftAdDomain]
 *
 * Generated from protobuf message <code>google.cloud.managedidentities.v1.CreateMicrosoftAdDomainRequest</code>
 */
class CreateMicrosoftAdDomainRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource project name and location using the form:
     * `projects/{project_id}/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The fully qualified domain name.
     * e.g. mydomain.myorganization.com, with the following restrictions:
     *  * Must contain only lowercase letters, numbers, periods and hyphens.
     *  * Must start with a letter.
     *  * Must contain between 2-64 characters.
     *  * Must end with a number or a letter.
     *  * Must not start with period.
     *  * First segement length (mydomain form example above) shouldn't exceed
     *    15 chars.
     *  * The last segment cannot be fully numeric.
     *  * Must be unique within the customer project.
     *
     * Generated from protobuf field <code>string domain_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $domain_name = '';
    /**
     * Required. A Managed Identity domain resource.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1.Domain domain = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $domain = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource project name and location using the form:
     *           `projects/{project_id}/locations/global`
     *     @type string $domain_name
     *           Required. The fully qualified domain name.
     *           e.g. mydomain.myorganization.com, with the following restrictions:
     *            * Must contain only lowercase letters, numbers, periods and hyphens.
     *            * Must start with a letter.
     *            * Must contain between 2-64 characters.
     *            * Must end with a number or a letter.
     *            * Must not start with period.
     *            * First segement length (mydomain form example above) shouldn't exceed
     *              15 chars.
     *            * The last segment cannot be fully numeric.
     *            * Must be unique within the customer project.
     *     @type \Google\Cloud\ManagedIdentities\V1\Domain $domain
     *           Required. A Managed Identity domain resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedidentities\V1\ManagedIdentitiesService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource project name and location using the form:
     * `projects/{project_id}/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource project name and location using the form:
     * `projects/{project_id}/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The fully qualified domain name.
     * e.g. mydomain.myorganization.com, with the following restrictions:
     *  * Must contain only lowercase letters, numbers, periods and hyphens.
     *  * Must start with a letter.
     *  * Must contain between 2-64 characters.
     *  * Must end with a number or a letter.
     *  * Must not start with period.
     *  * First segement length (mydomain form example above) shouldn't exceed
     *    15 chars.
     *  * The last segment cannot be fully numeric.
     *  * Must be unique within the customer project.
     *
     * Generated from protobuf field <code>string domain_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDomainName()
    {
        return $this->domain_name;
    }

    /**
     * Required. The fully qualified domain name.
     * e.g. mydomain.myorganization.com, with the following restrictions:
     *  * Must contain only lowercase letters, numbers, periods and hyphens.
     *  * Must start with a letter.
     *  * Must contain between 2-64 characters.
     *  * Must end with a number or a letter.
     *  * Must not start with period.
     *  * First segement length (mydomain form example above) shouldn't exceed
     *    15 chars.
     *  * The last segment cannot be fully numeric.
     *  * Must be unique within the customer project.
     *
     * Generated from protobuf field <code>string domain_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDomainName($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain_name = $var;

        return $this;
    }

    /**
     * Required. A Managed Identity domain resource.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1.Domain domain = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ManagedIdentities\V1\Domain|null
     */
    public function getDomain()
    {
        return isset($this->domain) ? $this->domain : null;
    }

    public function hasDomain()
    {
        return isset($this->domain);
    }

    public function clearDomain()
    {
        unset($this->domain);
    }

    /**
     * Required. A Managed Identity domain resource.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1.Domain domain = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ManagedIdentities\V1\Domain $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ManagedIdentities\V1\Domain::class);
        $this->domain = $var;

        return $this;
    }

}

