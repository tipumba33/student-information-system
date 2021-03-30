<?php

namespace App\Repositories;

use App\Models\classroom;
use App\Repositories\BaseRepository;

/**
 * Class classroomRepository
 * @package App\Repositories
 * @version September 8, 2020, 11:53 am UTC
*/

class classroomRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
    ];

    protected $primaryKey = 'classroom_id';
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
        return classroom::class;
    }
}
