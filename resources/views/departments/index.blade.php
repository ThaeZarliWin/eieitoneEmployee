@extends('layouts.main')
@section('content')
<!---- page Heading ---->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Departments</h1>
</div>
<div class="card mx-auto">
	<div>
		@if(session()->has('message'))
			<div class="alert alert-success">
				{{ session('message') }}
			</div>
		@endif
	</div>
	<div class="card-header">
		<div class="row">
			<div class="col">
				<form method="GET" action="{{ route('departments.index') }}">
					<div class="form-row align-items-center">
						<div class="col-auto">
							<input type="search" name="search" class="form-control mb-2" id="inlineFormInput" 
							placeholder="Search">
						</div>
						<div class="col-auto">
							<button type="submit" class="btn btn-primary mb-2">Search</button>
						</div>
					</div>
				</form>
			</div>
			<div>
				<a href="{{ route('departments.create') }}" class="btn btn-primary mb-2">Create</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#ID</th>
					<th scope="col">Name</th>
					<th scope="col">Manage</th>
				</tr>
			</thead>
			<tbody>
				@foreach($departments as $department)
					<tr>
						<th scope="row">{{ $department->id }}</th>
						<td>{{ $department->name }}</td>
						<td>
							<a href="{{ route('departments.edit', $department->id) }}" class="btn btn-success">Edit</a>
						</td>
					</tr>
				@endforeach
				</tr>
			</tbody>			
   	</table>    
</div>
@endsection