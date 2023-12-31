<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'dni',
        'name',
        'address',
        'email',
        'phone',
        'career_id',
        'removed'
    ];

    public function career(){
        return $this->belongsTo(Career::class);
    }
}
