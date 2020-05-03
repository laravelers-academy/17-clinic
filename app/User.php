<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // RELACIONES

        public function permissions()
        {
            return $this->belongsToMany('App\permission')->withTimestamps();
        }

        public function roles()
        {
            return $this->belongsToMany('App\Role')->withTimestamps();
        }
    
    // ALMACENAMIENTO

    // VALIDACIÓN
        
        public function is_admin()
        {
            $admin = config('app.admin_role');
            if($this->has_role($admin)){
                return true;
            }
            return false;
        }
    
        public function has_role($id)
        {
            foreach($this->roles as $role){
                if($role->id == $id || $role->slug == $id) return true;
            }
            return false;
        }

        public function has_permission($id)
        {
            foreach($this->permissions as $permission){
                if($permission->id == $id || $permission->slug == $id) return true;
            }
            return false;
        }

    // RECUPERACIÓN DE  INFORMACIÓN

    // OTRAS OPERACONES
}
