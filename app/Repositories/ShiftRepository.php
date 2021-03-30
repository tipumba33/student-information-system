<?php

namespace App\Repositories;

use App\Models\Shift;
use App\Repositories\BaseRepository;

/**
 * Class ShiftRepository
 * @package App\Repositories
 * @version September 8, 2020, 12:00 pm UTC
*/

class ShiftRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'shift'
    ];

    protected $primaryKey = 'shift_id';

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Shift::class;
    }
}
