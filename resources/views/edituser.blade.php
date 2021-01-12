<!DOCTYPE html>
<html lang="en"> 
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit form</h2>
  <form action="update" method="post">
  @csrf
  {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <input type="hidden" class="form-control" id="id"  name="id"  
      value="{{ old('id') ?? $data->id}}" >


    <div class="form-group">
      <label for="f_name">First Name:</label> 
      <input type="text" class="form-control" id="f_name" placeholder="Enter first name" name="f_name"  
      value="{{ old('f_name') ?? $data->f_name}}" >
    </div>
    <div class="form-group">
      <label for="m_name">middle Name:</label>
      <input type="text" class="form-control" id="m_name" placeholder="Enter middle name" name="m_name"
      value="{{ old('m_name') ?? $data->m_name}}">
    </div>

    <div class="form-group">
      <label for="l_name">Last Name:</label>
      <input type="text" class="form-control" id="l_name" placeholder="Enter last name" name="l_name"
      value = "{{ old('l_name') ?? $data->l_name}}">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
    
  </form>
</div>

</body>
</html>
