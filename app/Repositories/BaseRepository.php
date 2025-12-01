<?php
namespace App\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
        protected Model $model;

    public function __construct()
    {
        $this->model = $this->getModelInstance();
    }

    abstract protected function model(): string;

    protected function getModelInstance(): Model
    {
        return app()->make($this->model());
    }

    public function all(array $with = [], array $where = [], string $orderBy = 'id', string $sortBy = 'asc'): Collection
    {
        $query = $this->model->query();

        if (!empty($with)) {
            $query->with($with);
        }

        foreach ($where as $key => $value) {
            $query->where($key, $value);
        }

        return $query->orderBy($orderBy, $sortBy)->get();
    }

    public function findWhere(array $where = [], array $with = []): Collection
    {
        $query = $this->model->query();

        if (!empty($with)) {
            $query->with($with);
        }

        foreach ($where as $key => $value) {
            $query->where($key, $value);
        }

        return $query->get();
    }

    public function paginate(int $perPage = 15, array $with = [], array $where = [], string $orderBy = 'id', string $sortBy = 'asc'): LengthAwarePaginator
    {
        $query = $this->model->query();

        if (!empty($with)) {
            $query->with($with);
        }

        foreach ($where as $key => $value) {
            $query->where($key, $value);
        }

        return $query->orderBy($orderBy, $sortBy)->paginate($perPage);
    }

    public function find(int $id): ?Model
    {
        return $this->model->query()->find($id);
    }

    public function findOrFail(int $id): Model
    {
        return $this->model->query()->findOrFail($id);
    }

    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): Model
    {
        $record = $this->findOrFail($id);
        $record->update($data);
        return $record;
    }

    public function delete(int $id): bool
    {
        $record = $this->findOrFail($id);
        return $record->delete();
    }
}