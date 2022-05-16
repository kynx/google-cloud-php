<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace GPBMetadata\Google\Bigtable\Admin\V2;

class Instance
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Bigtable\Admin\V2\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
\'google/bigtable/admin/v2/instance.protogoogle.bigtable.admin.v2google/api/field_behavior.protogoogle/api/resource.proto%google/bigtable/admin/v2/common.protogoogle/protobuf/timestamp.proto"�
Instance
name (	
display_name (	B�A7
state (2(.google.bigtable.admin.v2.Instance.State5
type (2\'.google.bigtable.admin.v2.Instance.Type>
labels (2..google.bigtable.admin.v2.Instance.LabelsEntry4
create_time (2.google.protobuf.TimestampB�A-
LabelsEntry
key (	
value (	:8"5
State
STATE_NOT_KNOWN 	
READY
CREATING"=
Type
TYPE_UNSPECIFIED 

PRODUCTION
DEVELOPMENT:S�AP
%bigtableadmin.googleapis.com/Instance\'projects/{project}/instances/{instance}"5
AutoscalingTargets
cpu_utilization_percent ("O
AutoscalingLimits
min_serve_nodes (B�A
max_serve_nodes (B�A"�
Cluster
name (	;
location (	B)�A�A#
!locations.googleapis.com/Location;
state (2\'.google.bigtable.admin.v2.Cluster.StateB�A
serve_nodes (I
cluster_config (2/.google.bigtable.admin.v2.Cluster.ClusterConfigH H
default_storage_type (2%.google.bigtable.admin.v2.StorageTypeB�AR
encryption_config (22.google.bigtable.admin.v2.Cluster.EncryptionConfigB�A�
ClusterAutoscalingConfigL
autoscaling_limits (2+.google.bigtable.admin.v2.AutoscalingLimitsB�AN
autoscaling_targets (2,.google.bigtable.admin.v2.AutoscalingTargetsB�Ao
ClusterConfig^
cluster_autoscaling_config (2:.google.bigtable.admin.v2.Cluster.ClusterAutoscalingConfigP
EncryptionConfig<
kms_key_name (	B&�A#
!cloudkms.googleapis.com/CryptoKey"Q
State
STATE_NOT_KNOWN 	
READY
CREATING
RESIZING
DISABLED:e�Ab
$bigtableadmin.googleapis.com/Cluster:projects/{project}/instances/{instance}/clusters/{cluster}B
config"�

AppProfile
name (	
etag (	
description (	g
multi_cluster_routing_use_any (2>.google.bigtable.admin.v2.AppProfile.MultiClusterRoutingUseAnyH [
single_cluster_routing (29.google.bigtable.admin.v2.AppProfile.SingleClusterRoutingH 0
MultiClusterRoutingUseAny
cluster_ids (	N
SingleClusterRouting

cluster_id (	"
allow_transactional_writes (:o�Al
\'bigtableadmin.googleapis.com/AppProfileAprojects/{project}/instances/{instance}/appProfiles/{app_profile}B
routing_policy"�
	HotTablet
name (	;

table_name (	B\'�A$
"bigtableadmin.googleapis.com/Table3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
	start_key (	
end_key (	#
node_cpu_usage_percent (B�A:�A|
&bigtableadmin.googleapis.com/HotTabletRprojects/{project}/instances/{instance}/clusters/{cluster}/hotTablets/{hot_tablet}B�
com.google.bigtable.admin.v2BInstanceProtoPZ=google.golang.org/genproto/googleapis/bigtable/admin/v2;admin�Google.Cloud.Bigtable.Admin.V2�Google\\Cloud\\Bigtable\\Admin\\V2�"Google::Cloud::Bigtable::Admin::V2�Ax
!cloudkms.googleapis.com/CryptoKeySprojects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

