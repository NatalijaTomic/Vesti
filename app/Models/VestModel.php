<?php

namespace App\Models;

use CodeIgniter\Model;

class VestModel extends Model
{
    protected $table      = 'vest';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $allowedFields = ['naslov', 'sadrzaj', 'autor', 'korime'];

}
?>