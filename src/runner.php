<?php

$app    = \BFW\Application::getInstance();
$config = $this->getConfig();

echo 'Debug mode : '.($app->getConfig()->getValue('debug') ? 'true' : 'false')."\n";
echo 'Module version : '.$config->getValue('version')."\n";
