<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an IP Address resource. Google Compute Engine has two IP Address resources: * [Global (external and internal)](https://cloud.google.com/compute/docs/reference/rest/v1/globalAddresses) * [Regional (external and internal)](https://cloud.google.com/compute/docs/reference/rest/v1/addresses) For more information, see Reserving a static external IP address.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Address</code>
 */
class Address extends \Google\Protobuf\Internal\Message
{
    /**
     * The static IP address represented by this resource.
     *
     * Generated from protobuf field <code>optional string address = 462920692;</code>
     */
    private $address = null;
    /**
     * The type of address to reserve, either INTERNAL or EXTERNAL. If unspecified, defaults to EXTERNAL.
     * Check the AddressType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string address_type = 264307877;</code>
     */
    private $address_type = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this field when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * The IP version that will be used by this address. Valid options are IPV4 or IPV6. This can only be specified for a global address.
     * Check the IpVersion enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string ip_version = 294959552;</code>
     */
    private $ip_version = null;
    /**
     * [Output Only] Type of the resource. Always compute#address for addresses.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all following characters (except for the last character) must be a dash, lowercase letter, or digit. The last character must be a lowercase letter or digit.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * The URL of the network in which to reserve the address. This field can only be used with INTERNAL type with the VPC_PEERING purpose.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     */
    private $network = null;
    /**
     * This signifies the networking tier used for configuring this address and can only take the following values: PREMIUM or STANDARD. Internal IP addresses are always Premium Tier; global external IP addresses are always Premium Tier; regional external IP addresses can be either Standard or Premium Tier. If this field is not specified, it is assumed to be PREMIUM.
     * Check the NetworkTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_tier = 517397843;</code>
     */
    private $network_tier = null;
    /**
     * The prefix length if the resource represents an IP range.
     *
     * Generated from protobuf field <code>optional int32 prefix_length = 453565747;</code>
     */
    private $prefix_length = null;
    /**
     * The purpose of this resource, which can be one of the following values: - GCE_ENDPOINT for addresses that are used by VM instances, alias IP ranges, load balancers, and similar resources. - DNS_RESOLVER for a DNS resolver address in a subnetwork for a Cloud DNS inbound forwarder IP addresses (regional internal IP address in a subnet of a VPC network) - VPC_PEERING for global internal IP addresses used for private services access allocated ranges. - NAT_AUTO for the regional external IP addresses used by Cloud NAT when allocating addresses using automatic NAT IP address allocation. - IPSEC_INTERCONNECT for addresses created from a private IP range that are reserved for a VLAN attachment in an *HA VPN over Cloud Interconnect* configuration. These addresses are regional resources. - `SHARED_LOADBALANCER_VIP` for an internal IP address that is assigned to multiple internal forwarding rules. - `PRIVATE_SERVICE_CONNECT` for a private network address that is used to configure Private Service Connect. Only global internal addresses can use this purpose.
     * Check the Purpose enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string purpose = 316407070;</code>
     */
    private $purpose = null;
    /**
     * [Output Only] The URL of the region where a regional address resides. For regional addresses, you must specify the region as a path parameter in the HTTP request URL. *This field is not applicable to global addresses.*
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    private $region = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] The status of the address, which can be one of RESERVING, RESERVED, or IN_USE. An address that is RESERVING is currently in the process of being reserved. A RESERVED address is currently reserved and available to use. An IN_USE address is currently being used by another resource and is not available.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    private $status = null;
    /**
     * The URL of the subnetwork in which to reserve the address. If an IP address is specified, it must be within the subnetwork's IP range. This field can only be used with INTERNAL type with a GCE_ENDPOINT or DNS_RESOLVER purpose.
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     */
    private $subnetwork = null;
    /**
     * [Output Only] The URLs of the resources that are using this address.
     *
     * Generated from protobuf field <code>repeated string users = 111578632;</code>
     */
    private $users;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           The static IP address represented by this resource.
     *     @type string $address_type
     *           The type of address to reserve, either INTERNAL or EXTERNAL. If unspecified, defaults to EXTERNAL.
     *           Check the AddressType enum for the list of possible values.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this field when you create the resource.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $ip_version
     *           The IP version that will be used by this address. Valid options are IPV4 or IPV6. This can only be specified for a global address.
     *           Check the IpVersion enum for the list of possible values.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#address for addresses.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all following characters (except for the last character) must be a dash, lowercase letter, or digit. The last character must be a lowercase letter or digit.
     *     @type string $network
     *           The URL of the network in which to reserve the address. This field can only be used with INTERNAL type with the VPC_PEERING purpose.
     *     @type string $network_tier
     *           This signifies the networking tier used for configuring this address and can only take the following values: PREMIUM or STANDARD. Internal IP addresses are always Premium Tier; global external IP addresses are always Premium Tier; regional external IP addresses can be either Standard or Premium Tier. If this field is not specified, it is assumed to be PREMIUM.
     *           Check the NetworkTier enum for the list of possible values.
     *     @type int $prefix_length
     *           The prefix length if the resource represents an IP range.
     *     @type string $purpose
     *           The purpose of this resource, which can be one of the following values: - GCE_ENDPOINT for addresses that are used by VM instances, alias IP ranges, load balancers, and similar resources. - DNS_RESOLVER for a DNS resolver address in a subnetwork for a Cloud DNS inbound forwarder IP addresses (regional internal IP address in a subnet of a VPC network) - VPC_PEERING for global internal IP addresses used for private services access allocated ranges. - NAT_AUTO for the regional external IP addresses used by Cloud NAT when allocating addresses using automatic NAT IP address allocation. - IPSEC_INTERCONNECT for addresses created from a private IP range that are reserved for a VLAN attachment in an *HA VPN over Cloud Interconnect* configuration. These addresses are regional resources. - `SHARED_LOADBALANCER_VIP` for an internal IP address that is assigned to multiple internal forwarding rules. - `PRIVATE_SERVICE_CONNECT` for a private network address that is used to configure Private Service Connect. Only global internal addresses can use this purpose.
     *           Check the Purpose enum for the list of possible values.
     *     @type string $region
     *           [Output Only] The URL of the region where a regional address resides. For regional addresses, you must specify the region as a path parameter in the HTTP request URL. *This field is not applicable to global addresses.*
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $status
     *           [Output Only] The status of the address, which can be one of RESERVING, RESERVED, or IN_USE. An address that is RESERVING is currently in the process of being reserved. A RESERVED address is currently reserved and available to use. An IN_USE address is currently being used by another resource and is not available.
     *           Check the Status enum for the list of possible values.
     *     @type string $subnetwork
     *           The URL of the subnetwork in which to reserve the address. If an IP address is specified, it must be within the subnetwork's IP range. This field can only be used with INTERNAL type with a GCE_ENDPOINT or DNS_RESOLVER purpose.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $users
     *           [Output Only] The URLs of the resources that are using this address.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The static IP address represented by this resource.
     *
     * Generated from protobuf field <code>optional string address = 462920692;</code>
     * @return string
     */
    public function getAddress()
    {
        return isset($this->address) ? $this->address : '';
    }

    public function hasAddress()
    {
        return isset($this->address);
    }

    public function clearAddress()
    {
        unset($this->address);
    }

    /**
     * The static IP address represented by this resource.
     *
     * Generated from protobuf field <code>optional string address = 462920692;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * The type of address to reserve, either INTERNAL or EXTERNAL. If unspecified, defaults to EXTERNAL.
     * Check the AddressType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string address_type = 264307877;</code>
     * @return string
     */
    public function getAddressType()
    {
        return isset($this->address_type) ? $this->address_type : '';
    }

    public function hasAddressType()
    {
        return isset($this->address_type);
    }

    public function clearAddressType()
    {
        unset($this->address_type);
    }

    /**
     * The type of address to reserve, either INTERNAL or EXTERNAL. If unspecified, defaults to EXTERNAL.
     * Check the AddressType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string address_type = 264307877;</code>
     * @param string $var
     * @return $this
     */
    public function setAddressType($var)
    {
        GPBUtil::checkString($var, True);
        $this->address_type = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this field when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this field when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * The IP version that will be used by this address. Valid options are IPV4 or IPV6. This can only be specified for a global address.
     * Check the IpVersion enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string ip_version = 294959552;</code>
     * @return string
     */
    public function getIpVersion()
    {
        return isset($this->ip_version) ? $this->ip_version : '';
    }

    public function hasIpVersion()
    {
        return isset($this->ip_version);
    }

    public function clearIpVersion()
    {
        unset($this->ip_version);
    }

    /**
     * The IP version that will be used by this address. Valid options are IPV4 or IPV6. This can only be specified for a global address.
     * Check the IpVersion enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string ip_version = 294959552;</code>
     * @param string $var
     * @return $this
     */
    public function setIpVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_version = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#address for addresses.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#address for addresses.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all following characters (except for the last character) must be a dash, lowercase letter, or digit. The last character must be a lowercase letter or digit.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`. The first character must be a lowercase letter, and all following characters (except for the last character) must be a dash, lowercase letter, or digit. The last character must be a lowercase letter or digit.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The URL of the network in which to reserve the address. This field can only be used with INTERNAL type with the VPC_PEERING purpose.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     * @return string
     */
    public function getNetwork()
    {
        return isset($this->network) ? $this->network : '';
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * The URL of the network in which to reserve the address. This field can only be used with INTERNAL type with the VPC_PEERING purpose.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * This signifies the networking tier used for configuring this address and can only take the following values: PREMIUM or STANDARD. Internal IP addresses are always Premium Tier; global external IP addresses are always Premium Tier; regional external IP addresses can be either Standard or Premium Tier. If this field is not specified, it is assumed to be PREMIUM.
     * Check the NetworkTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_tier = 517397843;</code>
     * @return string
     */
    public function getNetworkTier()
    {
        return isset($this->network_tier) ? $this->network_tier : '';
    }

    public function hasNetworkTier()
    {
        return isset($this->network_tier);
    }

    public function clearNetworkTier()
    {
        unset($this->network_tier);
    }

    /**
     * This signifies the networking tier used for configuring this address and can only take the following values: PREMIUM or STANDARD. Internal IP addresses are always Premium Tier; global external IP addresses are always Premium Tier; regional external IP addresses can be either Standard or Premium Tier. If this field is not specified, it is assumed to be PREMIUM.
     * Check the NetworkTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string network_tier = 517397843;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkTier($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_tier = $var;

        return $this;
    }

    /**
     * The prefix length if the resource represents an IP range.
     *
     * Generated from protobuf field <code>optional int32 prefix_length = 453565747;</code>
     * @return int
     */
    public function getPrefixLength()
    {
        return isset($this->prefix_length) ? $this->prefix_length : 0;
    }

    public function hasPrefixLength()
    {
        return isset($this->prefix_length);
    }

    public function clearPrefixLength()
    {
        unset($this->prefix_length);
    }

    /**
     * The prefix length if the resource represents an IP range.
     *
     * Generated from protobuf field <code>optional int32 prefix_length = 453565747;</code>
     * @param int $var
     * @return $this
     */
    public function setPrefixLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->prefix_length = $var;

        return $this;
    }

    /**
     * The purpose of this resource, which can be one of the following values: - GCE_ENDPOINT for addresses that are used by VM instances, alias IP ranges, load balancers, and similar resources. - DNS_RESOLVER for a DNS resolver address in a subnetwork for a Cloud DNS inbound forwarder IP addresses (regional internal IP address in a subnet of a VPC network) - VPC_PEERING for global internal IP addresses used for private services access allocated ranges. - NAT_AUTO for the regional external IP addresses used by Cloud NAT when allocating addresses using automatic NAT IP address allocation. - IPSEC_INTERCONNECT for addresses created from a private IP range that are reserved for a VLAN attachment in an *HA VPN over Cloud Interconnect* configuration. These addresses are regional resources. - `SHARED_LOADBALANCER_VIP` for an internal IP address that is assigned to multiple internal forwarding rules. - `PRIVATE_SERVICE_CONNECT` for a private network address that is used to configure Private Service Connect. Only global internal addresses can use this purpose.
     * Check the Purpose enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string purpose = 316407070;</code>
     * @return string
     */
    public function getPurpose()
    {
        return isset($this->purpose) ? $this->purpose : '';
    }

    public function hasPurpose()
    {
        return isset($this->purpose);
    }

    public function clearPurpose()
    {
        unset($this->purpose);
    }

    /**
     * The purpose of this resource, which can be one of the following values: - GCE_ENDPOINT for addresses that are used by VM instances, alias IP ranges, load balancers, and similar resources. - DNS_RESOLVER for a DNS resolver address in a subnetwork for a Cloud DNS inbound forwarder IP addresses (regional internal IP address in a subnet of a VPC network) - VPC_PEERING for global internal IP addresses used for private services access allocated ranges. - NAT_AUTO for the regional external IP addresses used by Cloud NAT when allocating addresses using automatic NAT IP address allocation. - IPSEC_INTERCONNECT for addresses created from a private IP range that are reserved for a VLAN attachment in an *HA VPN over Cloud Interconnect* configuration. These addresses are regional resources. - `SHARED_LOADBALANCER_VIP` for an internal IP address that is assigned to multiple internal forwarding rules. - `PRIVATE_SERVICE_CONNECT` for a private network address that is used to configure Private Service Connect. Only global internal addresses can use this purpose.
     * Check the Purpose enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string purpose = 316407070;</code>
     * @param string $var
     * @return $this
     */
    public function setPurpose($var)
    {
        GPBUtil::checkString($var, True);
        $this->purpose = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the region where a regional address resides. For regional addresses, you must specify the region as a path parameter in the HTTP request URL. *This field is not applicable to global addresses.*
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] The URL of the region where a regional address resides. For regional addresses, you must specify the region as a path parameter in the HTTP request URL. *This field is not applicable to global addresses.*
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] The status of the address, which can be one of RESERVING, RESERVED, or IN_USE. An address that is RESERVING is currently in the process of being reserved. A RESERVED address is currently reserved and available to use. An IN_USE address is currently being used by another resource and is not available.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] The status of the address, which can be one of RESERVING, RESERVED, or IN_USE. An address that is RESERVING is currently in the process of being reserved. A RESERVED address is currently reserved and available to use. An IN_USE address is currently being used by another resource and is not available.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * The URL of the subnetwork in which to reserve the address. If an IP address is specified, it must be within the subnetwork's IP range. This field can only be used with INTERNAL type with a GCE_ENDPOINT or DNS_RESOLVER purpose.
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return isset($this->subnetwork) ? $this->subnetwork : '';
    }

    public function hasSubnetwork()
    {
        return isset($this->subnetwork);
    }

    public function clearSubnetwork()
    {
        unset($this->subnetwork);
    }

    /**
     * The URL of the subnetwork in which to reserve the address. If an IP address is specified, it must be within the subnetwork's IP range. This field can only be used with INTERNAL type with a GCE_ENDPOINT or DNS_RESOLVER purpose.
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * [Output Only] The URLs of the resources that are using this address.
     *
     * Generated from protobuf field <code>repeated string users = 111578632;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * [Output Only] The URLs of the resources that are using this address.
     *
     * Generated from protobuf field <code>repeated string users = 111578632;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->users = $arr;

        return $this;
    }

}

