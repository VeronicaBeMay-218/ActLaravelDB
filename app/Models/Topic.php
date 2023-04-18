<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Nota;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Topic extends Model
{
    use HasFactory;

    //belongTo por que este es el que le pertenece al otro
//subject tiene 1 topico ---notas muchas hasmany
public function subject(): BelongsTo
{
    return $this->belongsTo(Subject::class);
}

public function notas(): HasMany//esta relacion se llama topics
    {
        return $this->hasMany(Nota::class);
    }//retur de este modelo que apunta a topic class tiene muchos topicos
        //y voy a acceder a ellos a travez de topics
        //topics va regresar todos lo temas relacionados a el subject


//public function anotes(): HasMany//esta relacion se llama topics
//{
   // return $this->hasMany(Anote::class);

//}//retur de este modelo que apunta a topic class tiene muchos topicos
    //y voy a acceder a ellos a travez de topics
    //topics va regresar todos lo temas relacionados a el subject
}
