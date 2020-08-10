<?php

namespace App\Http\Controllers\Games;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ReturnOfWarrior;
use App\Models\Game;

class GameDetailsController extends Controller
{
    public function index(Request $request)
    {
        $returnofwarrior = ReturnOfWarrior::all();
        $pluck_level_range = ReturnOfWarrior::distinct('level_range')->pluck('level_range');
        return view ('game_details.returnofwarrior.index', compact('pluck_level_range', 'returnofwarrior'));
    }
}
