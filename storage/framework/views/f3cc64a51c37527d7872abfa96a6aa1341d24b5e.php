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
  <h2>Register form</h2>
  <form action="register" method="post">
  <?php echo csrf_field(); ?>

    <div class="form-group">
      <label for="f_name">First Name:</label>
      <input type="text" class="form-control" id="f_name" placeholder="Enter first name" name="f_name">
    </div>
    <div class="form-group">
      <label for="m_name">middle Name:</label>
      <input type="text" class="form-control" id="m_name" placeholder="Enter middle name" name="m_name">
    </div>

    <div class="form-group">
      <label for="l_name">Last Name:</label>
      <input type="text" class="form-control" id="l_name" placeholder="Enter last name" name="l_name">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
<?php /**PATH /home/steve/blog/resources/views/register.blade.php ENDPATH**/ ?>