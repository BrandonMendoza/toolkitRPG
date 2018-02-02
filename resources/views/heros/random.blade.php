@extends('layouts.app')

@section('content')
	<h1>Estos es HERO.CREATE</h1>
	

	<form class="form-group" method="POST" action="{{route('insertHero')}}">
		
		{{csrf_field()}}

		<div class="form-group row" >
			<label class="col-2 col-form-label">Race: </label>
		    <select class="form-control" style="width: 200px" id="races" name="races" readonly disabled="true">

		        <option value="{{ isset($race) ? $race->id : '' }}" disabled="true" selected="true">{{ isset($race) ? $race->name : '' }}</option>


		    </select>

		    <label class="col-2 col-form-label">Class: </label>
		    <select class="form-control" style="width: 200px" id="classes" name="classes" disabled="true">
		        <option value="{{ isset($chuman) ? $chuman->id : '' }}" disabled="true" selected="true">{{ isset($chuman) ? $chuman->name : '' }}</option>
		    </select>



		    <label class="col-2 col-form-label">Weapon: </label>
		    <select class="form-control" style="width: 200px" id="weapons" name="weapons" readonly>
		        <option value="{{ isset($weapon) ? $weapon->id : '' }}" disabled="true" selected="true">{{ isset($weapon) ? $weapon->name : '' }}</option>
		    </select>


	    </div>

		
		<div class="form-group row">
			<div class="col-xs-2">
			    <label class="col-2 col-form-label">Name:</label>
			    <input id="nameIn" name="nameIn" class="form-control" type="text" placeholder="name" disabled="true" onkeydown="mirroredLastName()" value="{{ isset($name) ? $name->name : '' }}" readonly>



			</div>

			<div class="col-xs-2">
			    <label class="col-2 col-form-label">Last Name:</label>
			    <input id="lnameIn" name="lnameIn" class="form-control" type="text" placeholder="Last name" disabled="true" value="" readonly>

		    </div>
	    </div>

		
		<div class="form-group row">
			<div class="form-inline">
			    <label class="col-2 col-form-label">Strength:</label>
			    <input class="form-control" name="strength" id="strength" type="text" value=" " readonly>
			    <label id="label1"></label>


		    </div>
		</div>

		<div class="form-group row">
			<div class="form-inline">
			    <label class="col-2 col-form-label">Intelligence:</label>
			    <input class="form-control" name="intelligence" id="intelligence" type="text" value=" " readonly>
			    <label id="label2"></label>

		    </div>
		</div>

		<div class="form-group row">
			<div class="form-inline">
			    <label class="col-2 col-form-label">Dexterity:</label>
			    <input class="form-control" name="dexterity" id="dexterity" type="text" value=" " readonly>
			    <label id="label3"></label>

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
		    <button class="btn btn-light">Discard</button>
	    </div>

	    

	</form>



@endsection()


@section('scripts')


<script type="text/javascript">

	function getDifference(a, b)
	{
		var i = 0;
		var j = 0;
		var result = "";

		while (j < b.length)
		{
		    if (a[i] != b[j] || i == a.length)
		        result += b[j];
		    else
		        i++;
		    j++;
		}
		return result;
	}

	
	function mirroredLastName(){

    	var aux;
    	var dif;
		if(document.getElementById('races').value == 2){

			console.log(document.getElementById("lnameIn").value.length);

			/*if(document.getElementById("lnameIn").value.length>1){
				aux=document.getElementById("nameIn").value;//BR
				dif=getDifference(document.getElementById("lnameIn").value,aux=document.getElementById("nameIn").value);// BR B
				document.getElementById("lnameIn").value+=dif; //R + b
			}else{
				aux=document.getElementById("nameIn").value; //B
				document.getElementById("lnameIn").value+=aux;
			}

			*/
			
			
		}
	}

	

	function rollRandom(roll){
			var num1 = Math.floor((Math.random() * 6) + 1);
			var num2 = Math.floor((Math.random() * 6) + 1);
			var num3 = Math.floor((Math.random() * 6) + 1);
			var num4 = Math.floor((Math.random() * 6) + 1);

			var numbers = [num1, num2 ,num3 ,num4];

			numbers.sort(function(a, b){return b-a}); 

			var result = [];
			var aux;
			var total = 0;
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
			
			console.log(roll);
			if(roll==1){
				document.getElementById("strength").value = total;
				document.getElementById("label1").innerHTML = result;
			}else{
				if (roll==2) {
					document.getElementById("intelligence").value = total;
					document.getElementById("label2").innerHTML = result;
				}else{
					document.getElementById("dexterity").value = total;
					document.getElementById("label3").innerHTML = result;
				}
			}

			

			console.log(total.toString());

	}


	$(document).ready(function(){
		rollRandom(1);
		rollRandom(2);
		rollRandom(3);


		$(document).on('change','#races', function () {
			document.getElementById("nameIn").disabled = true;
			document.getElementById("lnameIn").disabled = true;
			if(document.getElementById('races').value == 5 || document.getElementById('races').value == 7 || document.getElementById("races").value ==2){
				document.getElementById("nameIn").disabled = false;
			}else{
				document.getElementById("nameIn").disabled = false;
				document.getElementById("lnameIn").disabled = false;
			}

			$.ajaxSetup({
			  headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
			});

			 var race_id=$(this).val();
			 //console.log(race_id);
			 var div = $(this).parent();
			 console.log(div);
			 var op=" ";
			$.ajax({
				type:'get',
				url:'{!! URL::to('racesFilter') !!}',
				data:{'id':race_id},
				success:function(data) {
					console.log(data);
					op+='<option class="form-control" value="0" selected disabled>chose Class</option>';
                    for(var i=0;i<data.length;i++){

                    	op+='<option class="form-control" value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    div.find('#classes').html(" ");
                    div.find('#classes').append(op);
				},
				error:function() {

				}
			});

		});




		$(document).on('change','#classes', function () {
			$.ajaxSetup({
			  headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  }
			});

			 var class_id=$(this).val();
			 //console.log(race_id);
			 var div = $(this).parent();
			 console.log(div);
			 var op=" ";
			$.ajax({
				type:'get',
				url:'{!! URL::to('classFilter') !!}',
				data:{'id':class_id},
				success:function(data) {
					console.log(data);
					op+='<option class="form-control" value="0" selected disabled>chose weapon</option>';
                    for(var i=0;i<data.length;i++){

                    	op+='<option class="form-control" value="'+data[i].id+'">'+data[i].name+'</option>';
                    }
                    div.find('#weapons').html(" ");
                    div.find('#weapons').append(op);
				},
				error:function() {

				}
			});

		});
	});



	
</script>
@endsection