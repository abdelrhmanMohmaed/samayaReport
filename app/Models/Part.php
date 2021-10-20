<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $fillable = ['line_id', 'part_number', 'shift', 'type', 'scrapQty', 'active'];
    public function line()
    {
        return $this->belongsTo(Line::class);
    }
    //     {
    //         return $query->where('active', 1);
    //     }
    //     public function scopeActive($query)
}
