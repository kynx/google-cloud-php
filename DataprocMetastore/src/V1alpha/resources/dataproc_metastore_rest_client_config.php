<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

return [
    'interfaces' => [
        'google.cloud.location.Locations' => [
            'GetLocation' => [
                'method' => 'get',
                'uriTemplate' => '/v1alpha/{name=projects/*/locations/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListLocations' => [
                'method' => 'get',
                'uriTemplate' => '/v1alpha/{name=projects/*}/locations',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
        'google.cloud.metastore.v1alpha.DataprocMetastore' => [
            'AlterMetadataResourceLocation' => [
                'method' => 'post',
                'uriTemplate' => '/v1alpha/{service=projects/*/locations/*/services/*}:alterLocation',
                'body' => '*',
                'placeholders' => [
                    'service' => [
                        'getters' => [
                            'getService',
                        ],
                    ],
                ],
            ],
            'CreateBackup' => [
                'method' => 'post',
                'uriTemplate' => '/v1alpha/{parent=projects/*/locations/*/services/*}/backups',
                'body' => 'backup',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
                'queryParams' => [
                    'backup_id',
                ],
            ],
            'CreateMetadataImport' => [
                'method' => 'post',
                'uriTemplate' => '/v1alpha/{parent=projects/*/locations/*/services/*}/metadataImports',
                'body' => 'metadata_import',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
                'queryParams' => [
                    'metadata_import_id',
                ],
            ],
            'CreateService' => [
                'method' => 'post',
                'uriTemplate' => '/v1alpha/{parent=projects/*/locations/*}/services',
                'body' => 'service',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
                'queryParams' => [
                    'service_id',
                ],
            ],
            'DeleteBackup' => [
                'method' => 'delete',
                'uriTemplate' => '/v1alpha/{name=projects/*/locations/*/services/*/backups/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteService' => [
                'method' => 'delete',
                'uriTemplate' => '/v1alpha/{name=projects/*/locations/*/services/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ExportMetadata' => [
                'method' => 'post',
                'uriTemplate' => '/v1alpha/{service=projects/*/locations/*/services/*}:exportMetadata',
                'body' => '*',
                'placeholders' => [
                    'service' => [
                        'getters' => [
                            'getService',
                        ],
                    ],
                ],
            ],
            'GetBackup' => [
                'method' => 'get',
                'uriTemplate' => '/v1alpha/{name=projects/*/locations/*/services/*/backups/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetMetadataImport' => [
                'method' => 'get',
                'uriTemplate' => '/v1alpha/{name=projects/*/locations/*/services/*/metadataImports/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetService' => [
                'method' => 'get',
                'uriTemplate' => '/v1alpha/{name=projects/*/locations/*/services/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListBackups' => [
                'method' => 'get',
                'uriTemplate' => '/v1alpha/{parent=projects/*/locations/*/services/*}/backups',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ListMetadataImports' => [
                'method' => 'get',
                'uriTemplate' => '/v1alpha/{parent=projects/*/locations/*/services/*}/metadataImports',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ListServices' => [
                'method' => 'get',
                'uriTemplate' => '/v1alpha/{parent=projects/*/locations/*}/services',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'MoveTableToDatabase' => [
                'method' => 'post',
                'uriTemplate' => '/v1alpha/{service=projects/*/locations/*/services/*}:moveTableToDatabase',
                'body' => '*',
                'placeholders' => [
                    'service' => [
                        'getters' => [
                            'getService',
                        ],
                    ],
                ],
            ],
            'QueryMetadata' => [
                'method' => 'post',
                'uriTemplate' => '/v1alpha/{service=projects/*/locations/*/services/*}:queryMetadata',
                'body' => '*',
                'placeholders' => [
                    'service' => [
                        'getters' => [
                            'getService',
                        ],
                    ],
                ],
            ],
            'RemoveIamPolicy' => [
                'method' => 'post',
                'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*/**}:removeIamPolicy',
                'body' => '*',
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'RestoreService' => [
                'method' => 'post',
                'uriTemplate' => '/v1alpha/{service=projects/*/locations/*/services/*}:restore',
                'body' => '*',
                'placeholders' => [
                    'service' => [
                        'getters' => [
                            'getService',
                        ],
                    ],
                ],
            ],
            'UpdateMetadataImport' => [
                'method' => 'patch',
                'uriTemplate' => '/v1alpha/{metadata_import.name=projects/*/locations/*/services/*/metadataImports/*}',
                'body' => 'metadata_import',
                'placeholders' => [
                    'metadata_import.name' => [
                        'getters' => [
                            'getMetadataImport',
                            'getName',
                        ],
                    ],
                ],
                'queryParams' => [
                    'update_mask',
                ],
            ],
            'UpdateService' => [
                'method' => 'patch',
                'uriTemplate' => '/v1alpha/{service.name=projects/*/locations/*/services/*}',
                'body' => 'service',
                'placeholders' => [
                    'service.name' => [
                        'getters' => [
                            'getService',
                            'getName',
                        ],
                    ],
                ],
                'queryParams' => [
                    'update_mask',
                ],
            ],
        ],
        'google.iam.v1.IAMPolicy' => [
            'GetIamPolicy' => [
                'method' => 'get',
                'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*}:getIamPolicy',
                'additionalBindings' => [
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*/backups/*}:getIamPolicy',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*/databases/*}:getIamPolicy',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*/databases/*/tables/*}:getIamPolicy',
                    ],
                    [
                        'method' => 'get',
                        'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/federations/*}:getIamPolicy',
                    ],
                ],
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'SetIamPolicy' => [
                'method' => 'post',
                'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*}:setIamPolicy',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*/backups/*}:setIamPolicy',
                        'body' => '*',
                    ],
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*/databases/*}:setIamPolicy',
                        'body' => '*',
                    ],
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*/databases/*/tables/*}:setIamPolicy',
                        'body' => '*',
                    ],
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/federations/*}:setIamPolicy',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'TestIamPermissions' => [
                'method' => 'post',
                'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*}:testIamPermissions',
                'body' => '*',
                'additionalBindings' => [
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*/backups/*}:testIamPermissions',
                        'body' => '*',
                    ],
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*/databases/*}:testIamPermissions',
                        'body' => '*',
                    ],
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/services/*/databases/*/tables/*}:testIamPermissions',
                        'body' => '*',
                    ],
                    [
                        'method' => 'post',
                        'uriTemplate' => '/v1alpha/{resource=projects/*/locations/*/federations/*}:testIamPermissions',
                        'body' => '*',
                    ],
                ],
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
        ],
        'google.longrunning.Operations' => [
            'CancelOperation' => [
                'method' => 'post',
                'uriTemplate' => '/v1alpha/{name=projects/*/locations/*/operations/*}:cancel',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteOperation' => [
                'method' => 'delete',
                'uriTemplate' => '/v1alpha/{name=projects/*/locations/*/operations/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetOperation' => [
                'method' => 'get',
                'uriTemplate' => '/v1alpha/{name=projects/*/locations/*/operations/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListOperations' => [
                'method' => 'get',
                'uriTemplate' => '/v1alpha/{name=projects/*/locations/*}/operations',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'numericEnums' => true,
];
