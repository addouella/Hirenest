<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    // protected $table = 'applications_table';
    protected $fillable = [
        'user_id',
        'job_id',
        'message',
        'cover_letter',
        'fullname',
        'date_of_birth',
    ];
}
