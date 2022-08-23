<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace GPBMetadata\Google\Cloud\Datastream\V1;

class DatastreamResources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�K
5google/cloud/datastream/v1/datastream_resources.protogoogle.cloud.datastream.v1google/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.proto"�
OracleProfile
hostname (	B�A
port (
username (	B�A
password (	B�A
database_service (	B�Ab
connection_attributes (2C.google.cloud.datastream.v1.OracleProfile.ConnectionAttributesEntry;
ConnectionAttributesEntry
key (	
value (	:8"�
MysqlProfile
hostname (	B�A
port (
username (	B�A
password (	B�A�A>

ssl_config (2*.google.cloud.datastream.v1.MysqlSslConfig"4

GcsProfile
bucket (	B�A
	root_path (	"
StaticServiceIpConnectivity"�
ForwardSshTunnelConnectivity
hostname (	B�A
username (	B�A
port (
passwordd (	B�AH 
private_keye (	B�AH B
authentication_method"]
VpcPeeringConfig4
vpc (	B\'�A�A!
compute.googleapis.com/Networks
subnet (	B�A"�
PrivateConnection
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AI
labels (29.google.cloud.datastream.v1.PrivateConnection.LabelsEntry
display_name (	B�AG
state (23.google.cloud.datastream.v1.PrivateConnection.StateB�A5
error (2!.google.cloud.datastream.v1.ErrorB�AH
vpc_peering_configd (2,.google.cloud.datastream.v1.VpcPeeringConfig-
LabelsEntry
key (	
value (	:8"i
State
STATE_UNSPECIFIED 
CREATING
CREATED

FAILED
DELETING
FAILED_TO_DELETE:��A~
+datastream.googleapis.com/PrivateConnectionOprojects/{project}/locations/{location}/privateConnections/{private_connection}"f
PrivateConnectivityO
private_connection (	B3�A�A-
+datastream.googleapis.com/PrivateConnection"�
Route
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A=
labels (2-.google.cloud.datastream.v1.Route.LabelsEntry
display_name (	B�A 
destination_address (	B�A
destination_port (-
LabelsEntry
key (	
value (	:8:��A�
datastream.googleapis.com/Route^projects/{project}/locations/{location}/privateConnections/{private_connection}/routes/{route}"�
MysqlSslConfig

client_key (	B�A
client_key_set (B�A
client_certificate (	B�A#
client_certificate_set (B�A
ca_certificate (	B�A
ca_certificate_set (B�A"�
ConnectionProfile
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AI
labels (29.google.cloud.datastream.v1.ConnectionProfile.LabelsEntry
display_name (	B�AC
oracle_profiled (2).google.cloud.datastream.v1.OracleProfileH =
gcs_profilee (2&.google.cloud.datastream.v1.GcsProfileH A
mysql_profilef (2(.google.cloud.datastream.v1.MysqlProfileH b
static_service_ip_connectivity� (27.google.cloud.datastream.v1.StaticServiceIpConnectivityH]
forward_ssh_connectivity� (28.google.cloud.datastream.v1.ForwardSshTunnelConnectivityHP
private_connectivity� (2/.google.cloud.datastream.v1.PrivateConnectivityH-
LabelsEntry
key (	
value (	:8:��A~
+datastream.googleapis.com/ConnectionProfileOprojects/{project}/locations/{location}/connectionProfiles/{connection_profile}B	
profileB
connectivity"�
OracleColumn
column (	
	data_type (	
length (
	precision (
scale (
encoding (	
primary_key (
nullable (
ordinal_position	 ("^
OracleTable
table (	@
oracle_columns (2(.google.cloud.datastream.v1.OracleColumn"^
OracleSchema
schema (	>
oracle_tables (2\'.google.cloud.datastream.v1.OracleTable"O
OracleRdbms@
oracle_schemas (2(.google.cloud.datastream.v1.OracleSchema"�
OracleSourceConfig@
include_objects (2\'.google.cloud.datastream.v1.OracleRdbms@
exclude_objects (2\'.google.cloud.datastream.v1.OracleRdbms"�
MysqlColumn
column (	
	data_type (	
length (
	collation (	
primary_key (
nullable (
ordinal_position ("[

MysqlTable
table (	>
mysql_columns (2\'.google.cloud.datastream.v1.MysqlColumn"_
MysqlDatabase
database (	<
mysql_tables (2&.google.cloud.datastream.v1.MysqlTable"P

MysqlRdbmsB
mysql_databases (2).google.cloud.datastream.v1.MysqlDatabase"�
MysqlSourceConfig?
include_objects (2&.google.cloud.datastream.v1.MysqlRdbms?
exclude_objects (2&.google.cloud.datastream.v1.MysqlRdbms"�
SourceConfigV
source_connection_profile (	B3�A�A-
+datastream.googleapis.com/ConnectionProfileN
oracle_source_configd (2..google.cloud.datastream.v1.OracleSourceConfigH L
mysql_source_confige (2-.google.cloud.datastream.v1.MysqlSourceConfigH B
source_stream_config"
AvroFileFormat"�
JsonFileFormatW
schema_file_format (2;.google.cloud.datastream.v1.JsonFileFormat.SchemaFileFormatO
compression (2:.google.cloud.datastream.v1.JsonFileFormat.JsonCompression"`
SchemaFileFormat"
SCHEMA_FILE_FORMAT_UNSPECIFIED 
NO_SCHEMA_FILE
AVRO_SCHEMA_FILE"Q
JsonCompression 
JSON_COMPRESSION_UNSPECIFIED 
NO_COMPRESSION
GZIP"�
GcsDestinationConfig
path (	
file_rotation_mb (9
file_rotation_interval (2.google.protobuf.DurationF
avro_file_formatd (2*.google.cloud.datastream.v1.AvroFileFormatH F
json_file_formate (2*.google.cloud.datastream.v1.JsonFileFormatH B
file_format"�
DestinationConfig[
destination_connection_profile (	B3�A�A-
+datastream.googleapis.com/ConnectionProfileR
gcs_destination_configd (20.google.cloud.datastream.v1.GcsDestinationConfigH B
destination_stream_config"�	
Stream
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A>
labels (2..google.cloud.datastream.v1.Stream.LabelsEntry
display_name (	B�AD
source_config (2(.google.cloud.datastream.v1.SourceConfigB�AN
destination_config (2-.google.cloud.datastream.v1.DestinationConfigB�A7
state (2(.google.cloud.datastream.v1.Stream.StateN
backfill_alle (26.google.cloud.datastream.v1.Stream.BackfillAllStrategyH P
backfill_nonef (27.google.cloud.datastream.v1.Stream.BackfillNoneStrategyH 6
errors	 (2!.google.cloud.datastream.v1.ErrorB�A1
customer_managed_encryption_key
 (	B�AH��
BackfillAllStrategyJ
oracle_excluded_objects (2\'.google.cloud.datastream.v1.OracleRdbmsH H
mysql_excluded_objects (2&.google.cloud.datastream.v1.MysqlRdbmsH B
excluded_objects
BackfillNoneStrategy-
LabelsEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 
NOT_STARTED
RUNNING

PAUSED
MAINTENANCE

FAILED
FAILED_PERMANENTLY
STARTING
DRAINING:_�A\\
 datastream.googleapis.com/Stream8projects/{project}/locations/{location}/streams/{stream}B
backfill_strategyB"
 _customer_managed_encryption_key"�
StreamObject
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
display_name (	B�A6
errors (2!.google.cloud.datastream.v1.ErrorB�A=
backfill_job (2\'.google.cloud.datastream.v1.BackfillJobI
source_object (22.google.cloud.datastream.v1.SourceObjectIdentifier:v�As
&datastream.googleapis.com/StreamObjectIprojects/{project}/locations/{location}/streams/{stream}/objects/{object}"�
SourceObjectIdentifierf
oracle_identifier (2I.google.cloud.datastream.v1.SourceObjectIdentifier.OracleObjectIdentifierH d
mysql_identifier (2H.google.cloud.datastream.v1.SourceObjectIdentifier.MysqlObjectIdentifierH A
OracleObjectIdentifier
schema (	B�A
table (	B�AB
MysqlObjectIdentifier
database (	B�A
table (	B�AB
source_identifier"�
BackfillJob<
state (2-.google.cloud.datastream.v1.BackfillJob.State@
trigger (2/.google.cloud.datastream.v1.BackfillJob.Trigger8
last_start_time (2.google.protobuf.TimestampB�A6
last_end_time (2.google.protobuf.TimestampB�A6
errors (2!.google.cloud.datastream.v1.ErrorB�A"�
State
STATE_UNSPECIFIED 
NOT_STARTED
PENDING

ACTIVE
STOPPED

FAILED
	COMPLETED
UNSUPPORTED"=
Trigger
TRIGGER_UNSPECIFIED 
	AUTOMATIC

MANUAL"�
Error
reason (	

error_uuid (	
message (	.

error_time (2.google.protobuf.Timestamp?
details (2..google.cloud.datastream.v1.Error.DetailsEntry.
DetailsEntry
key (	
value (	:8"O
ValidationResult;
validations (2&.google.cloud.datastream.v1.Validation"�

Validation
description (	;
state (2,.google.cloud.datastream.v1.Validation.State>
message (2-.google.cloud.datastream.v1.ValidationMessage
code (	"H
State
STATE_UNSPECIFIED 
NOT_EXECUTED

FAILED

PASSED"�
ValidationMessage
message (	B
level (23.google.cloud.datastream.v1.ValidationMessage.LevelM
metadata (2;.google.cloud.datastream.v1.ValidationMessage.MetadataEntry
code (	/
MetadataEntry
key (	
value (	:8"6
Level
LEVEL_UNSPECIFIED 
WARNING	
ERRORB�
com.google.cloud.datastream.v1BDatastreamResourcesProtoPZDgoogle.golang.org/genproto/googleapis/cloud/datastream/v1;datastream�Google.Cloud.Datastream.V1�Google\\Cloud\\Datastream\\V1�Google::Cloud::Datastream::V1�AO
compute.googleapis.com/Networks,projects/{project}/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

