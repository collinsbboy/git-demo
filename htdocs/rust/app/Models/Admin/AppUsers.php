<?php namespace App\Models\Admin;

use CodeIgniter\Model;

class AppUsers extends Model
{
    protected $table      = 'user_table';
    protected $primaryKey = 'user_table_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['username', 'password', 'name', 'callContact','email','courses_id','address','dob','national','student_type','school','yearCom','qualification','status','account_type','photo'];


}