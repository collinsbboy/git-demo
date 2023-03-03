<?php namespace App\Models\Teacher;

use CodeIgniter\Model;

class ReportData extends Model
{
    protected $table      = 'report';
    protected $primaryKey = 'report_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['class_exam_id', 'student_id', 'student_exam_time', 'grade', 'overAll'];

    
}