<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catogery extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function main()
    {
        return $this->belongsTo(catogery::class, 'main_catogery', 'id');
    }
    public function child()
    {
        return $this->hasMany( catogery::class, 'id', 'catogery');
    }
    public function lines()
    {
        return $this->belongsTo(line::class, 'line', 'id');
    }
}
