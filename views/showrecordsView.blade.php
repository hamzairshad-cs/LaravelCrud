<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body><br>
	<a style="color: white;" class="btn btn-primary" href="\addrecords">Add Record</a><br><br>
<table class="table">
	<thead class="thead-light">
		<tr>
		<th>Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Age</th>
		<th>Date Of Birth</th>
		<th>Email</th>
		<th>Created At</th>
		<th>Updated At</th>
		<th></th>
		<th></th>
	</tr>
	</thead>
	@forelse ($student as $st)
	<tr>
		<td>{{$st->Id}}</td>
		<td>{{$st->First_Name}}</td>
		<td>{{$st->Last_Name}}</td>
		<td>{{$st->Age}}</td>

		<td>{{$st->Date_Of_Birth}}</td>
		<td>{{$st->st_email}}</td>
		<td>{{$st->created_at}}</td>
		<td>{{$st->updated_at}}</td>

		 <td><a style="color: white;" class="btn btn-warning" href="/update/{{$st->Id}}">Edit</a> | <a class="btn btn-danger" href="/delete/{{$st->Id}}">Delete</a> </td>
	</tr>
	@empty
	<tr>Empty</tr>
@endforelse
</table>
</body>
</html>