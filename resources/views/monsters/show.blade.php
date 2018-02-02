@extends('layouts.app')
@section('content')



	<h1>Hero's</h1>
	<a href="/heros/create" class="btn btn-default">Create hero</a>
    
    @if(Session::has('success'))
		<h3>{{ Session::get('success') }}</h3>
		
    @endif


    <div class="row">
    	<div class="col-md-12">
    		<div class="table-responsive">
    			<table class="table">
    				<thead>
    					<tr>
    						
							<th>Id</th>
							<th>Name</th>
							<th>Last Name</th>
							<th>Level</th>
							<th>Race</th>
							<th>Class</th>
							<th>Weapon</th>
							<th>Strength</th>
							<th>Intelligence</th>
							<th>Dexterity</th>

    					</tr>

    				</thead>

    				<tbody>
    					@foreach($heros as $id =>$hero)
							<tr>
								<td>{{ ($id+1) }}</td>
								<td>{{ $hero->name }}</td>
								<td>{{ $hero->last_name }}</td>
								<td>{{ $hero->level }}</td>
								<td>{{ $hero->race->name }}</td>
								<td>{{ $hero->class->name }}</td>
								<td>{{ $hero->weapon->name }}</td>
								<td>{{ $hero->strength }}</td>
								<td>{{ $hero->intelligence }}</td>
								<td>{{ $hero->dexterity }}</td>
								<td>
									{{ csrf_field() }}
									<a href="{{URL('heros/'.$hero->id.'/edit')}}" class="btn btn-xs btn-info">Edit</a>
								<td>
									<a href="{{URL('heros/'.$hero->id.'/destroy')}}" class="btn btn-xs btn-danger">Delete</a>
								</td>

							</tr>


    					@endforeach



    				</tbody>

    			</table>
    			
    		</div>
    		

    	</div>

    </div>
@endsection