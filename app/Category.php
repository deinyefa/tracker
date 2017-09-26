<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function income() {
        return $this->hasMany('App\Income');
    }

    public function expense() {
        return $this->hasMany('App\Expense');
    }
}
