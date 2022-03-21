<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Models\modell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModellController extends Controller
{
    public function index(){
        return view('modell.index');
    }

  public function modell_listaz(){
      $modells = DB::table('modells')
      ->select('modell', 'alapár', 'kép')
      ->distinct()
      ->get();
      return  $modells;
  }
}
