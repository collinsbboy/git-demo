<?php namespace App\Models\Teacher;

use CodeIgniter\Model;

class CreateClass extends Model
{
    protected $table      = 'teacher_class';
    protected $primaryKey = 'teacher_class_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['teacher_id', 'class_id', 'subject_id', 'school_year'];


}