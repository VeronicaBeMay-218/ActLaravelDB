<?php

namespace App\Models;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Topic extends Model
{
    use HasFactory;

    //belongTo por que este es el que le pertenece al otro
//subject tiene 1 topico ---notas muchas hasmany
public function subjects(): belongsTo
{
    return $this->belongsTo(Subject::class);
}


public function notes(): HasMany//esta relacion se llama topics
{
    return $this->hasMany(Note::class);}//retur de este modelo que apunta a topic class tiene muchos topicos
    //y voy a acceder a ellos a travez de topics
    //topics va regresar todos lo temas relacionados a el subject

}