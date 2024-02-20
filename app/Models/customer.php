<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function scopeName($query,$name)
    {
        return $query->Where('name', 'like', '%' . $name. '%');
    }
}
