<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Space;
use Illuminate\Support\Facades\Auth;

class SpaceController extends Controller
{
    public function index () {
        $spaces = Space::orderBy('created_at', 'ASC')->paginate(2);
        $destacados = Space::where('destacado',1)->get();
        return view('layouts.content', compact('spaces', 'destacados'));
    }

    public function show(Space $space) {
        return view('details', compact('space'));
    }

    public function comment (Request $request, Space $space) {
        $id = $space->id;
        $space->user()->attach(['user_id' => Auth::user()->id, 'space_id' => $id, 'comment' => $request->comment]);
    }
}
