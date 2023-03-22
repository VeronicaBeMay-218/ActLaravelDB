<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
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
