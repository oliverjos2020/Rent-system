<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    protected $fillable = [
        'name','email','phone','password','avatar'
    ];

    public $directory = "/images/";

    // public function getAvatarAttribute($value){

    //     return $this->directory . $value;

    // }

       public function getAvatarAttribute($value) {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return $this->directory . $value;
        //return asset('storage/app/' . $value);
        }

    public function SetPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function posts(){
        return $this->hasMany(post::class);
    }

    public function permissions(){

        return $this->belongsToMany(Permission::class);
    }

    public function roles(){

        return $this->belongsToMany(Role::class);
    }
    public function biodatas(){

        return $this->hasOne(Biodata::class);
    }
    public function carts(){

        return $this->hasMany(Cart::class);
    }
    public function inspections(){

        return $this->hasMany(Inspection::class);
    }

    public function userHasRole($role_name){

        foreach($this->roles as $role){
            if(Str::lower($role_name) == Str::lower($role->name))
            return true;
        }
        return false;
    }

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
}
