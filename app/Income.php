<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'cents',
        'description'
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
