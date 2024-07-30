<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/notebook_execution_job.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class NotebookExecutionJob
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\JobState::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/cloud/aiplatform/v1/notebook_execution_job.protogoogle.cloud.aiplatform.v1google/api/resource.proto*google/cloud/aiplatform/v1/job_state.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
NotebookExecutionJobo
dataform_repository_source (2I.google.cloud.aiplatform.v1.NotebookExecutionJob.DataformRepositorySourceH a
gcs_notebook_source (2B.google.cloud.aiplatform.v1.NotebookExecutionJob.GcsNotebookSourceH g
direct_notebook_source (2E.google.cloud.aiplatform.v1.NotebookExecutionJob.DirectNotebookSourceH i
\'notebook_runtime_template_resource_name (	B6�A3
1aiplatform.googleapis.com/NotebookRuntimeTemplateH
gcs_output_uri (	H
execution_user	 (	H
service_account (	H
name (	B�A
display_name (	4
execution_timeout (2.google.protobuf.DurationJ
schedule_resource_name (	B*�A�A$
"aiplatform.googleapis.com/Schedule<
	job_state
 (2$.google.cloud.aiplatform.v1.JobStateB�A\'
status (2.google.rpc.StatusB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AL
labels (2<.google.cloud.aiplatform.v1.NotebookExecutionJob.LabelsEntryY
DataformRepositorySource)
!dataform_repository_resource_name (	

commit_sha (	4
GcsNotebookSource
uri (	

generation (	\'
DirectNotebookSource
content (-
LabelsEntry
key (	
value (	:8:��A�
.aiplatform.googleapis.com/NotebookExecutionJobVprojects/{project}/locations/{location}/notebookExecutionJobs/{notebook_execution_job}*notebookExecutionJobs2notebookExecutionJobB
notebook_sourceB
environment_specB
execution_sinkB
execution_identityB�
com.google.cloud.aiplatform.v1BNotebookExecutionJobProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

