<?php
namespace lastejas;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    use Notifiable;
    
    public $timestamp = true;
    protected $primaryKey = 'idUser';
    protected $table = 'Users';
    protected $fillable = [
        'nameUser', 'firstSurNameUser', 'secondSurNameUser', 'genderUser', 'dniUser', 'rucUser', 'addressUser', 'phoneUser', 'cellPhoneUser', 'email', 'birthdayUser', 'statusUser', 'nickNameUser', 'password', 'idDistrict'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}