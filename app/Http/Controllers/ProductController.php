<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(){
        return view('anime')
        ->with('anime1', 'SOLO LEVELING')
        ->with('anime2', 'DELICIOUS IN DUNGEON')
        ->with('anime3', 'URUSEI YATSURA SEASON 2')
        ->with('anime4', 'BLUE EXORCIST: SHIMANE ILLUMINATI SAGA')
        ->with('anime5', 'METALLIC ROUGE')
        ->with('anime6', 'THE WITCH AND THE BEAST')
        ->with('anime7', 'BUCCHIGIRI?!')
        ->with('anime8', 'NINJA KAMUI')
        ->with('anime9', 'RICK AND MORTY: THE ANIME');

    }
}
