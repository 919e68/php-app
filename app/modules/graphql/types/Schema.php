<?php

use GraphQL\Type\Schema;

require_once 'QueryType.php';
require_once 'MutationType.php';

$Schema = new Schema([
  'query'    => $QueryType,
  'mutation' => $MutationType
]);
