<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\RepositoryInterface;
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
}
