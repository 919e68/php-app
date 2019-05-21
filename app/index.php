<?php

$app = new \Slim\App;

require 'modules/graphql/index.php';

$app->get('/', function($request, $response, $args) {
  return 'server is up and running';
});


$app->run();