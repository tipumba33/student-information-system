<?php

namespace App\Repositories;

use App\Models\Faculty;
use App\Repositories\BaseRepository;

/**
 * Class FacultyRepository
 * @package App\Repositories
 * @version September 8, 2020, 12:02 pm UTC
*/

class FacultyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'faculty_name',
        'faculty_code',
        'faculty_description',
        'faculty_status'
    ];

    protected $primaryKey = 'faculty_id';

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
        return Faculty::class;
    }
}
