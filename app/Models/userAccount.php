<?php

namespace App\Models;

use CodeIgniter\Model;

class userAccount extends Model
{
    protected $table    ='users';
    protected $primaryKey = 'id';
    protected $createdField  = 'dtc';

}