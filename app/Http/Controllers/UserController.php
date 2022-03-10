<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('/dashboard', ['userItems' => User::where('admin',0)->get()]);
    }
    public function setAdmin($id) {
        $userItem = User::find($id);
        $userItem->admin = 1;
        $userItem->save();
        return redirect('/dashboard');   
    }
}
