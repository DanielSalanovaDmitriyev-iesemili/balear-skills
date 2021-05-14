<?php

namespace App\Http\Controllers;

use App\Models\Space;
use App\Models\SpaceType;
use Illuminate\Http\Request;

class SpaceTypeController extends Controller
{
    public function index () {
        $types = SpaceType::all();
        return view('tables.type', compact('types'));
    }
    public function create () {
        return view('create.type');
    }

    public function store (Request $request) {
        $type = new SpaceType;
        $type->title = $request->title;
        $type->save();
        return redirect()->route('index.type');
    }

    public function delete ($id){
        $type = SpaceType::where('id',$id);
        $type->delete();
        return redirect()->route('index.type');
    } 
}
