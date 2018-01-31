<?php

namespace App\Http\Controllers;


use App\Race;
use App\Weapon;
use App\Chuman;
use Illuminate\Http\Request;


class HerosController extends Controller
{
    function show(){
    	return view('heros.show');
    }

    function createView(){
    	$races = Race::where('category','hero')->pluck('name','id');
    	$classes = Chuman::pluck('name','id');
    	$weapons = Weapon::pluck('name','id');

    	return view('heros.create')->with(['races' => $races])->with(['weapons' => $weapons])->with(['classes' => $classes]);
    }

    function insertHero(Request $request){
        $this->validate($request, [
            'name' => 'required'
        ]);

    	return view('heros.show');
    }

    public function racesFilter(){
        $race_id = Input::get('race_id');
        dd($race_id);
        return Response::jason('heros.show');

    }
}
