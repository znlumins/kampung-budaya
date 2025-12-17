<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        // LOGIKA BARU:
        // 1. inRandomOrder() -> Acak urutan
        // 2. take(3) -> Hanya ambil 3 soal
        $games = Game::inRandomOrder()->take(3)->get();

        $formattedQuestions = $games->map(function ($game) {
            
            $correctOptionKey = 'option_' . $game->correct_answer;
            $correctText = $game->$correctOptionKey;

            return [
                'id' => $game->id,
                'image' => $game->image 
                            ? asset('storage/' . $game->image) 
                            : "https://i.ibb.co/RTLTrZ5k/ABY-5923-1.png",
                'text' => $game->question,
                'options' => [
                    $game->option_a,
                    $game->option_b,
                    $game->option_c,
                    $game->option_d
                ],
                'answer' => $correctText 
            ];
        });

        return view('game', ['questions' => $formattedQuestions]);
    }
}