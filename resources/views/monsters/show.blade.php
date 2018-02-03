@extends('layouts.app')
@section('content')



	<h1>Monster's</h1>
	<a href="/monsters/create" class="btn btn-default">Create Monster</a>
	
    
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
							<th>Level</th>
							<th>Race</th>
							<th>Strength</th>
							<th>Intelligence</th>
							<th>Dexterity</th>
							<th>Abillities</th>

    					</tr>

    				</thead>

    				<tbody>
    					@foreach($monsters as $id =>$monster)
							<tr>
								<td>{{ ($id+1) }}</td>
								<td>{{ $monster->name }}</td>
								<td>{{ $monster->level }}</td>
								<td>{{ $monster->race->name }}</td>
								<td>{{ $monster->strength }}</td>
								<td>{{ $monster->intelligence }}</td>
								<td>{{ $monster->dexterity }}</td>
								<td>{{ $monster->abillities }}</td>
								<td>
								<td>
									<a href="{{URL('monsters/'.$monster->id.'/destroy')}}" class="btn btn-xs btn-danger">Delete</a>
								</td>

							</tr>

    					@endforeach



    				</tbody>

    			</table>
    			
    		</div>
    		

    	</div>

    </div>
@endsection