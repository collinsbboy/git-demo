<?php namespace App\Models\Teacher;

use CodeIgniter\Model;

class StudentExams extends Model
{
    protected $table      = 'exams';
    protected $primaryKey = 'exams_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['term_id', 'class_id', 'subject_id', 'school_year', 'student_id', 'class_score', 'exams_score', 'total','date','subject_teacher_id'];

    //protected $beforeInsert = ['beforeInsert'];
    //protected $beforeUpdate = ['beforeUpdate'];


    //protected function beforeInsert(array $data){
      //  $data = $this->passwordHash($data);

        //return $data;
    //}


    //protected function beforeUpdate(array $data){
      //  $data = $this->passwordHash($data);

        //return $data;
    //}


    //protected function passwordHash(array $data){
      //  if (isset($data['data']['user_password'])) 
        //    $data['data']['user_password'] = password_hash($data['data']['memPassword'], PASSWORD_DEFAULT);

          //  return $data;
   // }

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

}