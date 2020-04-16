<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
    	'name', 'slug', 'role_id', 'description'
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
        
        public function store($request)
        {
            $slug = str_slug($request->name, '-');

            alert('Éxito','El permiso se ha creado', 'success');

            return self::create($request->all() + [
                'slug' => $slug
            ]);
        }

        public function my_update($request)
        {
            $slug = str_slug($request->name, '-');

            alert('Éxito','El permiso se ha actualizado', 'success');

            self::update($request->all() + [
                'slug' => $slug
            ]);
        }

    // VALIDACIÓN

    // RECUPERACIÓN DE  INFORMACIÓN

    // OTRAS OPERACONES
}
