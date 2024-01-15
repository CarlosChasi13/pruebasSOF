<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rolopcione extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'rolopciones';

    protected $fillable = ['nombre','descripcion'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rols()
    {
        return $this->hasMany('App\Models\Rol', 'id_rol', 'id');
    }
    
}
