<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;
    protected $table = 'jobs';

    protected $fillable = [

        'id',
        'name',
        'vacants',
        'date-start',
        'date-end',
        'wage',
        'description',

    ];

}
