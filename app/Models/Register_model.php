<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register_model extends Model
{
    use HasFactory;
    protected $table='_vivregistrationemployee';
    protected $fillable=[
    'f_name',
    'm_name',
    'l_name',
    'employee_code',
    'updated_date'
];
}
