<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Topic;
use App\Models\Nota;
use App\Models\Reminder;


class Subject extends Model
{
    use HasFactory;

    
    protected function carrera(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value)
        );
    }

    protected function carreraExtendida(): Attribute
    {
        return Attribute::make(
            get: function ($value, $attributes) {
                switch ($attributes['carrera']) {
                    case 'isc':
                        return 'Ingeniería en Sistemas Computacionales';
                        break;
                    case 'iem':
                        return 'Ingeniería Electromecánica';
                        break;
                    case 'ier':
                        return 'Ingeniería en Energías Renovables';
                        break;
                    case 'ii':
                        return 'Ingeniería Industrial';
                        break;
                    case 'ie':
                        return 'Ingeniería Electrónica';
                        break;
                }
            }
        );
    }

    public function topics(): HasMany//esta relacion se llama topics
    {
        return $this->hasMany(Topic::class);}//retur de este modelo que apunta a topic class tiene muchos topicos
        //y voy a acceder a ellos a travez de topics
        //topics va regresar todos lo temas relacionados a el subject


        public function reminders(): HasMany//esta relacion se llama topics
        {
            return $this->hasMany(Reminder::class);}//retur de este modelo que apunta a topic class tiene muchos topicos
            //y voy a acceder a ellos a travez de topics
            //topics va regresar todos lo temas relacionados a el subject
}