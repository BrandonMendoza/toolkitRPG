@extends('layouts.app')

@section('content')
	<h1>Create Monster</h1>
	<style type="text/css">
.pixel{
    height: 20px;
    width: 20px;
    border-style: solid;
    border-width: .1px;
    border-color: black;
    background-color: white;
}

#color1{
height: 20px;
    width: 20px;
    border-style: solid;
    border-width: .1px;
    border-color: black;
    background-color: red;
}
#color2{
	height: 20px;
    width: 20px;
    background-color: yellow;
}
#color3{
	height: 20px;
    width: 20px;
    background-color: black;
}
#color4{
	height: 20px;
    width: 20px;
    border-style: solid;
    border-width: .1px;
    border-color: black;
    background-color: white;
}
</style>
	
	
	<form class="form-group" id="formCreate" method="POST" action="{{route('insertMonster')}}">
		
		{{csrf_field()}}
		<div class="form-group row" id="monsterPhoto">
			<div class="row">
				<div id="pixel11" class="col-xs-2 pixel" onclick="paintPixel('pixel11')"></div>
				<div id="pixel12" class="col-xs-2 pixel" onclick="paintPixel('pixel12')"></div>
				<div id="pixel13" class="col-xs-2 pixel" onclick="paintPixel('pixel13')"></div>
				<div id="pixel14" class="col-xs-2 pixel" onclick="paintPixel('pixel14')"></div>
				<div id="pixel15" class="col-xs-2 pixel" onclick="paintPixel('pixel15')"></div>
				<div id="pixel16" class="col-xs-2 pixel" onclick="paintPixel('pixel16')"></div>
				<div id="pixel17" class="col-xs-2 pixel" onclick="paintPixel('pixel17')"></div>
				<div id="pixel18" class="col-xs-2 pixel" onclick="paintPixel('pixel18')"></div>
			</div>
			<div class="row">
				<div id="pixel21" class="col-xs-2 pixel" onclick="paintPixel('pixel21')"></div>
				<div id="pixel22" class="col-xs-2 pixel" onclick="paintPixel('pixel22')"></div>
				<div id="pixel23" class="col-xs-2 pixel" onclick="paintPixel('pixel23')"></div>
				<div id="pixel24" class="col-xs-2 pixel" onclick="paintPixel('pixel24')"></div>
				<div id="pixel25" class="col-xs-2 pixel" onclick="paintPixel('pixel25')"></div>
				<div id="pixel26" class="col-xs-2 pixel" onclick="paintPixel('pixel26')"></div>
				<div id="pixel27" class="col-xs-2 pixel" onclick="paintPixel('pixel27')"></div>
				<div id="pixel28" class="col-xs-2 pixel" onclick="paintPixel('pixel28')"></div>
			</div>
			<div class="row">
				<div id="pixel31" class="col-xs-2 pixel" onclick="paintPixel('pixel31')"></div>
				<div id="pixel32" class="col-xs-2 pixel" onclick="paintPixel('pixel32')"></div>
				<div id="pixel33" class="col-xs-2 pixel" onclick="paintPixel('pixel33')"></div>
				<div id="pixel34" class="col-xs-2 pixel" onclick="paintPixel('pixel34')"></div>
				<div id="pixel35" class="col-xs-2 pixel" onclick="paintPixel('pixel35')"></div>
				<div id="pixel36" class="col-xs-2 pixel" onclick="paintPixel('pixel36'"></div>
				<div id="pixel37" class="col-xs-2 pixel" onclick="paintPixel('pixel37')"></div>
				<div id="pixel38" class="col-xs-2 pixel" onclick="paintPixel('pixel38')"></div>
			</div>
			<div class="row">
				<div id="pixel41" class="col-xs-2 pixel" onclick="paintPixel('pixel41')"></div>
				<div id="pixel42" class="col-xs-2 pixel" onclick="paintPixel('pixel42')"></div>
				<div id="pixel43" class="col-xs-2 pixel" onclick="paintPixel('pixel43')"></div>
				<div id="pixel44" class="col-xs-2 pixel" onclick="paintPixel('pixel44')"></div>
				<div id="pixel45" class="col-xs-2 pixel" onclick="paintPixel('pixel45')"></div>
				<div id="pixel46" class="col-xs-2 pixel" onclick="paintPixel('pixel46')"></div>
				<div id="pixel47" class="col-xs-2 pixel" onclick="paintPixel('pixel47')"></div>
				<div id="pixel48" class="col-xs-2 pixel" onclick="paintPixel('pixel48')"></div>
			</div>
			<div class="row">
				<div id="pixel51" class="col-xs-2 pixel" onclick="paintPixel('pixel51')"></div>
				<div id="pixel52" class="col-xs-2 pixel" onclick="paintPixel('pixel52')"></div>
				<div id="pixel53" class="col-xs-2 pixel" onclick="paintPixel('pixel53')"></div>
				<div id="pixel54" class="col-xs-2 pixel" onclick="paintPixel('pixel54')"></div>
				<div id="pixel55" class="col-xs-2 pixel" onclick="paintPixel('pixel55')"></div>
				<div id="pixel56" class="col-xs-2 pixel" onclick="paintPixel('pixel56')"></div>
				<div id="pixel57" class="col-xs-2 pixel" onclick="paintPixel('pixel57')"></div>
				<div id="pixel58" class="col-xs-2 pixel" onclick="paintPixel('pixel58')"></div>
			</div>
			<div class="row">
				<div id="pixel61" class="col-xs-2 pixel" onclick="paintPixel('pixel61')"></div>
				<div id="pixel62" class="col-xs-2 pixel" onclick="paintPixel('pixel62')"></div>
				<div id="pixel63" class="col-xs-2 pixel" onclick="paintPixel('pixel63')"></div>
				<div id="pixel64" class="col-xs-2 pixel" onclick="paintPixel('pixel64')"></div>
				<div id="pixel65" class="col-xs-2 pixel" onclick="paintPixel('pixel65')"></div>
				<div id="pixel66" class="col-xs-2 pixel" onclick="paintPixel('pixel66')"></div>
				<div id="pixel67" class="col-xs-2 pixel" onclick="paintPixel('pixel67')"></div>
				<div id="pixel68" class="col-xs-2 pixel" onclick="paintPixel('pixel68')"></div>
			</div>
			<div class="row">
				<div id="pixel71" class="col-xs-2 pixel" onclick="paintPixel('pixel71')"></div>
				<div id="pixel72" class="col-xs-2 pixel" onclick="paintPixel('pixel72')"></div>
				<div id="pixel73" class="col-xs-2 pixel" onclick="paintPixel('pixel73')"></div>
				<div id="pixel74" class="col-xs-2 pixel" onclick="paintPixel('pixel74')"></div>
				<div id="pixel75" class="col-xs-2 pixel" onclick="paintPixel('pixel75')"></div>
				<div id="pixel76" class="col-xs-2 pixel" onclick="paintPixel('pixel76')"></div>
				<div id="pixel77" class="col-xs-2 pixel" onclick="paintPixel('pixel77')"></div>
				<div id="pixel78" class="col-xs-2 pixel" onclick="paintPixel('pixel78')"></div>
			</div>
			<div class="row">
				<div id="pixel81" class="col-xs-2 pixel" onclick="paintPixel('pixel81')"></div>
				<div id="pixel82" class="col-xs-2 pixel" onclick="paintPixel('pixel82')"></div>
				<div id="pixel83" class="col-xs-2 pixel" onclick="paintPixel('pixel83')"></div>
				<div id="pixel84" class="col-xs-2 pixel" onclick="paintPixel('pixel84')"></div>
				<div id="pixel85" class="col-xs-2 pixel" onclick="paintPixel('pixel85')"></div>
				<div id="pixel86" class="col-xs-2 pixel" onclick="paintPixel('pixel86')"></div>
				<div id="pixel87" class="col-xs-2 pixel" onclick="paintPixel('pixel87')"></div>
				<div id="pixel88" class="col-xs-2 pixel" onclick="paintPixel('pixel88')"></div>
			</div>

		</div>

		<div class="form-group">
			<div class="row">
				<div id="color1" class="col-xs-2" onclick="colorChange(1)"></div>
				<div id="color2" class="col-xs-2" onclick="colorChange(2)"></div>
				<div id="color3" class="col-xs-2" onclick="colorChange(3)"></div>
				<div id="color4" class="col-xs-2" onclick="colorChange(4)"></div>
			</div>
		</div>
		
		

		<div class="form-group row" >
			<label class="col-2 col-form-label">Race: </label>
		    <select class="form-control" style="width: 200px" id="races" name="races">

		        <option value="0" disabled="true" selected="true">-Select-</option>
		        @foreach($races as $idr => $race )
					<option value="{{ $idr }}">{{ $race }}</option>
				@endforeach

		    </select>
		    @if($errors->any())
		    	@foreach($errors->get('races') as $error)
					<div>{{ $error }}</div>
		    	@endforeach
		    @endif

		    
			<label class="col-2 col-form-label">Abillities: </label>
	       	<div class="col-lg-12">
	     		<div class="button-group">
	        		<button type="button" class="col-2 btn btn-default dropdown-toggle" data-toggle="dropdown" disabled="true" id="drop">Select abillities<span class="caret"></span></button>
					<ul class="dropdown-menu" id="dropdown-Menu">


						<li class="shadow"><a href="#" class="small" data-value="1" tabIndex="-1" class="shadow"><input type="checkbox" class="checkbox" id="shadow" value="1" />shadow ball</a></li>
						<li class="aerial"><a href="#" class="small" data-value="2" tabIndex="-1" class="aerial"><input type="checkbox" class="aerial checkbox"/>aerial ace</a></li>
						<li class="giga"><a href="#" class="small" data-value="3" tabIndex="-1" class="giga"><input type="checkbox" class="checkbox"/>giga drain</a></li>
						<li class="thunderbolt"><a href="#" class="small" data-value="4" tabIndex="-1" class="thunderbolt checkbox"><input type="checkbox" class="thunderbolt"/>thunderbolt</a></li>
						<li class="earthquake"><a href="#" class="small" data-value="5" tabIndex="-1" class= checkbox"earthquake"><input type="checkbox" class="earthquake"/>earthquake</a></li>
						<li class="crunch"><a href="#" class="small" data-value="6" tabIndex="-1" class="crunch checkbox"><input type="checkbox" class="crunch"/>crunch</a></li>
						<li class="double"><a href="#" class="small" data-value="7" tabIndex="-1" class="double checkbox"><input type="checkbox" class="double"/>double team</a></li>
						<li class="psychic"><a href="#" class="small" data-value="8" tabIndex="-1" class="psychic checkbox"><input type="checkbox" class="psychic"/>psychic</a></li>
						<li class="ice"><a href="#" class="small" data-value="9" tabIndex="-1" class="ice"><input type="checkbox" class="ice checkbox"/>ice beam</a></li>
						<li class="surf"><a href="#" class="small" data-value="10" tabIndex="-1" class="surf"><input type="checkbox" class="surf checkbox"/>surf</a></li>

					</ul>
  				</div>
			</div>
		    

	    </div>

		
		<div class="form-group row">
			<div class="col-xs-2">
			    <label class="col-2 col-form-label">Name:</label>
			    <input id="nameIn" name="nameIn" class="form-control" type="text" placeholder="name" onkeydown="mirroredLastName()">
			    @if($errors->any())
			    	@foreach($errors->get('nameIn') as $error)
						<div>{{ $error }}</div>
			    	@endforeach
			    @endif


			</div>

	    </div>

		
		<div class="form-group row">
			<div class="form-inline">
			    <label class="col-2 col-form-label">Strength:</label>
			    <input class="form-control" name="strength" id="strength" type="text" readonly>
			    <button class="btn btn-light" id="roll1" onclick="rollRandom(1)">Roll</button>
			    <label id="label1"></label>

			    @if($errors->any())
			    	@foreach($errors->get('strength') as $error)
						<div>{{ $error }}</div>
			    	@endforeach
			    @endif
		    </div>
		</div>

		<div class="form-group row">
			<div class="form-inline">
			    <label class="col-2 col-form-label">Intelligence:</label>
			    <input class="form-control" name="intelligence" id="intelligence" type="text"  readonly >
			    <button class="btn btn-light" id="roll2" onclick="rollRandom(2)">Roll</button>
			    <label id="label2"></label>
				@if($errors->any())
			    	@foreach($errors->get('intelligence') as $error)
						<div>{{ $error }}</div>
			    	@endforeach
			    @endif
		    </div>
		</div>

		<div class="form-group row">
			<div class="form-inline">
			    <label class="col-2 col-form-label">Dexterity:</label>
			    <input class="form-control" name="dexterity" id="dexterity" type="text"  readonly>
			    <button class="btn btn-light" id="roll3" onclick="rollRandom(3)">Roll</button>
			    <label id="label3"></label>
			    @if($errors->any())
			    	@foreach($errors->get('dexterity') as $error)
						<div class="">{{ $error }}</div>
			    	@endforeach
			    @endif
		    </div>

	    </div>

		<div class="form-group row">
			<div class="col-xs-1">
			    <label class="col-2 col-form-label">Level:</label>
			    <input  class="form-control"type="text" value="1" readonly="" name="level" id="level">
		    </div>
	    </div>
		
		<div class="form-group row">
		    <button  type="submit" class="btn btn-light" name="submitbtn" value="create">Create</button>

		    <button id="discard" class="btn btn-light" onclick="return cleanForm()">Discard</button>

		    <button type="submit" class="btn btn-light" name="submitbtn" value="randomCreate" disabled="true">Random Create</button>
	    </div>

	    <div class="form-group row">
			<input type="text" id="checkAux" name="checked" value="">

		</div>



		

	
	</form>
	<button onclick="numberCheck()">CHECK</button>



