<?php

// This is the database connection configuration.
return array(
    'connectionString' => 'mysql:host=localhost;dbname=company',
    'schemaCachingDuration' => 3600,
    'enableParamLogging' => true, //On production set false
    'enableProfiling' => true, //On production set false
    'emulatePrepare' => true,
    'username' => 'company',
    'password' => 'pass_to_company',
    'charset' => 'utf8',
);
