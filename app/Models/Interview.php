<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mockery\Generator\StringManipulation\Pass\RemoveUnserializeForInternalSerializableClassesPass;

class Interview extends Model
{
    //
    use HasFactory;
    protected $table = 'interviews';
    protected $fillable = [
        'scheduled_at',
        'method',
        'message',

    ];

}
