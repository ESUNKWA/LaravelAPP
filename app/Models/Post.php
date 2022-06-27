<?php

namespace App\Models;

use App\Models\Commentaires;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['r_libelle','r_etat','r_description'];
    protected $table = 't_posts';

    public function Commentaires(){
        return $this->hasMany(Commentaires::class);
    }
}
