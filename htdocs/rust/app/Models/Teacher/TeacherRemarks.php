<?php namespace App\Models\Teacher;

use CodeIgniter\Model;

class TeacherRemarks extends Model
{
    protected $table      = 'remarks';
    protected $primaryKey = 'remarks_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['type', 'remarks'];


}