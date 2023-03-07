<?php

namespace App\Models;

use CodeIgniter\Model;

class AutorModel extends Model
{
    protected $table      = 'autor';
    protected $primaryKey = 'korime';

    protected $useAutoIncrement = false;

    protected $returnType     = 'object';
    protected $allowedFields = ['naslov', 'sadrzaj'];

}
?>