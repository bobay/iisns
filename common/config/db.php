<?php
////////////////////
// This file contains the database access information.
// This file is needed to establish a connection to MySQL
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=bosiisns',
    'username' => 'root',
    'password' => '',
    #'tablePrefix' => 'pre_',
    'enableSchemaCache' => true //No need to modify
];
