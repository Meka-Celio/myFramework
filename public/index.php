<?php

use GuzzleHttp\Psr7\ServerRequest;

require_once '../vendor/autoload.php';

$app = new \Framework\App();

$response = $app->run(ServerRequest::fromGlobals());
