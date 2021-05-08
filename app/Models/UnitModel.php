<?php
namespace App\Models;

use CodeIgniter\Model;

class UnitModel extends Model {
    protected $table            = 'units';
    protected $primaryKey       = 'id';

    protected $useAutoIncrement = true;

    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;

    protected $allowedFields    = ['unit'];

    protected $useTimestamps    = false;
}