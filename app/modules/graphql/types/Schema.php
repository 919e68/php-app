<?php

use GraphQL\Type\Schema;

require_once 'QueryType.php';

$Schema = new Schema([
  'query' => $QueryType
]);
