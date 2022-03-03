<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Models\kivitel;
use Illuminate\Http\Request;

class ListazController extends Controller
{
    //

    public function index() {
        //return view('welcome', ['listItems' => ListItem::all()]);
        //return view('pages/configurator', ['listItems' => kivitel::all()]);
        //return view('welcome', ['listItems' => kivitel::where('befejezett',0)->get()]);
        return view('pages/configurator', ['listItems' => kivitel::get()]);

    }

    /*public function saveItem(Request $request) {
        // \Log::info(json_encode($request->all()));
        $newListItem = new kivitel;
        $newListItem->kivNev = $request->listItem;
        $newListItem->ajtóSzáma = $request->listItem;
        $newListItem->ülésSzáma = $request->listItem;
        $newListItem->save();
        // return view('welcome', ['listItems' => ListItem::all()]);
        return redirect('/model');
    }*/
}
