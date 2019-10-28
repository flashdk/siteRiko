<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomPost extends Model
{
    protected $fillable = [
        'title','presentBy', 'eventDate', 'attachment', 'description'
    ];
}
