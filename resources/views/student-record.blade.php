<!DOCTYPE html>
<html>
<head>
	<title>Student Record</title>
</head>
<body>
	<div>
		<h1>Student Record</h1>
		<button><a href="{{url('add')}}">Add New Record</a></button>

		<table>
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Position</th>
				<th>Gender</th>
				<th>Birth Date</th>
				<th>Action</th>
			</thead>
			<tbody>
				
				@foreach($stud as $item)

				<tr>
					<td>{{$item->id}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->position}}</td>
					<td>{{$item->gender}}</td>
					<td>{{$item->birthdate}}</td>
					<td>
						<a href="{{url('view-record/'.$item->id)}}">View |</a>
						<a href="{{url('edit-record/'.$item->id)}}">Edit |</a>
						<a href="{{url('delete-record/'.$item->id)}}">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>