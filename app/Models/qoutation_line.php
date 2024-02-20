<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qoutation_line extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function qoute_line()
    {
        return $this->hasMany(qoutation_line::class, 'id', 'qoute_batch');
    }
}
