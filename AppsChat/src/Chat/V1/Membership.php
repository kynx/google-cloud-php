<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/membership.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a membership relation in Google Chat, such as whether a user or
 * Chat app is invited to, part of, or absent from a space.
 *
 * Generated from protobuf message <code>google.chat.v1.Membership</code>
 */
class Membership extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the membership, assigned by the server.
     * Format: `spaces/{space}/members/{member}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Output only. State of the membership.
     *
     * Generated from protobuf field <code>.google.chat.v1.Membership.MembershipState state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Optional. User's role within a Chat space, which determines their permitted
     * actions in the space.
     * This field can only be used as input in `UpdateMembership`.
     *
     * Generated from protobuf field <code>.google.chat.v1.Membership.MembershipRole role = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $role = 0;
    /**
     * Optional. Immutable. The creation time of the membership, such as when a
     * member joined or was invited to join a space. This field is output only,
     * except when used to import historical memberships in import mode spaces.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $create_time = null;
    /**
     * Optional. Immutable. The deletion time of the membership, such as when a
     * member left or was removed from a space. This field is output only, except
     * when used to import historical memberships in import mode spaces.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $delete_time = null;
    protected $memberType;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name of the membership, assigned by the server.
     *           Format: `spaces/{space}/members/{member}`
     *     @type int $state
     *           Output only. State of the membership.
     *     @type int $role
     *           Optional. User's role within a Chat space, which determines their permitted
     *           actions in the space.
     *           This field can only be used as input in `UpdateMembership`.
     *     @type \Google\Apps\Chat\V1\User $member
     *           The Google Chat user or app the membership corresponds to.
     *           If your Chat app [authenticates as a
     *           user](https://developers.google.com/workspace/chat/authenticate-authorize-chat-user),
     *           the output populates the
     *           [user](https://developers.google.com/workspace/chat/api/reference/rest/v1/User)
     *           `name` and `type`.
     *     @type \Google\Apps\Chat\V1\Group $group_member
     *           The Google Group the membership corresponds to.
     *           Only supports read operations. Other operations, like creating or
     *           updating a membership, aren't currently supported.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Optional. Immutable. The creation time of the membership, such as when a
     *           member joined or was invited to join a space. This field is output only,
     *           except when used to import historical memberships in import mode spaces.
     *     @type \Google\Protobuf\Timestamp $delete_time
     *           Optional. Immutable. The deletion time of the membership, such as when a
     *           member left or was removed from a space. This field is output only, except
     *           when used to import historical memberships in import mode spaces.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the membership, assigned by the server.
     * Format: `spaces/{space}/members/{member}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the membership, assigned by the server.
     * Format: `spaces/{space}/members/{member}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.resource_reference) = {</code>
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
     * Output only. State of the membership.
     *
     * Generated from protobuf field <code>.google.chat.v1.Membership.MembershipState state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the membership.
     *
     * Generated from protobuf field <code>.google.chat.v1.Membership.MembershipState state = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Chat\V1\Membership\MembershipState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. User's role within a Chat space, which determines their permitted
     * actions in the space.
     * This field can only be used as input in `UpdateMembership`.
     *
     * Generated from protobuf field <code>.google.chat.v1.Membership.MembershipRole role = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Optional. User's role within a Chat space, which determines their permitted
     * actions in the space.
     * This field can only be used as input in `UpdateMembership`.
     *
     * Generated from protobuf field <code>.google.chat.v1.Membership.MembershipRole role = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Chat\V1\Membership\MembershipRole::class);
        $this->role = $var;

        return $this;
    }

    /**
     * The Google Chat user or app the membership corresponds to.
     * If your Chat app [authenticates as a
     * user](https://developers.google.com/workspace/chat/authenticate-authorize-chat-user),
     * the output populates the
     * [user](https://developers.google.com/workspace/chat/api/reference/rest/v1/User)
     * `name` and `type`.
     *
     * Generated from protobuf field <code>.google.chat.v1.User member = 3;</code>
     * @return \Google\Apps\Chat\V1\User|null
     */
    public function getMember()
    {
        return $this->readOneof(3);
    }

    public function hasMember()
    {
        return $this->hasOneof(3);
    }

    /**
     * The Google Chat user or app the membership corresponds to.
     * If your Chat app [authenticates as a
     * user](https://developers.google.com/workspace/chat/authenticate-authorize-chat-user),
     * the output populates the
     * [user](https://developers.google.com/workspace/chat/api/reference/rest/v1/User)
     * `name` and `type`.
     *
     * Generated from protobuf field <code>.google.chat.v1.User member = 3;</code>
     * @param \Google\Apps\Chat\V1\User $var
     * @return $this
     */
    public function setMember($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\User::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The Google Group the membership corresponds to.
     * Only supports read operations. Other operations, like creating or
     * updating a membership, aren't currently supported.
     *
     * Generated from protobuf field <code>.google.chat.v1.Group group_member = 5;</code>
     * @return \Google\Apps\Chat\V1\Group|null
     */
    public function getGroupMember()
    {
        return $this->readOneof(5);
    }

    public function hasGroupMember()
    {
        return $this->hasOneof(5);
    }

    /**
     * The Google Group the membership corresponds to.
     * Only supports read operations. Other operations, like creating or
     * updating a membership, aren't currently supported.
     *
     * Generated from protobuf field <code>.google.chat.v1.Group group_member = 5;</code>
     * @param \Google\Apps\Chat\V1\Group $var
     * @return $this
     */
    public function setGroupMember($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\Group::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional. Immutable. The creation time of the membership, such as when a
     * member joined or was invited to join a space. This field is output only,
     * except when used to import historical memberships in import mode spaces.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Optional. Immutable. The creation time of the membership, such as when a
     * member joined or was invited to join a space. This field is output only,
     * except when used to import historical memberships in import mode spaces.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Optional. Immutable. The deletion time of the membership, such as when a
     * member left or was removed from a space. This field is output only, except
     * when used to import historical memberships in import mode spaces.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeleteTime()
    {
        return $this->delete_time;
    }

    public function hasDeleteTime()
    {
        return isset($this->delete_time);
    }

    public function clearDeleteTime()
    {
        unset($this->delete_time);
    }

    /**
     * Optional. Immutable. The deletion time of the membership, such as when a
     * member left or was removed from a space. This field is output only, except
     * when used to import historical memberships in import mode spaces.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->delete_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getMemberType()
    {
        return $this->whichOneof("memberType");
    }

}

