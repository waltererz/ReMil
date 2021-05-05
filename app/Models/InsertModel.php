<?php
namespace App\Models;

use CodeIgniter\Model;

class InsertModel extends Model {
    protected $table            = 'comments';
    protected $primaryKey       = 'id';

    protected $useAutoIncrement = true;

    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;

    protected $allowedFields    = ['email', 'password', 'category', 'unit', 'comment'];

    protected $useTimestamps    = false;
}