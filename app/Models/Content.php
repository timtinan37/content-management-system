<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = 
    [
		'title',
		'attachment',
		'description',
		'type',
		'section',
		'is_published',
    ];
}
