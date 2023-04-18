<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Nota;

use App\Models\Reminder;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'matricula',
        'carrera',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function notas(): HasMany//esta relacion se llama topics
    {
        return $this->hasMany(Nota::class);}//retur de este modelo que apunta a topic class tiene muchos topicos
        //y voy a acceder a ellos a travez de topics
        //topics va regresar todos lo temas relacionados a el subject

        public function reminders(): HasMany//esta relacion se llama topics
        {
            return $this->hasMany(Reminder::class);}//retur de este modelo que apunta a topic class tiene muchos topicos
            //y voy a acceder a ellos a travez de topics
            //topics va regresar todos lo temas relacionados a el subject
}
