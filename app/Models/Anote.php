<?php

namespace App\Models;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anote extends Model
{
    use HasFactory;

    public function users(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    
    public function topics(): belongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}
