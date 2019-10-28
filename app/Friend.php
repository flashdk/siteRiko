<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable = [
        'name','domaine', 'description', 'img', 'facebookLink', 'tewtterLink', 'linkedLink'
    ];
}
