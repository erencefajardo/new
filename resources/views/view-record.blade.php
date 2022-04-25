<!DOCTYPE html>
<html>
<head>
	<title>View Record</title>
</head>
<body>
	<div>
		<h1>View New Student</h1>

			<label>Name:</label>
			{{$stud->name}}<br>

			<label>Position:</label>
			{{$stud->position}}<br>

			<label>Gender:</label>
			{{$stud->gender}}<br>
			
			<label>Birth Date:</label>
			{{$stud->birthdate}}
	</div>
</body>
</html>