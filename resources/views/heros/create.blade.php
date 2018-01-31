@extends('layouts.app')

@section('content')
	<h1>Estos es HERO.CREATE</h1>

	<form method="post" action="/heros/insert" class="form-group">
		{{csrf_field()}}
		<div class="card">

			<div class="card-block col-xs-2">
				<div class="form-group">
					<label for="race" class="form-control-label">Race</label>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<select name="races" id="races" class="form-control">

					  @foreach($races as $idr => $race )
					    <option value="{{ $idr }}">{{ $race }}</option>
					  @endforeach
					</select>
				</div>
			</div>

			<div class="card-block col-xs-2">
				<div class="form-group">
					<label for="class" class="form-control-label">Character class</label>
					<select name="weapons" id="weapons" class="form-control">
					  @foreach($classes as $idw => $class )
					    <option value="{{ $idw }}">{{ $class }}</option>
					  @endforeach
					</select>
				</div>
			</div>

			<div class="card-block col-xs-2">
				<div class="form-group">
					<label for="weapon" class="form-control-label">Weapon</label>
					<select name="weapons" id="weapons" class="form-control">
					  @foreach($weapons as $idw => $weapon )
					    <option value="{{ $idw }}">{{ $weapon }}</option>
					  @endforeach
					</select>
				</div>
			</div>


			<div class="card-block col-xs-2">
				<div class="form-group">
					<label for="name" class="form-control-label">First name</label>
					<input class="form-control"	type="text" name="name" placeholder="Name">
				</div>
			</div>
			
			<div class="card-block col-xs-2">
				<div class="form-group">
					<label for="last" class="form-control-label">Last name</label>
					<input class="form-control"	type="text" name="last" placeholder="Last name">
				</div>
			</div>

			<div class="card-block col-xs-2">
				<div class="form-group">
					<label for="level" class="form-control-label">Level</label>
					<input class="form-control"	type="text" name="level" placeholder="Level">
				</div>
			</div>

			

			<div class="card-block col-xs-1">
				<div class="form-group">
					<label for="strength" class="form-control-label">Strength</label>
					<input class="form-control" type="number" name="strength" min="1" max="100">
				</div>
			</div>

			<div class="card-block">
				<div class="form-group col-xs-1">
					<label for="intelligence" class="form-control-label">Intelligence</label>
					<input class="form-control" type="number" name="intelligence" min="1" max="100">
				</div>
			</div>

			<div class="card-block col-xs-1">
				<div class="form-group">
					<label for="Dexterity" class="form-control-label">Dexterity</label>
					<input class="form-control" type="number" name="dexterity" min="1" max="100">
				</div>
			</div>
			

			<div class="form-group">
				<button class="btn btn-primary" type="submit">
					Create
				</button>
			</div>
		</div>
		@if($errors->any())
			@foreach($errors->get('name') as $error)
				<div>{{$error}}</div>
			@endforeach
		@endif

	</form>


@endsection()


@section('scripts')
<script>

		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});

		$('#races').on('change',function(e) {
			//console.log(e);
			var races_id = e.target.value;
			try{
				$.post('/heros/racesFilter?races_id=' + races_id, function(data){
					console.log(data);
				});
			}catch(e){
				
			}	    
		});


</script>
@endsection