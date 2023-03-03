<?php namespace App\Validation;

use App\Models\LoginModel;
use App\Models\Teacher\StudentExams;

class UserRules {

    private $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function validateMember(string $str, string $fields, array $data){
        $model = new LoginModel();
        $user = $model->where('username', $data['username'])
                      ->first();

        if (!$user)
            
            return false;

            $testP = password_hash($user['password'], PASSWORD_DEFAULT);

            return password_verify($data['password'], $testP);
        
    }


    public function validateExamPass(string $str, string $fields, array $data){
        $model = new StudentExams();
        $user = $model->where('exam_id', $data['examID'])
                      ->first();

        if (!$user)
            
            return false;

            $testP = password_hash($user['examPass'], PASSWORD_DEFAULT);

            return password_verify($data['password'], $testP);
        
    }


    public function check_date(string $str, string &$error = null) : bool 
    {
        if($str > date('Y-m-d')){
            return false;
        }
        return true;
    }
}


?>