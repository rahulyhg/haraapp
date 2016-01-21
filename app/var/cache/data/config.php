<?php
/**
* WARNING
*
* Manual changes to this file may cause a malfunction of the system.
* Be careful when changing settings!
*
*/

return array (
  'db' => 
  array (
    'mysql' => 
    array (
      'adapter' => 'Mysql',
      'host' => 'localhost',
      'port' => '3306',
      'username' => 'root',
      'password' => 'root',
      'dbname' => 'haraapp',
    ),
    'dbfive' => 
    array (
      'adapter' => 'Mysql',
      'host' => 'localhost',
      'port' => '3306',
      'username' => 'root',
      'password' => 'root',
      'dbname' => 'beta_five',
    ),
    'queue' => 
    array (
      'max_retry' => 5,
      'host' => 'localhost',
      'port' => 11300,
    ),
    'redis' => 
    array (
      'host' => 'localhost',
      'port' => 6379,
    ),
  ),
  'global' => 
  array (
    'profiler' => false,
    'version' => 
    array (
      'css' => 1,
      'js' => 1,
    ),
    'baseUrl' => 'http://haraapp.dev/',
    'staticUrl' => 'http://haraapp.dev/',
    'prefix' => 'haraapp_',
    'title' => 'haraapp',
    'cookieEncryptionkey' => 'KkX+DVfEA>196yN',
    'cache' => 
    array (
      'lifetime' => 86400,
      'adapter' => 'File',
      'cacheDir' => ROOT_PATH . '/app/var/cache/data/',
    ),
    'logger' => 
    array (
      'enabled' => false,
      'path' => ROOT_PATH . '/app/var/logs/',
      'format' => '[%date%][%type%] %message%',
    ),
    'view' => 
    array (
      'compiledPath' => ROOT_PATH . '/app/var/cache/volt/',
      'compiledExtension' => '.php',
      'compiledSeparator' => '_',
      'compileAlways' => false,
    ),
    'session' => 
    array (
      'adapter' => 'Files',
    ),
    'assets' => 
    array (
      'local' => 'assets/',
    ),
    'metadata' => 
    array (
      'adapter' => 'Files',
      'metaDataDir' => ROOT_PATH . '/app/var/cache/metadata/',
    ),
    'annotations' => 
    array (
      'adapter' => 'Files',
      'annotationsDir' => ROOT_PATH . '/app/var/cache/annotations/',
    ),
  ),
  'permission' => 1,
  'events' => 
  array (
  ),
  'modules' => 
  array (
    0 => 'user',
    1 => 'import',
  ),
);