<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_details extends Model
{
    use HasFactory;
    protected $fillable = ['admin_email', 'admin_password'];
}
