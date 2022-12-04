<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'author_id',
        'title',
        'slug', 
        'excerpt',
        'body'
    ]; 

    public function getRouteKeyName(){
        return 'slug';
    }
}
