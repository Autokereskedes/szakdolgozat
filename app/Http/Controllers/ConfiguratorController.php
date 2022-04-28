<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Models\modell;
use App\Models\Models\motor;
use App\Models\Models\rendelt_auto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfiguratorController extends Controller
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
  
  public function modell_rendez(Request $request){
    $q=$request->query('q');
    if($q){
        $modell = DB::table('modells')
        ->select('modell', 'alapár', 'kép', 'kivId', 'motor')
        ->where('modell', 'LIKE', $q.'%')
        ->distinct();
    }
    return response()->json($modell->get());
  }
  public function motor_listaz(Request $request){
    $q=$request->query('q');
    if($q){
        $motors = DB::table('motors')
        ->select('motor', 'üzemanyag', 'teljesítmény', 'váltó', 'sebességfokozat')
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
public function csomag_listaz(){
    $felszereless = DB::table('felszereles')
    ->select('felszerelesCsomag', 'tipus', 'leírás', 'ár')
    ->distinct()
    ->get();
    return  $felszereless;
}
public function hitel_listaz(){
    $hitels = DB::table('hitels')
    ->select('hazon', 'kezdőrészlet', 'futamidő', 'szorzó')
    ->distinct()
    ->where('hazon','not like','13')
    ->get();
    return  $hitels;
}
public function rendeles(Request $request){
    $rendA = new rendelt_auto();
    $rendA->modell = $request->modell;
    $rendA->felszerelesCsomag = $request->felszerelesCsomag;
    $rendA->userId = $request->FId;
    $rendA->fenyezes = $request->fényId;
    $rendA->belter = $request->beltérId;
    $rendA->összár = $request->összár;
    $rendA->hazon = $request->hazon;
    $rendA->státusz = $request->státusz;
    $rendA->save();
    return redirect('/rendeltAuto');
    }

public function rendeltAuto_listaz(Request $request){
    $q=$request->query('q');
    if($q){
        $rendelt = DB::table('rendelt_autos')
        ->select('rendazon','modell', 'felszerelesCsomag' , 'userId', 'fenyezes' , 'belter' , 'összár', 'hazon' , 'státusz')
        ->where('userId', 'LIKE', $q)
        ->distinct();
        }
    return response()->json($rendelt->get());
    }

    public function rendeltAuto_listaz_Admin(){
        $rendeltA = DB::table('rendelt_autos')
        ->select('rendazon','modell', 'felszerelesCsomag' , 'userId', 'fenyezes' , 'belter' , 'összár', 'hazon' , 'státusz')
        ->distinct()
        ->get();
        return  $rendeltA;
    }
    public function rendelesT(Request $request){
        $rendeltT = DB::table('rendelt_autos')
        ->select('rendazon')
        ->where('rendazon','LIKE', $request->rendazon);
        $rendeltT->delete();
        return redirect('/rendeltAuto');
        }
}