<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;
  protected $table = 'job'; // <-- তোমার database table name
    protected $fillable = ['name','description']; // যেই columnগুলো আছে
}


