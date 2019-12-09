<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id','nama','hp','email'
    ];
}
