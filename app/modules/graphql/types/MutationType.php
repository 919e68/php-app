<?php

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

$MutationType = new ObjectType([
    'name' => 'Mutation',
    'fields' => [
      'echo' => [
        'type' => Type::string(),
        'args' => [
          'message' => Type::nonNull(Type::string()),
        ],
        'resolve' => function ($root, $args) {
          return $root['welcomeMessage'] . ' ' . $args['message'] . ' you called a Mutation';
        }
      ],
    ],
]);
