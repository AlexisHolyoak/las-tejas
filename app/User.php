<?php

namespace lastejas;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = true;
    protected $table = 'Users';
    protected $primaryKey = 'idUser';
    protected $fillable = [
        'nameUser',
        'firstSurNameUser',
        'secondSurNameUser',
        'genderUser',
        'dniUser',
        'rucUser',
        'addressUser',
        'phoneUser',
        'cellPhoneUser',
        'email',
        'birthdayUser',
        'statusUser',
        'nickNameUser',
        'password',
        'idDistrict'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*public function district(){
        return $this->hasOne('lastejas\Distric', 'id');
    }
    public function userroles(){
        return $this->hasMany('lastejas\UserRole');
    }*/
}