@endsection()


@section('scripts')


<script type="text/javascript" src="{{ asset('js/html2canvas.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/html2canvas.js') }}"></script>


<script type="text/javascript">

	document.getElementById("checkAux").style.visibility = "hidden";
	var val = document.getElementById("checkAux").value;
	console.log(val);
	var color = "red";
	var cont = 0;

	$('#formCreate').submit(function() {
  		isChecked();
	});


	function isChecked(){
		var checked= "";
		
		
		if ($('#shadow').is(':checked')) {
			checked += "shadow Ball-";
			
		}
		if ($('#aerial').is(':checked')) {
			checked += "Aerial ace-";
			
		}
		if ($('#giga').is(':checked')) {
			checked += "Giga drain-";
			
		}
		if ($('#thunderbolt').is(':checked')) {
			checked += "Thunderbolt-";
			
		}
		if ($('#earthquake').is(':checked')) {
			checked += "Earthquake-";
			
		}
		if ($('#crunch').is(':checked')) {
			checked += "Crunch-";
			
		}
		if ($('#double').is(':checked')) {
			checked += "Double Team-";
			
		}
		if ($('#psychic').is(':checked')) {
			checked += "Psychic-";
			
		}
		if ($('#ice').is(':checked')) {
			checked += "Ice Beam-";
			
		}
		if ($('#surf').is(':checked')) {
			checked += "Surf-";
		}
		document.getElementById("checkAux").value = checked;
		
	}





	function paintPixel(pxl){
		console.log(pxl);
		document.getElementById(pxl).style.background = color;
		html2canvas(document.querySelector("#monsterPhoto")).then(canvas => {
    		//window.open(canvas)
    		document.body.appendChild(canvas)
		});
	}

	$(document).on('change','.small', function () {
		
		cont = document.querySelectorAll('input[type="checkbox"]:checked').length;
		var level;
		if (cont == 0 || cont == 1) {
			level = 1;
		}else {
			if (cont == 2) {
				level = 3;
			}else {
				if (cont == 3) {
					level = 5;
				}else {
					if (cont == 4) {
						level = 7;
					}else {
						if (cont == 5) {
							level = 9;
						}else {
							if (cont == 6) {
								level = 11;
							}else {
								if (cont == 7) {
									level = 13;
								}else {
									if (cont == 8) {
										level = 14;
									}else {
										if (cont == 9) {
											level = 16;
										}else {
											if (cont == 10) {
												level = 18;
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
		
		console.log(level);
		document.getElementById("level").value = level;

	});
	
 	function numberCheck() {
 		alert(document.querySelectorAll('input[type="checkbox"]:checked').length);
 	}

	function colorChange(btn){
		
		if(btn ==1){
			color = "red";
			
		}else{
			if(btn == 2){
				color = "yellow";
			}else{
				if (btn == 3) {
					color = "black";
					
				}else{
					if (btn == 4) {
						color = "white";
					}
				}
			}
		}
		console.log(color);

	}

	

	function cleanForm(){
		document.getElementById("races").options[0].selected = 'selected'; 


		document.getElementById("nameIn").value = "";
		document.getElementById("strength").value = "";
		document.getElementById("intelligence").value = "";
		document.getElementById("dexterity").value = "";

		document.getElementById("label1").value = "";
		document.getElementById("label2").value = "";
		document.getElementById("label3").value = "";


		document.getElementById("roll1").disabled = false;
		document.getElementById("roll2").disabled = false;
		document.getElementById("roll3").disabled = false;
		document.getElementById("drop").disabled = true;


		return false;
	}


	
	function mirroredLastName(){
    	var aux;
    	var dif;
		if(document.getElementById('races').value == 2){
			console.log(document.getElementById("lnameIn").value.length);
		}
	}

	

	function rollRandom(roll){
		console.log("1");
			var num1 = Math.floor((Math.random() * 100) + 1);
			var num2 = Math.floor((Math.random() * 100) + 1);
			var num3 = Math.floor((Math.random() * 100) + 1);
			var num4 = Math.floor((Math.random() * 100) + 1);

			var numbers = [num1, num2 ,num3 ,num4];

			numbers.sort(function(a, b){return b-a}); 

			var result = [];
			var aux;
			var total = 0;
			console.log("2");
			for (var i = 0; i < numbers.length; i++) {
				
				aux= numbers[i].toString();
				if(i<3){
					total=total + parseInt(numbers[i]);
					result.push(aux.bold());
				}else{
					result.push(aux);	
				}

				
			}
			document.getElementById("label1").style.fontWeight = 'normal';
			document.getElementById("label2").style.fontWeight = 'normal';
			document.getElementById("label3").style.fontWeight = 'normal';
			console.log("3");
			console.log(roll);	
			if(roll==1){
				document.getElementById("strength").value = total;
				document.getElementById("label1").innerHTML = result;
				document.getElementById("roll1").disabled = true; 
			}else{
				if (roll==2) {
					document.getElementById("intelligence").value = total;
					document.getElementById("label2").innerHTML = result;
					document.getElementById("roll2").disabled = true;
				}else{
					document.getElementById("dexterity").value = total;
					document.getElementById("label3").innerHTML = result;
					document.getElementById("roll3").disabled = true;
				}
			}

			

			console.log(total.toString());

	}




	$(document).ready(function(){
		var options = [];

		$( '.dropdown-menu a' ).on( 'click', function( event ) {

		   var $target = $( event.currentTarget ),
		       val = $target.attr( 'data-value' ),
		       $inp = $target.find( 'input' ),
		       idx;

		   if ( ( idx = options.indexOf( val ) ) > -1 ) {
		      options.splice( idx, 1 );
		      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
		   	} else {
		      options.push( val );
		      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
		   	}

   			$( event.target ).blur();
      
   			console.log( options );
   			return false;
		});


		$(document).on('change','#races', function () {

			
			$('.shadow').remove(); //SI
 			$('.aerial').remove(); // NO
 			$('.giga').remove();	//NO
 			$('.thunderbolt').remove(); //SI
 			$('.earthquake').remove();	//SI
 			$('.crunch').remove();	//SI
 			$('.double').remove(); //SI
 			$('.psychic').remove(); //SI
 			$('.ice').remove(); //SI
 			$('.surf').remove(); //NO

			$("#dropdown-Menu").append('<li class="shadow"><a href="#" class="small" value="1" tabIndex="-1" class="shadow"><input type="checkbox" value="1" class="shadow" id="shadow"/>shadow ball</a></li><li class="aerial"><a href="#" class="small" data-value="2" tabIndex="-1" class="aerial"><input type="checkbox" class="aerial" value="2" id="aerial"/>aerial ace</a></li><li class="giga"><a href="#" class="small" data-value="3" tabIndex="-1" class="giga"><input type="checkbox" class="giga" value="3" name="giga"/>giga drain</a></li><li class="thunderbolt"><a href="#" class="small" data-value="4" tabIndex="-1" class="thunderbolt"><input type="checkbox" class="thunderbolt" id="thunderbolt" value="4"/>thunderbolt</a></li><li class="earthquake"><a href="#" class="small" data-value="5" tabIndex="-1" class="earthquake"><input type="checkbox" class="earthquake" id="earthquake" value="5"/>earthquake</a></li><li class="crunch"><a href="#" class="small" data-value="6" tabIndex="-1" class="crunch"><input type="checkbox" class="crunch" id="crunch" value="6"/>crunch</a></li><li class="double"><a href="#" class="small" data-value="7" tabIndex="-1" class="double"><input type="checkbox" class="double" id="double" value="7"/>double team</a></li><li class="psychic"><a href="#" class="small" data-value="8" tabIndex="-1" class="psychic"><input type="checkbox" class="psychic" id="psychic" value="8"/>psychic</a></li><li class="ice"><a href="#" class="small" data-value="9" tabIndex="-1" class="ice"><input type="checkbox" class="ice" id="ice" value="9"/>ice beam</a></li><li class="surf"><a href="#" class="small" data-value="10" tabIndex="-1" class="surf"><input type="checkbox" class="surf" id="surf" value="10"/>surf</a></li>');


			/*
				<li class="shadow"><a href="#" class="small" data-value="1" tabIndex="-1" class="shadow"><input type="checkbox" value="1" class="shadow" name="shadow" id="shadow"/>shadow ball</a></li>
				<li class="aerial"><a href="#" class="small" data-value="2" tabIndex="-1" class="aerial"><input type="checkbox" class="aerial" value="2" id="aerial"/>aerial ace</a></li>
				<li class="giga"><a href="#" class="small" data-value="3" tabIndex="-1" class="giga"><input type="checkbox" class="giga" name="giga" value="3" name="giga"/>giga drain</a></li>
				<li class="thunderbolt"><a href="#" class="small" data-value="4" tabIndex="-1" class="thunderbolt"><input type="checkbox" class="thunderbolt" name="thunderbolt" id="thunderbolt" value="4"/>thunderbolt</a></li>
				<li class="earthquake"><a href="#" class="small" data-value="5" tabIndex="-1" class="earthquake"><input type="checkbox" class="earthquake" name="checkbox" id="earthquake" value="5"/>earthquake</a></li>
				<li class="crunch"><a href="#" class="small" data-value="6" tabIndex="-1" class="crunch"><input type="checkbox" class="crunch" name="crunch" id="crunch" value="6"/>crunch</a></li>
				<li class="double"><a href="#" class="small" data-value="7" tabIndex="-1" class="double"><input type="checkbox" class="double" name="double" id="double" value="7"/>double team</a></li>
				<li class="psychic"><a href="#" class="small" data-value="8" tabIndex="-1" class="psychic"><input type="checkbox" class="psychic" name="psychic" id="psychic" value="8"/>psychic</a></li>
				<li class="ice"><a href="#" class="small" data-value="9" tabIndex="-1" class="ice"><input type="checkbox" class="ice" name="ice" id="ice" value="9"/>ice beam</a></li>
				<li class="surf"><a href="#" class="small" data-value="10" tabIndex="-1" class="surf"><input type="checkbox" class="surf" name="surf" id="surf" value="10"/>surf</a></li>
			*/

			var race_id=$(this).val();
			console.log(race_id);
			if(race_id == 8){  //MIND FLAYER
				//$('.shadow').remove();
	 			//$('.aerial').remove();
	 			$('.giga').remove();
			}else{
				if (race_id == 23) { //KOBOLD
					$('.shadow').remove();
	 				$('.aerial').remove();
	 				$('.giga').remove();
	 				$('.thunderbolt').remove();
	 				$('.earthquake').remove();
	 				$('.psychic').remove();
	 				$('.ice').remove();
	 				$('.surf').remove();
 				}else{
 					if (race_id == 29 || race_id == 15 || race_id == 10) {	//YUAN TI  GELATINUS CUBE DROW
 						$('.shadow').remove(); //NO
			 			$('.aerial').remove(); // NO
			 			$('.giga').remove();	//NO

 					}else{
 						if (race_id == 12 || race_id == 11 || race_id == 19 || race_id == 20 || race_id == 28) {
 							$('.shadow').remove(); //NO
				 			//$('.aerial').remove(); // SI
				 			$('.giga').remove();	
				 			$('.surf').remove(); //NO
 						}else{
 							if(race_id == 9){  //MIND FLAYER
					 			$('.aerial').remove();
					 			$('.surf').remove();

							}else{
								$('.shadow').remove(); //NO
					 			$('.aerial').remove(); // SI
					 			$('.giga').remove();
					 			$('.surf').remove(); //NO
							}
 							
 						}
 					}
 				}
			}
			document.getElementById("drop").disabled = false;
		}); //END FUNCTION
		
	});



	
</script>
@endsection