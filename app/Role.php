<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
    	'name', 'slug', 'description'
    ];

    // RELACIONES

    	public function permissions()
    	{
    		return $this->hasMany('App\Permission');
    	}

    	public function users()
    	{
    		return $this->belongsToMany('App\User')->withTimestamps();
    	}

    // ALMACENAMIENTO

        public function store($request)
        {
            $slug = str_slug($request->name, '-');

            alert('Éxito','El rol se ha creado', 'success');

            return self::create($request->all() + [
                'slug' => $slug
            ]);
        }

        public function my_update($request)
        {
            $slug = str_slug($request->name, '-');

            alert('Éxito','El rol se ha actualizado', 'success');

            self::update($request->all() + [
                'slug' => $slug
            ]);
        }

    // VALIDACIÓN

    // RECUPERACIÓN DE  INFORMACIÓN

    // OTRAS OPERACONES


}
