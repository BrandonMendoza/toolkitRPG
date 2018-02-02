@extends('layouts.app')

@section('content')
	<h1>Estos es HERO.CREATE</h1>
	

	<form class="form-group" method="POST" action="{{isset($heros) ? URL('heros/'.$heros->id.'/update') : '' }}">
		
		{{csrf_field()}}

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

		    <label class="col-2 col-form-label">Class: </label>
		    <select class="form-control" style="width: 200px" id="classes" name="classes">
		        <option value="0" disabled="true" selected="true">-Select-</option>
		    </select>
			@if($errors->any())
		    	@foreach($errors->get('classes') as $error)
					<div>{{ $error }}</div>
		    	@endforeach
		    @endif


		    <label class="col-2 col-form-label">Weapon: </label>
		    <select class="form-control" style="width: 200px" id="weapons" name="weapons">
		        <option value="0" disabled="true" selected="true">-Select-</option>
		    </select>
		    @if($errors->any())
		    	@foreach($errors->get('weapons') as $error)
					<div>{{ $error }}</div>
		    	@endforeach
		    @endif

	    </div>

		
		<div class="form-group row">
			<div class="col-xs-2">
			    <label class="col-2 col-form-label">Name:</label>
			    <input id="nameIn" name="nameIn" class="form-control" type="text" placeholder="name" disabled="true" onkeydown="mirroredLastName()" value="{{ isset($heros) ? $heros->name : '' }}">
			    @if($errors->any())
			    	@foreach($errors->get('nameIn') as $error)
						<div>{{ $error }}</div>
			    	@endforeach
			    @endif


			</div>

			<div class="col-xs-2">
			    <label class="col-2 col-form-label">Last Name:</label>
			    <input id="lnameIn" name="lnameIn" class="form-control" type="text" placeholder="Last name" disabled="true" value="{{ isset($heros) ? $heros->last_name : '' }}">
			    @if($errors->any())
			    	@foreach($errors->get('lnameIn') as $error)
						<div>{{ $error }}</div>
			    	@endforeach
			    @endif
		    </div>
	    </div>

		
		<div class="form-group row">
			<div class="form-inline">
			    <label class="col-2 col-form-label">Strength:</label>
			    <input class="form-control" name="strength" id="strength" type="text" readonly value="{{ isset($heros) ? $heros->strength : '' }}">
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
			    <input class="form-control" name="intelligence" id="intelligence" type="text"  readonly value="{{ isset($heros) ? $heros->intelligence : '' }}">
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
			    <input class="form-control" name="dexterity" id="dexterity" type="text"  readonly value="{{ isset($heros) ? $heros->dexterity : '' }}">
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
			    <input  class="form-control"type="text" value="1" readonly="" name="level" id="level" >
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
	console.log(getDifference("bran","brand"))
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