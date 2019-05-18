<?php

use GraphQL\GraphQL;
require 'types/Schema.php';

$app->get('/graphql', function($request, $response, $args) {
  require 'types/Schema.php';

  return $response->withJSON([
    'message' => 'server is up and running',
    'Schema'  => $Schema
  ]);
});


$app->post('/graphql', function ($request, $response, $args) {
  global $Schema;

  $params = $request->getParsedBody();
  $query = $params['query'];
  $variables = isset($params['variables']) ? $params['variables'] : null;

  try {
    $rootValue = ['prefix' => 'You said: '];
    $result = GraphQL::executeQuery($Schema, $query, $rootValue, null, $variables);
    $graph = $result->toArray();
    return $response->withJSON($graph);

  } catch (\Exception $e) {
    $graph = [
      'errors' => [
        [
          'message' => $e->getMessage()
        ]
      ]
    ];

    return $response->withJSON($graph, 500);
  }
});
