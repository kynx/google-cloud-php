<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/session.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

class Session
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
-google/cloud/discoveryengine/v1/session.protogoogle.cloud.discoveryengine.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
Session
name (	B�A=
state (2..google.cloud.discoveryengine.v1.Session.State
user_pseudo_id (	<
turns (2-.google.cloud.discoveryengine.v1.Session.Turn3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�Ay
Turn5
query (2&.google.cloud.discoveryengine.v1.Query:
answer (	B*�A\'
%discoveryengine.googleapis.com/Answer"/
State
STATE_UNSPECIFIED 
IN_PROGRESS:��A�
&discoveryengine.googleapis.com/SessionRprojects/{project}/locations/{location}/dataStores/{data_store}/sessions/{session}kprojects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/sessions/{session}dprojects/{project}/locations/{location}/collections/{collection}/engines/{engine}/sessions/{session}"4
Query
text (	H 
query_id (	B	
contentB�
#com.google.cloud.discoveryengine.v1BSessionProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

