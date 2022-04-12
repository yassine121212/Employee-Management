<?php

namespace App\Models;
use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $fillable =
    [
        "nom_dep","heure_debut", "heure_fin","jour_repo", "even" 
    ];

/*protected $guarded = [];*/
            
public function employes(){
    return $this->hasMany(Employe::class,'depart_id');
}

    
}
