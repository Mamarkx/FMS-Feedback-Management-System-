<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
        use HasFactory;
            protected $table = 'profile_tbl';
    protected $primaryKey = 'ID';
 
    // Define fillable fields
 protected $fillable = ['Fname', 'Lname', 'Email', 'Phone','Password', 'Image'];
}
