<?php


namespace App\Models;

use \Core\Model;

class Students extends Model
{
protected $table = 'student';
protected $primaryKey = 'idStudent';
public $timestamps = false;


}