<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qoutation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function qoute_batch()
    {
        return $this->hasMany(qoutation_batch::class, 'id', 'qoute');
    }

}
