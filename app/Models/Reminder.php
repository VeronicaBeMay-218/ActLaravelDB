<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\Subject;
use App\Models\User;
use Carbon\Carbon;

class Reminder extends Model
{
    use HasFactory;


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }



    public $timestamps = false;

    protected $fillable = ['mensaje', 'categoria', 'importancia', 'fecha', 'destacado', 'completado', 'user_id', 'subject_id', ];

    protected function title(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucfirst($value),

            set: fn($value) => strtolower($value)
        );
    }

    protected function content(): Attribute
    {
        return new Attribute(
            get: fn($value) => ucfirst($value),

            set: fn($value) => strtolower($value)
        );
    }

      protected function value(): Attribute
    {
        return new Attribute(
            get: function($value){
                switch ($value) {
                    case 1:
                        return 'Muy importante';
                    case 2:
                        return 'Importante';
                    case 3:
                        return 'Regular';
                    case 4:
                        return 'No importante';
                    // Agrega más casos para más valores numéricos
                    default:
                        return 'desconocido';
                }
            },

            set: fn($value) => $value
        );
    }

    public function getEventDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->locale('es')->isoFormat('DD/MMM/YYYY') : null;
    }
}
