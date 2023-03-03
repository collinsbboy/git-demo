<?php namespace App\Models\Teacher;

use CodeIgniter\Model;

class ReportData extends Model
{
    protected $table      = 'report';
    protected $primaryKey = 'report_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['term_id', 'class_id', 'student_id', 'vac_date','opening_date','attendance','student_status','school_year','comment','charactor','interest','attitude','head_remarks'];

    


}