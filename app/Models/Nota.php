<?php

namespace App\Models;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nota extends Model
{
    use HasFactory;


    protected function resumen(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst(strtolower($value)),
            set: fn (string $value) => strtolower($value),
        );
    }

    protected function palabrasClave(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtolower($value),
           
        );
    }

    protected function palabrasClaveArray(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtolower($value),
           
        );
    }



    

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    
    public function topic(): BelongsTo
    {
        return $this->belongsTo(Topic::class);
    }
}
