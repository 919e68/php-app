<?php

$app->get('/graphql', function ($request, $response, $args) {
  return $response->withJSON([
    'message' => 'this is a graphql endpoint'
  ]);
});