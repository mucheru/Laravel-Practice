<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Student Management System</title>
  </head>
  <body>
  @include("navbar")


  @if($layout=='index')
      <div class="container-fluid mt-4">
      <div class="row">
      <section class="col-md-7">
      @include("studentlist")
      </section>
      <section class="col"></section>
      </div>
      </div>

  @elseif($layout=='create')
  <div class="container-fluid mt-4">
      <div class="row">
          <section class="col-md-7">
          @include("studentlist")
          </section>
          <section class="col">
          <form action="{{url('/store')}}" method="post">
          @csrf
  <div class="form-group">
    <label> CNE</label>
    <input name="cne" type="text" class="form-control" placeholder="Enter CNE">
  </div>

  <div class="form-group">
    <label> First Name</label>
    <input name="firstName" type="text" class="form-control" placeholder="Enter first name">
  </div>

  <div class="form-group">
    <label> Second Name</label>
    <input name="secondName" type="text" class="form-control" placeholder="Enter second name">
  </div>

  <div class="form-group">
    <label> Age</label>
    <input name="age" type="text" class="form-control" placeholder="Enter age">
  </div>

  <div class="form-group">
    <label> Speciality</label>
    <input name="speciality" type="text" class="form-control" placeholder="Enter speciality">
  </div>

  <input type="submit" class="btn btn-info" value="save">
  <input type="reset" class="btn btn-warning" value="Reset">
</form>
          
          </section>
          </div>
      </div>

  @elseif($layout=='show')
  <div class="container-fluid mt-4">
  <div class="row">

      <section class="col-md-7">
      @include("studentlist")
      </section>
      <section class="col"></section>
      </div>
      </div>

  @elseif($layout=='edit')

  <div class="container-fluid mt-4">
  <div class="row">

 
      <section class="col-md-7">
      @include("studentlist")
      </section>
      <section class="col">

      <form action="{{url('/update/'.$student->id)}}" method="post">
          @csrf
  <div class="form-group">
    <label> CNE</label>
    <input name="cne" value="{{$student->cne}}" type="text" class="form-control" placeholder="Enter CNE">
  </div>

  <div class="form-group">
    <label> First Name</label>
    <input name="firstName"  value="{{$student->firstName}}" type="text" class="form-control" placeholder="Enter first name">
  </div>

  <div class="form-group">
    <label> Second Name</label>
    <input name="secondName" value="{{$student->secondName}}" type="text" class="form-control" placeholder="Enter second name">
  </div>

  <div class="form-group">
    <label> Age</label>
    <input name="age"  value="{{$student->age}}" type="text" class="form-control" placeholder="Enter age">
  </div>

  <div class="form-group">
    <label> Speciality</label>
    <input name="speciality"  value="{{$student->speciality}}" type="text" class="form-control" placeholder="Enter speciality">
  </div>

  <input type="submit" class="btn btn-info" value="Update">
  <input type="reset" class="btn btn-warning" value="Reset">
</form>

      

      </section>
      </div>
      </div>

  @endif




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>