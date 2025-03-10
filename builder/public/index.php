<?php
require('../vendor/autoload.php');
use App\MySQLQueryBuilder;

$query = (new MySQLQueryBuilder())
    ->select('name, email')
    ->from('users')
    ->where('age > 18')
    ->orderBy('name')
    ->getQuery();
echo $query;