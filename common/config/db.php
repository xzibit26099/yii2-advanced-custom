<?php

return [
    'class' => $_ENV['YII_SETTINGS']['db']['class'],
    'dsn' => $_ENV['YII_SETTINGS']['db']['db'] .
        ':host=' . $_ENV['YII_SETTINGS']['db']['host'] .
        ';port=' . $_ENV['YII_SETTINGS']['db']['port'] .
        ';dbname=' . $_ENV['YII_SETTINGS']['db']['dbname'],
    'username' => $_ENV['YII_SETTINGS']['db']['login'],
    'password' => $_ENV['YII_SETTINGS']['db']['password'],
    'charset' => $_ENV['YII_SETTINGS']['db']['charset'],
];