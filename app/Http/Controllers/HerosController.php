<?php

namespace App\Http\Controllers;


use App\Race;
use App\Weapon;
use App\Chuman;
use App\Hero;
use Illuminate\Http\Request;
use DB;


class HerosController extends Controller
{
    function show(){
        $data['heros'] = Hero::all();
        
    	return view('heros.show',$data);
    }

    function createView(){
    	$races = Race::where('category','hero')->pluck('name','id');
    	$classes = Chuman::where('name','hero')->pluck('name','id');
    	$weapons = Weapon::pluck('name','id');

    	return view('heros.create')->with(['races' => $races])->with(['weapons' => $weapons])->with(['classes' => $classes]);
        //return view('heros.create',compact($races));
    }

    function getHero($id){
        $data['heros'] = Hero::all()->find($id);
        $races = Race::where('category','hero')->pluck('name','id');
        return view('heros.edit',$data)->with(['races' => $races]);
    }

    public function heroDestroy($id){
        echo ($id);
        $hero=Hero::find($id);
        $hero->destroy($id);
        //return view('heros.show');
        $msg = 'Heroe Eliminado';
        return redirect()->back()->withSucces($msg);
    }

    function updateHero(Request $request,$id){

        if($request->races == 2 or $request->races == 5 or $request->races == 7){
            $this->validate($request,[
                'nameIn' => 'required',
                'strength' => 'required',
                'intelligence' => 'required',
                'dexterity' => 'required',
                'races' => 'required|not_in:0',
                'classes' => 'required|not_in:0',
                'weapons' => 'required|not_in:0'
            ]);
        }else{
            $this->validate($request,[
                'nameIn' => 'required',
                'lnameIn' => 'required',
                'strength' => 'required',
                'intelligence' => 'required',
                'dexterity' => 'required',
                'races' => 'required|not_in:0',
                'classes' => 'required|not_in:0',
                'weapons' => 'required|not_in:0'
            ]);
        }


        if($request->races == 2 or $request->races == 5 or $request->races == 7){
            $hero = [
                'name' => $request->nameIn,
                'last_name'=> ' ',
                'strength' => $request->strength,
                'intelligence' => $request->intelligence,
                'dexterity' => $request->dexterity,
                'race_id' => $request->races,
                'class_id' => $request->classes,
                'weapon_id' => $request->weapons,
                'level' => $request->level
            ];
        }else{

            $hero = [
                'name' => $request->nameIn,
                'last_name' => $request->lnameIn,
                'strength' => $request->strength,
                'intelligence' => $request->intelligence,
                'dexterity' => $request->dexterity,
                'race_id' => $request->races,
                'class_id' => $request->classes,
                'weapon_id' => $request->weapons,
                'level' => $request->level
            ];   
        }

        $update = Hero::find($id)->update($hero);

        $data['heros'] = Hero::all();
        
        return view('heros.show',$data);
    }

    function submitHeroForm(Request $request){
        if($request->submitbtn == 'create'){
            if($request->races == 2 or $request->races == 5 or $request->races == 7){
                $this->validate($request,[
                    'nameIn' => 'required',
                    'strength' => 'required',
                    'intelligence' => 'required',
                    'dexterity' => 'required',
                    'races' => 'required|not_in:0',
                    'classes' => 'required|not_in:0',
                    'weapons' => 'required|not_in:0'
                ]);
            }else{
                $this->validate($request,[
                    'nameIn' => 'required',
                    'lnameIn' => 'required',
                    'strength' => 'required',
                    'intelligence' => 'required',
                    'dexterity' => 'required',
                    'races' => 'required|not_in:0',
                    'classes' => 'required|not_in:0',
                    'weapons' => 'required|not_in:0'
                ]);
            }

            return $this->insertHero($request);
        }else{

            if($request->submitbtn == 'randomCreate'){
                return $this->randomCreate();
            }
        }
    }


