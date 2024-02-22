<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Provincium
 *
 * @property int $id
 * @property string $nombre
 *
 * @property Collection|Sede[] $sedes
 *
 * @package App\Models
 */
class Provincia extends Model
{
	protected $table = 'provincia';
	public $timestamps = false;

	protected $fillable = [
		'nombre'
	];

	public function sedes()
	{
		return $this->hasMany(Sede::class, 'id_provincia');
	}
}
