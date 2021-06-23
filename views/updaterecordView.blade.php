<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title></title>
</head>
<body>
<form action="/updatesubmit/{{$student->Id}}" method="post">
	@csrf
  <div class="mb-3">
    <label  class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="firstname" value="{{$student->First_Name}}">
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="lastname" value="{{$student->Last_Name}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Age</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="age" value="{{$student->Age}}">
  </div>

  <div class="mb-3">
    <label  class="form-label">Date Of Birth</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="dob" value="{{$student->Date_Of_Birth}}">
  </div>

  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="emaill" value="{{$student->st_email}}">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</body>
</html>