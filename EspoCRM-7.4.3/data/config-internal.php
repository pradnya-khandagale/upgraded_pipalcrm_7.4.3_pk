<?php
return [
  'database' => [
    'host' => 'localhost',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'pipalcrm-production',
    'user' => 'root',
    'password' => '',
    'driver' => 'pdo_mysql'
  ],
  'smtpPassword' => 'pipal@admin12',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  
  'isInstalled' => true,
  'microtimeInternal' => 1685451119.119541,
  'passwordSalt' => '5af6aac86eddebea',
  'cryptKey' => '3cc886418af27958b89fb3966a24c62d',
  'hashSecretKey' => '971a10d1ffb5adcbb246c4382aeab9d4',
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '10.4.28'
];
