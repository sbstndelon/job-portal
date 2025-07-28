<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'resume', 'job_id',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
