<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Models\modell;
use App\Models\Models\motor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModellController extends Controller
{
    public function index(){
        return view('modell.index');
        
    }

  public function modell_listaz(){
      $modells = DB::table('modells')
      ->select('modell', 'alapár', 'kép', 'kivId', 'motor')
      ->distinct()
      ->get();
      return  $modells;
  }
  public function motor_listaz(Request $request){
    $q=$request->query('q');
    if($q){
        $motors = DB::table('motors')
        ->select('motor', 'üzemanyag', 'teljesítmény', 'váltó', 'sebességfokozat', 'kép')
        ->where('motor', 'LIKE', $q)
        ->distinct();
    }
    return response()->json($motors->get());
}
public function color_listaz(){
    $colors = DB::table('fenyezes')
    ->select('fényId', 'szin', 'ár', 'kép')
    ->distinct()
    ->get();
    return  $colors;
}
public function interior_listaz(){
    $interiors = DB::table('belters')
    ->select('beltérId', 'szin', 'anyag', 'ár', 'kép')
    ->distinct()
    ->get();
    return  $interiors;
}
}
