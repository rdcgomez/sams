<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_number', 
        'role_id', 
        'username',
        'name', 
        'email', 
        'password',
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
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    } 



    
    public function isStudent(){

      if($this->role->role_name == "student"){

          return true;
      } 
      return false;
      
    }

    public function isTeacher(){

      if($this->role->role_name == "teacher"){

          return true;
      } 
      return false;
      
    }

    public function isDO(){

      if($this->role->role_name == "discipline officer"){

          return true;
      } 
      return false;
      
    }

    public function isGC(){

      if($this->role->role_name == "guidance counselor"){

          return true;
      } 
      return false;
      
    }

    public function isSE(){

      if($this->role->role_name == "school employee"){

          return true;
      } 
      return false;
      
    }


}
