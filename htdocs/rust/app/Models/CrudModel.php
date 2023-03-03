<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

use CodeIgniter\Model;

class CrudModel extends Model{

    protected $db;

    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
    }

    function getClass(){
        return $this->db->table('class')->get()->getResultArray();
    }

}

?>