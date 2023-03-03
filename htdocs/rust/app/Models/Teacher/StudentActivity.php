<?php namespace App\Models\Teacher;

use CodeIgniter\Model;

class StudentActivity extends Model
{
    protected $table      = 'nursery_exams';
    protected $primaryKey = 'nursery_exams_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['term_id', 'class_id', 'activities', 'school_year', 'student_id', 'score', 'date','teacher_id'];


}