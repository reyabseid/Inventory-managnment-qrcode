<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventorie extends Model
{

    protected $fillable = ['name','inventorieTypeId', 'type', 'movable', 'returnable', 'shelfId', 'unit', 'count', 'status']; 
    use HasFactory;
}
