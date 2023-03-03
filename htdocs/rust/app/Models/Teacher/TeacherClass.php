<?php namespace App\Models\Teacher;

use CodeIgniter\Model;

class TeacherClass extends Model
{
    protected $table      = 'teacher_class_student';
    protected $primaryKey = 'teacher_class_student_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['class_id', 'student_id', 'teacher_id', 'school_year'];


}