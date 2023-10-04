<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\RepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserRepository implements RepositoryInterface{
    protected $user = null;

    public function getAllUsers(){
        return User::all();
    }

    public function getUserById($id){
        return User::find($id);
    }

    public function createOrUpdate($id=null, $collection=[]){
        dd($collection);
        User::updateOrInsert($id, $collection);
    }

    public function deleteUser($id){
        $user = User::find($id);
        if($user){
            $user->delete();
        }
    }
}
