<!DOCTYPE html>
<html>
<head>
	<title>Edit Record</title>
</head>
<body>
	<div>
		<h1>Edit Student Record</h1>

		<form method="post" action="{{url('update-record/'.$stud->id)}}">
			
			@csrf
			<label>Name:</label>
			<input type="text" name="name" value="{{$stud->name}}">

			<label>Position:</label>
			<select name="position">
				<option {{$stud->position == 'CP I' ? 'selected': '' }}>CP I</option>
				<option {{$stud->position == 'CP II' ? 'selected': '' }}>CP II</option>	
				<option {{$stud->position == 'CP III' ? 'selected': ''}}>CP III</option>
			</select>

			<label>Gender:</label>
			<label><input type="radio" name="gender" value="Male" {{$stud->gender == 'Male' ? 'checked': '' }}>Male</label>
			<label><input type="radio" name="gender" value="Female" {{$stud->gender == 'Female' ? 'checked': ''}}>Female</label>

			<label>Birth Date:</label>
			<input type="date" name="birthdate" value="{{$stud->birthdate}}">

			<button type="submit">Submit</button>
		</form>
	</div>
</body>
</html>