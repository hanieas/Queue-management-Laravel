<?php

namespace App\Repositories\Eloquent;

use App\Models\Reserve;
use App\Repositories\ReserveRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReserveRepository
 * @package App\Repositories\Eloquent
 */
class ReserveRepository extends BaseRepository implements ReserveRepositoryInterface
{

    /**
     * ReserveRepository constructor.
     * @param Reserve $model
     */
    public function __construct(Reserve $model)
    {
        parent::__construct($model);
    }

    /**
     * @param array $attribute
     * @return Model
     */
    public function create(array $attribute): Model
    {
        return $this->model->create($attribute);
    }
}
