<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Remote repository configuration.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.RemoteRepositoryConfig</code>
 */
class RemoteRepositoryConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The description of the remote source.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     */
    protected $description = '';
    /**
     * Optional. The credentials used to access the remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.UpstreamCredentials upstream_credentials = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $upstream_credentials = null;
    protected $remote_source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\DockerRepository $docker_repository
     *           Specific settings for a Docker remote repository.
     *     @type \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\MavenRepository $maven_repository
     *           Specific settings for a Maven remote repository.
     *     @type \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\NpmRepository $npm_repository
     *           Specific settings for an Npm remote repository.
     *     @type \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\PythonRepository $python_repository
     *           Specific settings for a Python remote repository.
     *     @type \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\AptRepository $apt_repository
     *           Specific settings for an Apt remote repository.
     *     @type \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\YumRepository $yum_repository
     *           Specific settings for a Yum remote repository.
     *     @type string $description
     *           The description of the remote source.
     *     @type \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\UpstreamCredentials $upstream_credentials
     *           Optional. The credentials used to access the remote repository.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Repository::initOnce();
        parent::__construct($data);
    }

    /**
     * Specific settings for a Docker remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.DockerRepository docker_repository = 2;</code>
     * @return \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\DockerRepository|null
     */
    public function getDockerRepository()
    {
        return $this->readOneof(2);
    }

    public function hasDockerRepository()
    {
        return $this->hasOneof(2);
    }

    /**
     * Specific settings for a Docker remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.DockerRepository docker_repository = 2;</code>
     * @param \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\DockerRepository $var
     * @return $this
     */
    public function setDockerRepository($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\DockerRepository::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Specific settings for a Maven remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.MavenRepository maven_repository = 3;</code>
     * @return \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\MavenRepository|null
     */
    public function getMavenRepository()
    {
        return $this->readOneof(3);
    }

    public function hasMavenRepository()
    {
        return $this->hasOneof(3);
    }

    /**
     * Specific settings for a Maven remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.MavenRepository maven_repository = 3;</code>
     * @param \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\MavenRepository $var
     * @return $this
     */
    public function setMavenRepository($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\MavenRepository::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Specific settings for an Npm remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.NpmRepository npm_repository = 4;</code>
     * @return \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\NpmRepository|null
     */
    public function getNpmRepository()
    {
        return $this->readOneof(4);
    }

    public function hasNpmRepository()
    {
        return $this->hasOneof(4);
    }

    /**
     * Specific settings for an Npm remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.NpmRepository npm_repository = 4;</code>
     * @param \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\NpmRepository $var
     * @return $this
     */
    public function setNpmRepository($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\NpmRepository::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Specific settings for a Python remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.PythonRepository python_repository = 5;</code>
     * @return \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\PythonRepository|null
     */
    public function getPythonRepository()
    {
        return $this->readOneof(5);
    }

    public function hasPythonRepository()
    {
        return $this->hasOneof(5);
    }

    /**
     * Specific settings for a Python remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.PythonRepository python_repository = 5;</code>
     * @param \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\PythonRepository $var
     * @return $this
     */
    public function setPythonRepository($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\PythonRepository::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Specific settings for an Apt remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.AptRepository apt_repository = 6;</code>
     * @return \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\AptRepository|null
     */
    public function getAptRepository()
    {
        return $this->readOneof(6);
    }

    public function hasAptRepository()
    {
        return $this->hasOneof(6);
    }

    /**
     * Specific settings for an Apt remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.AptRepository apt_repository = 6;</code>
     * @param \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\AptRepository $var
     * @return $this
     */
    public function setAptRepository($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\AptRepository::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Specific settings for a Yum remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.YumRepository yum_repository = 7;</code>
     * @return \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\YumRepository|null
     */
    public function getYumRepository()
    {
        return $this->readOneof(7);
    }

    public function hasYumRepository()
    {
        return $this->hasOneof(7);
    }

    /**
     * Specific settings for a Yum remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.YumRepository yum_repository = 7;</code>
     * @param \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\YumRepository $var
     * @return $this
     */
    public function setYumRepository($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\YumRepository::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * The description of the remote source.
     *
     * Generated from protobuf field <code>string description = 1;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the remote source.
     *
     * Generated from protobuf field <code>string description = 1;</code>
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
     * Optional. The credentials used to access the remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.UpstreamCredentials upstream_credentials = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\UpstreamCredentials|null
     */
    public function getUpstreamCredentials()
    {
        return $this->upstream_credentials;
    }

    public function hasUpstreamCredentials()
    {
        return isset($this->upstream_credentials);
    }

    public function clearUpstreamCredentials()
    {
        unset($this->upstream_credentials);
    }

    /**
     * Optional. The credentials used to access the remote repository.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1.RemoteRepositoryConfig.UpstreamCredentials upstream_credentials = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\UpstreamCredentials $var
     * @return $this
     */
    public function setUpstreamCredentials($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\UpstreamCredentials::class);
        $this->upstream_credentials = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteSource()
    {
        return $this->whichOneof("remote_source");
    }

}

