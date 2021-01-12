<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>users records</title>
    <style>
    .body{
        background-color:'dark'
    }
    </style>
  </head>
  <body class="body">
    <h1>Display users</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   

    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>

      <th scope="col">Last Name</th>
      <th scope="col">Created Date</th>
    </tr>
  </thead>
  
  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($data->id); ?></td>
        <td><?php echo e($data->f_name); ?></td>
        <td><?php echo e($data->m_name); ?></td>
        <td><?php echo e($data->l_name); ?></td>
        <td><?php echo e($data->updated_date); ?></td>
        <td> <a href="/edituser/<?php echo e($data->id); ?>/edit" class="btn btn-success">Edit</a></td>
        <td> <a href="/edituser/<?php echo e($data->id); ?>/delete" class="btn btn-danger">Delete</a></td>


    </tr> 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </body>
</html><?php /**PATH /home/steve/blog/resources/views/viewusers.blade.php ENDPATH**/ ?>