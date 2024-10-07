<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
        use HasFactory;
    protected $table = 'customer_tbl';
    protected $primaryKey = 'ID';

    // Define fillable fields
 protected $fillable = ['Name', 'Email', 'Phone', 'Experience','Rate', 'Category','Message','Status'];
}
