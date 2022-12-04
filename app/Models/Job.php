<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'job_id',
        'job_title', 
        'job_description',
        'product_image',
        'apply',
        'status',
    ]; 

    public function getRouteKeyName(){
        return 'slug';
    }
}
