<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;
use App\Services\Guess;

class GameController extends Controller
{

    public function new(){
        $game = new Game;
        $game->number = rand(0, 100);
        $game->save();

        return response()->json(array('game_id' => $game->id));
    }

    public function guess(Request $request, $game_id){

        $game = Game::findOrFail($game_id);

        $guess = new Guess($request->input('guess'), $game->number);

        return response()->json(array(
            'message' => $guess->get_message(),
            'game_id' => $game_id
        ));

    }

}
