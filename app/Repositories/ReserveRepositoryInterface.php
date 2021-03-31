<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Interface ReserveRepositoryInterface
 * @package App\Repositories
 */
interface ReserveRepositoryInterface
{
    /**
     * @param array $attribute
     * @return Model
     */
    public function create(array $attribute) : Model;
}
