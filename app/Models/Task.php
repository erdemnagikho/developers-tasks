<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'difficulty',
        'estimated_duration',
        'dev_id'
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class, 'dev_id', 'id');
    }
}