    public function insertHero(Request $request){
        

        if($request->races == 2 or $request->races == 5 or $request->races == 7){
            $hero = [
                'name' => $request->nameIn,
                'last_name'=> ' ',
                'strength' => $request->strength,
                'intelligence' => $request->intelligence,
                'dexterity' => $request->dexterity,
                'race_id' => $request->races,
                'class_id' => $request->classes,
                'weapon_id' => $request->weapons,
                'level' => $request->level
            ];
        }else{

            $hero = [
                'name' => $request->nameIn,
                'last_name' => $request->lnameIn,
                'strength' => $request->strength,
                'intelligence' => $request->intelligence,
                'dexterity' => $request->dexterity,
                'race_id' => $request->races,
                'class_id' => $request->classes,
                'weapon_id' => $request->weapons,
                'level' => $request->level
            ];   
        }
        $save = Hero::insert($hero);
        return redirect('heros');
    }

    public function randomCreate(){
        $hero = Hero::find(4);
        $name['name']=$hero;
        
        
        $ran = $this->randomNumber('race',0);
        $SearchRace = Race::find($ran);
        $race['race']=$SearchRace;

        $ran =$this->randomNumber('class',$race['race']->id);
        $SearchClass = Chuman::find($ran);
        $chuman['chuman']=$SearchClass;

        $ran =$this->randomNumber('weapon',$chuman['chuman']->id);
        $SearchWeapon = Weapon::find($ran);
        $weapon['weapon']=$SearchWeapon;


        return view('heros.random', $name)->with($race)->with($chuman)->with($weapon);
    }

