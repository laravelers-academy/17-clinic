<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
    	'name', 'slug', 'description'
    ];

    // RELACIONES

    	public function role()
    	{
    		return $this->belongsTo('App\Role');
    	}

    	public function users()
    	{
    		return $this->belongsToMany('App\User')->withTimestamps();
    	}

    // ALMACENAMIENTO

    // VALIDACIÓN

    // RECUPERACIÓN DE  INFORMACIÓN

    // OTRAS OPERACONES
}
