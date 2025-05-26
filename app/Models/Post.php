<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class Post extends Model
{
    use HasFactory;
    //
    public function user()
{
    return $this->belongsTo(User::class);
}
// nom au pluriel car un message peut regrouper plusieurs commentaires
// cardinalité 0,n
    public function comments()
{
    return $this->hasMany(Comment::class);
}

}
