<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    //
    public function employer()
{
    return $this->belongsTo(User::class, 'employer_id');
}
}
