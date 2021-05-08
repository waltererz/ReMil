<?php
namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model {
    protected $table            = 'comments';
    protected $primaryKey       = 'id';

    protected $useAutoIncrement = true;

    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;

    protected $allowedFields    = ['email', 'password', 'category', 'unit', 'subject', 'comment'];

    protected $useTimestamps    = false;
}