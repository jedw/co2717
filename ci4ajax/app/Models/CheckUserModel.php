<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CheckUserModel extends Model{

    protected $table = "ajaxcheckuser";
    protected $primaryKey = 'ID';
    protected $allowedFields = ['ID', 'firstname', 'surname', 'email', 'username', 'password'];
    protected $returnType = 'array';

}