

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>


    </tr>
  </thead>
  <tbody>
  <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
      <td><?php echo e($student->cne); ?></td>
      <td><?php echo e($student->firstName); ?></td>
      <td><?php echo e($student->secondName); ?></td>
      <td><?php echo e($student->age); ?></td>
      <td><?php echo e($student->speciality); ?></td>
      <td>
      <a href="#" class="btn btn-sm btn-info">show</a>
      <a href="<?php echo e(url('/edit/'.$student->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
      <a href="#" class="btn btn-sm btn-danger">Delete</a>


      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
</table>



</div>


<?php /**PATH /home/steve/blog/resources/views/studentlist.blade.php ENDPATH**/ ?>