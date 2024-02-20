<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qoutation_batch extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function qoute_lines()
    {
        return $this->belongsTo(qoutation_line::class, 'qoute_batch', 'id');
    }
}
