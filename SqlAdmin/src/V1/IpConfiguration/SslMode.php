<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1\IpConfiguration;

use UnexpectedValueException;

/**
 * The SSL options for database connections.
 *
 * Protobuf type <code>google.cloud.sql.v1.IpConfiguration.SslMode</code>
 */
class SslMode
{
    /**
     * The SSL mode is unknown.
     *
     * Generated from protobuf enum <code>SSL_MODE_UNSPECIFIED = 0;</code>
     */
    const SSL_MODE_UNSPECIFIED = 0;
    /**
     * Allow non-SSL/non-TLS and SSL/TLS connections. For SSL/TLS connections,
     * the client certificate won't be verified.
     * When this value is used, the legacy `require_ssl` flag must be false or
     * cleared to avoid the conflict between values of two flags.
     *
     * Generated from protobuf enum <code>ALLOW_UNENCRYPTED_AND_ENCRYPTED = 1;</code>
     */
    const ALLOW_UNENCRYPTED_AND_ENCRYPTED = 1;
    /**
     * Only allow connections encrypted with SSL/TLS.
     * When this value is used, the legacy `require_ssl` flag must be false or
     * cleared to avoid the conflict between values of two flags.
     *
     * Generated from protobuf enum <code>ENCRYPTED_ONLY = 2;</code>
     */
    const ENCRYPTED_ONLY = 2;
    /**
     * Only allow connections encrypted with SSL/TLS and with valid
     * client certificates.
     * When this value is used, the legacy `require_ssl` flag must be true or
     * cleared to avoid the conflict between values of two flags.
     * PostgreSQL clients or users that connect using IAM database
     * authentication must use either the
     * [Cloud SQL Auth
     * Proxy](https://cloud.google.com/sql/docs/postgres/connect-auth-proxy) or
     * [Cloud SQL
     * Connectors](https://cloud.google.com/sql/docs/postgres/connect-connectors)
     * to enforce client identity verification.
     *
     * Generated from protobuf enum <code>TRUSTED_CLIENT_CERTIFICATE_REQUIRED = 3;</code>
     */
    const TRUSTED_CLIENT_CERTIFICATE_REQUIRED = 3;

    private static $valueToName = [
        self::SSL_MODE_UNSPECIFIED => 'SSL_MODE_UNSPECIFIED',
        self::ALLOW_UNENCRYPTED_AND_ENCRYPTED => 'ALLOW_UNENCRYPTED_AND_ENCRYPTED',
        self::ENCRYPTED_ONLY => 'ENCRYPTED_ONLY',
        self::TRUSTED_CLIENT_CERTIFICATE_REQUIRED => 'TRUSTED_CLIENT_CERTIFICATE_REQUIRED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


