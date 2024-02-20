<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class line extends Model
{
    use HasFactory;
    protected $guarded = [];

        public function main_catog()
        {
            return $this->belongsTo(line::class, 'main_line', 'id');
        }
        public function child_lines()
        {
            return $this->hasMany(line::class, 'id', 'mina_line');
        }

}
// 'validator ' => 'json',

