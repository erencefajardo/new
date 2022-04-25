<!DOCTYPE html>
<html>
<head>
	<title>Add Record</title>
</head>
<body>
	<div>
		<h1>Add New Student</h1>

		<form method="post" action="{{url('adding')}}">
			
			@csrf
			<label>Name:</label>
			<input type="text" name="name">

			<label>Position:</label>
			<select name="position">
				<option></option>
				<option>CP I</option>
				<option>CP II</option>
				<option>CP III</option>
			</select>

			<label>Gender:</label>
			<label><input type="radio" name="gender" value="Male">Male</label>
			<label><input type="radio" name="gender" value="Female">Female</label>

			<label>Birth Date:</label>
			<input type="date" name="birthdate">

			<button type="submit">Submit</button>
		</form>
	</div>
</body>
</html>