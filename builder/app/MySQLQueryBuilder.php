<?php

namespace App;

use App\QueryBuilderInterface;
Class MySQLQueryBuilder implements QueryBuilderInterface{
    private string $query;

    public function __construct()
    {
        $this->query = '';
    }

    public function select(string $fields): QueryBuilderInterface
    {
        $this->query .= "SELECT $fields ";
        return $this;
    }

    public function from(string $table): QueryBuilderInterface
    {
        $this->query .= "FROM $table ";
        return $this;
    }

    public function where(string $condition): QueryBuilderInterface
    {
        $this->query .= "WHERE $condition ";
        return $this;
    }

    public function orderBy(string $order): QueryBuilderInterface
    {
        $this->query .= "ORDER BY $order ";
        return $this;
    }

    public function getQuery(): string
    {
        return $this->query;
    }
}
