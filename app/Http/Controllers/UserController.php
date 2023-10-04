<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\RepositoryInterface;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public $user;
    public function __construct(RepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function showUsers(){
        $users = $this->user->getAllUsers();
        return view('users', compact('users'));
    }

    public function showUser($id){
        $user = $this->user->getUserById($id);
        return view('user-details', compact('user'));
    }

    public function createUser(){
        return view('user-create');
    }

    public function storeUser(Request $request){
        // DB::table('users')->insert([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'address' => $request->address
        // ]);
        $this->user->createOrUpdate(null, $request);
        return redirect()->route('users.list');
    }

    public function updateUser(){

    }

    public function deleteIndividualUser($id){
        $this->user->deleteUser($id);
        return redirect()->route('users.list');
    }

}