    public function randomNumber($table,$type){
        $ran = 8;

        if($table == 'race'){
           for($i=1;$i>0;$i++){
            $ran =rand(1,31);
            if($ran<7 or $ran>29)
                break;
            } 
        }else{
            if($table == 'class'){
                if($type == 1){    //GETTING A CLASS FOR HUMAN
                    $ran =rand(1,7);
                }else{

                    if($type == 2){ //GETTING A CLASS FOR ELF
                        for($i=1;$i>0;$i++){
                        $ran =rand(1,7);
                        if($ran!=6 and $ran!=1)
                            break;
                        }
                    }else{

                        if($type == 3){ //GETTING A CLASS FOR ELF
                            for($i=1;$i>0;$i++){
                            $ran =rand(1,7);
                            if($ran!=3 and $ran!=1)
                                break;
                            }
                        }else{

                            if($type == 4){ //GETTING A CLASS FOR ELF
                                for($i=1;$i>0;$i++){
                                $ran =rand(1,7);
                                if($ran!=2 and $ran!=4 and $ran!=1)
                                    break;
                                }
                            }else{
                                if($type == 5){ //GETTING A CLASS FOR ELF
                                    for($i=1;$i>0;$i++){
                                    $ran =rand(1,7);
                                    if($ran!=5 and $ran!=4 and $ran!=1)
                                        break;
                                    }
                                }else{
                                    if($type == 6){ //GETTING A CLASS FOR ELF
                                        for($i=1;$i>0;$i++){
                                        $ran =rand(1,7);
                                        if($ran!=1)
                                            break;
                                        }
                                    }else{
                                        if($type == 7){ //GETTING A CLASS FOR ELF
                                            for($i=1;$i>0;$i++){
                                            $ran =rand(1,7);
                                            if($ran!=1 and $ran!=5)
                                                break;
                                            }
                                        }else{
                                            if($type == 30){ //GETTING A CLASS FOR ELF
                                                for($i=1;$i>0;$i++){
                                                $ran =rand(1,7);
                                                if($ran!=3 and $ran!=1)
                                                    break;
                                                }
                                            }else{
                                                if($type == 31){ //GETTING A CLASS FOR ELF
                                                    for($i=1;$i>0;$i++){
                                                        $ran =rand(1,7);
                                                        if($ran!=3)
                                                            break;
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            if($table == 'weapon'){
                if($type == 1){
                    $ran=rand(1,2);
                }else{
                    if($type == 2){
                        for($i=1;$i>0;$i++){
                            $ran =rand(1,5);
                            if($ran==4 or $ran == 2)
                                break;
                        }
                    }else{
                        if($type == 3){
                            for($i=1;$i>0;$i++){
                                $ran =rand(1,5);
                                if($ran!=4 or $ran != 5)
                                    break;
                            }
                        }else{
                            if($type == 4){
                                for($i=1;$i>0;$i++){
                                    $ran =rand(1,5);
                                    if($ran==5 or $ran == 2)
                                        break;
                                }
                            }else{
                                if($type == 5){
                                    for($i=1;$i>0;$i++){
                                        $ran =rand(1,5);
                                        if($ran==5 or $ran == 2)
                                            break;
                                    }
                                }else{
                                    if($type == 6){
                                        $ran =rand(1,5);
                                    }else{
                                        if($type == 7){
                                            for($i=1;$i>0;$i++){
                                                $ran =rand(1,5);
                                                if($ran!=3)
                                                    break;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }

                }
            }
        }
        return $ran;
    }

    public function racesFilter(Request $request){
        $data = Chuman::all();
        if($request->id==1){
            $data = Chuman::all();
        }else{
            if($request->id==31){ //HALF ELVE
                $res = Chuman::all();
                $data = $res->except("3"); //NO BARBARIAN
            }else{
                if($request->id == 4){ //DWART
                    $res = Chuman::all();
                    $data = $res->except("1")->except("2")->except("4"); //NO PALADIN NO RANGER NO WIZARD
                }else{
                    if($request->id == 30){ //ELVES
                        $res = Chuman::all();
                        $data = $res->except("1")->except("3"); //NO PALADIN NO BARBARIAN
                        //$data = $res->except("3");
                    }else{
                        if($request->id == 3){ //HALFLINGS
                            $res = Chuman::all();
                            $data = $res->except("1")->except("3"); //NO PALADIN NO BARBARIAN
                            //$data = $res->except("3");
                        }else{
                            if($request->id == 5){ //HALFORCS
                                $res = Chuman::all();
                                $data = $res->except("1")->except("4")->except("5"); //NO PALADIN NO BARBARIAN NO CLERICS
                                //$data = $res->except("3");
                            }else{
                                if($request->id == 7){ //HALFLINGS
                                    $res = Chuman::all();
                                    $data = $res->except("1")->except("5"); //NO PALADIN NO CLERIC
                                    //$data = $res->except("3");
                                }else{
                                    if($request->id == 2){ //HALFLINGS
                                        $res = Chuman::all();
                                        $data = $res->except("1")->except("6"); //NO PALADIN NO WARRIORS
                                        //$data = $res->except("3");
                                    }else{
                                        if($request->id == 6){ //HALFLINGS
                                            $res = Chuman::all();
                                            $data = $res->except("1"); //NO PALADIN
                                            //$data = $res->except("3");
                                        }
                                    }

                                }
                            }   
                        }
                    }
                }
            }
        }
        return response()->json($data);
    }


    function classFilter(Request $request){
        $data = Weapon::all();

        if($request->id == 1){                      //PALADIN
            $data = Weapon::all()->except("3")->except("4")->except("5"); //ONLY SWORD
        }else{
            if ($request->id == 2) {                //RANGER
                $data = Weapon::all()->except("3")->except("1")->except("5"); //ONLY BOW AND ARROW
            }else{
                if ($request->id == 3) {                //BARBARIAN
                    $data = Weapon::all()->except("4")->except("5"); //NO BOW AND ARROW NO STAFF
                }else{
                    if ($request->id == 4) {                //WIZARD
                        $data = Weapon::all()->except("1")->except("3")->except("4"); // ONLY STAFF
                    }else{
                        if ($request->id == 5) {                //CLERICS
                            $data = Weapon::all()->except("1")->except("3")->except("4"); // ONLY STAFF
                        }else{
                            if ($request->id == 7) {                //THIEVES
                                $data = Weapon::all()->except("3"); // NO HAMMER
                            }
                        }
                    }
                }
            }
        }

        return response()->json($data);
    }


//$data=Product::select('productname','id')->where('prod_cat_id',$request->id)->take(100)->get();
  //      return response()->json($data);//then sent this data to ajax success

}
