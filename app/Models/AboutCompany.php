<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompany extends Model
{
    use HasFactory;
    protected $table='about_companies';
    protected $fillable=[
        'name',
        'phone',
        'email',
        'about', 
         'logo',
        'previous_projects'
    ];

}
