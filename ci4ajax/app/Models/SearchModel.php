<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class SearchModel extends Model{

    protected $table = "search";
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'firstname', 'surname'];
    protected $returnType = 'array';
    
}
