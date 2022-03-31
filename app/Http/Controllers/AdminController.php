<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Models\modell;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users(){
        return view('pages/admin/AdminUser', ['userItems' => User::where('admin',0)->get()]);
    }
    public function setAdmin($id) {
        $userItem = User::find($id);
        $userItem->admin = 1;
        $userItem->save();
        return redirect('/AdminUser');   
    }
    public function deleteUser($id) {
        $userItem = User::find($id);
        $userItem->delete();
        return redirect('/AdminUser');   
    }
    public function modellList(){
        return view('pages/admin/AdminModell', ['userItems' => modell::get()]);
    }
}
