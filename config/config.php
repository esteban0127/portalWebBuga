<?php

use FStudio\myConfig as config;

$config = new config();

$config->setPath('c:/xampp/htdocs/portalWebBuga/');
$config->setUrl('http://localhost/portalWebBuga/web/');

$config->setDriver('mysql');
$config->setHost('localhost');
$config->setPort(3306);
$config->setDbName('portal_web_buga');
$config->setUser('root');
$config->setPassword('');
$config->setDsn(
        $config->getDriver()
        . ':host=' . $config->getHost()
        . ';port=' . $config->getPort()
        . ';dbname=' . $config->getDbName()
);

$config->setSessionName('FStudio');

$config->setDefaultModule('inicio');
$config->setDefaultAction('index');

//$config->setPlugins(array(
//    'fsEjemplo1Plugin',
//    'fsEjemplo2Plugin',
//));
