<?php

$args = json_decode($argv[1], true);

$name = $args['name'] ?? 'World';

echo json_encode(['Hello', $name]);
