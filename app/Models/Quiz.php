<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'option1', 'option2', 'option3', 'option4', 'selected', 'user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
