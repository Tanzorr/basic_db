<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => getenv('DATABASE_URL') ?: 'sqlite:@app/data/app.db',
    'username' => 'php_mvc',
    'password' => 'php_mvc',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
