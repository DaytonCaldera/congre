<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    use HasFactory;
    protected $table = 'privilegios';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
