<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function lines_data()
    {
        return $this->belongsTo(line::class, 'line', 'id');
    }
    public function catogery_data()
    {
        return $this->belongsTo(catogery::class, 'catogery', 'id');
    }
    public function size_data()
    {
        return $this->belongsTo(size::class, 'size', 'id');
    }
    public function brand_data()
    {
        return $this->belongsTo(brand::class, 'brand', 'id');
    }
    public function type_data()
    {
        return $this->belongsTo(type::class, 'type', 'id');
    }
    public function qoute_line()
    {
        return $this->belongsTo(qoutation::class,'id','qoute');
    }
}
