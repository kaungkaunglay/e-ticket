<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $table = 'supports'; 

    protected $fillable = ['title']; 

    public function questions()
    {
        return $this->hasMany(Question::class, 'support_category', 'id'); 
    }
}