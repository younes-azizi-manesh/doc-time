<?php

namespace App\Contracts;

interface BaseRepositoryInterface
{
    public function all(array $with = [], array $where = [], string $orderBy = 'id', string $sortBy = 'asc');

    public function findWhere(array $where, array $with = []);

    public function paginate(int $perPage = 15, array $with = [], array $where = [], string $orderBy = 'id', string $sortBy = 'asc');

    public function find(int $id);

    public function findOrFail(int $id);

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);
}
