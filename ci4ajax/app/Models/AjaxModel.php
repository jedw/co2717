<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class AjaxModel extends Model{

    protected $table = "ajax";
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'thing'];
    protected $returnType = 'array';

}