<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'image'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(User::class);
    }
}