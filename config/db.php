<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=195.158.24.39;port=5432;dbname=postgres',
    'username' => 'postgres',
    'password' => 'bgtyhn123$',
    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql' => [
            'class' => 'yii\db\pgsql\Schema',
            'defaultSchema' => 'public' //specify your schema here, public is the default schema
        ]
    ],
    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
