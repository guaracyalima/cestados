<?php

namespace CEstados\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CEstados\Repositories\StatesRepository;
use CEstados\Models\States;
use CEstados\Validators\StatesValidator;

/**
 * Class StatesRepositoryEloquent
 * @package namespace CEstados\Repositories;
 */
class StatesRepositoryEloquent extends BaseRepository implements StatesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return States::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
