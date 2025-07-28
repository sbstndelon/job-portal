<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'location', 'salary_range', 'status',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
