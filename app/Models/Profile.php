<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['title', 'description', 'url', 'image'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
