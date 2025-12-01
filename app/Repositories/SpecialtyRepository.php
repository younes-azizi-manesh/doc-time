<?php
namespace App\Repositories;

use App\Contracts\SpecialtyRepositoryInterface;
use App\Models\Specialty;

class SpecialtyRepository extends BaseRepository implements SpecialtyRepositoryInterface
{
    public function model(): string
    {
        return Specialty::class;
    }
}