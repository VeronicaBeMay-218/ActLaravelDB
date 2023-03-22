<?php

namespace App\Models;

use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;
  //voy a decir subject tiene muchos topics y luego debo decir la relacion inversa del topic al subject
    public function topics(): HasMany//esta relacion se llama topics
    {
        return $this->hasMany(Topic::class);}//retur de este modelo que apunta a topic class tiene muchos topicos
        //y voy a acceder a ellos a travez de topics
        //topics va regresar todos lo temas relacionados a el subject
}
