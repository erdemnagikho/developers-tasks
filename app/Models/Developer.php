<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = [
        'dev',
        'difficulty',
        'total_hour',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'dev_id', 'id');
    }
}
