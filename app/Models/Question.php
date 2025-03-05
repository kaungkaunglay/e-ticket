<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions'; 
    protected $fillable = [
        'support_category', 
        'description',
    ];

   
    public function category()
    {
        return $this->belongsTo(Support::class, 'support_category');
    }
}
