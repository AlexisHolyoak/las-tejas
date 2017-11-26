<?php
namespace lastejas;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use lastejas\Role;
use DB;

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

    public function userroles(){
        return $this->hasMany(UserRole::class,'idUser');
    }
    public function hasRole(array $roles){
        $nameRoles = array();
        foreach ($this->userroles as $r) {
            if($r->statusUserRole==1){
                $roleUser = Role::where('idRole',$r->idRole)->select('nameRole')->first()->nameRole;
                foreach ($roles as $role) {
                    if($roleUser==$role){
                        return true;
                    }
                }
            }
        }
        return false;
    }
}
