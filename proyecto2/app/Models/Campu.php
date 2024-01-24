<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campu extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'campu';

    protected $fillable = ['Nombre','telefono','email','direccion','provincia','pais','maps_url'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nrcs()
    {
        return $this->hasMany('App\Models\Nrc', 'id_campus', 'id');
    }
    
}
