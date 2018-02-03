<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Race;
use App\Power;
use App\Monster;


class MonstersController extends Controller
{
    function show(){
    	

    	$data['monsters'] = Monster::all();
        
    	return view('monsters.show',$data);
    }


    function createView(){
    	$races = Race::where('category','monster')->pluck('name','id');

    	return view('monsters.create')->with(['races' => $races]);
        //return view('heros.create',compact($races));
    }


    public function racesFilter(Request $request){
        $data = Power::all();
        
        return response()->json($data);
    }



    function submitMonsterForm(Request $request){

    	//dd($request);

        if($request->submitbtn == 'create'){

            return $this->insertMonster($request);
        }else{

            if($request->submitbtn == 'randomCreate'){
                return $this->randomCreate();
            }
        }
    }

    public function insertMonster(Request $request){
    	//dd($request);
        $monster = [
            'name' => $request->nameIn,
            'strength' => $request->strength,
            'intelligence' => $request->intelligence,
            'dexterity' => $request->dexterity,
            'race_id' => $request->races,
            'level' => $request->level,
            'abillities' => $request->checked
        ];
        $save = Monster::insert($monster);
        return redirect('monsters');
    }


    public function monsterDestroy($id){
        $monster=Monster::find($id);
        $monster->destroy($id);
        //return view('heros.show');
        return redirect()->back();
    }

	function getMonster($id){
        $data['monsters'] = Monster::all()->find($id);
        return view('monsters.edit',$data);
    }

}
