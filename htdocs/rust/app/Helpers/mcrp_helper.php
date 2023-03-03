<?php 

    if (!function_exists('get_member_field_by_code')) {
        
        function get_member_field_by_code($type, $memberCode, $field){

            $db = \Config\Database::connect();

            $builder = $db->table($type); 
            $builder = $builder->where('memberCode', $memberCode);
            $userDetail = $builder->get()->getRow($field);

            return $userDetail;

        }

    }


    if (!function_exists('get_type_by_id')) {

        function get_type_by_id($type, $id, $field){
        
            $db = \Config\Database::connect();

            $builder = $db->table($type); 
            $builder = $builder->where($type.'_id', $id);
            $typeDetail = $builder->get()->getRow($field);

            return $typeDetail;

        }
       
    }



    if (!function_exists('count_class_members')) {

        function count_class_members($id){

            $db = \Config\Database::connect();
    
            $builder = $db->table('user_table');
            $builder->where('class_id' , $id);
            $builder->where('account_type' , 1);
            $TotalClass = $builder->countAllResults();
            return $TotalClass;
    
        }
       
    }


?>