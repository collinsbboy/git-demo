<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class Courses extends Model
{
    protected $table      = 'courses';
    protected $primaryKey = 'courses_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['course_name', 'created_by'];


}