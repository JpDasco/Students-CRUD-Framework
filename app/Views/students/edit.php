<?php $this->extend('layout/main'); ?>

<?php $this->section('body'); ?>

<form action="/students/update/<?= $student['id']; ?>" method="POST" enctype="multipart/form-data">
  <div class="container">
    <div class="form-inner ml-2 mr-5" style="background-color: #7fc7df; border-radius: 10px; padding: 30px; margin-top: 70px;">
      <div class="table-title bg-primary" style="padding: 15px; border-radius: 10px;">
        <h2 class="text-white" style="font-size: 40px; text-align: center;">Update A<b> Record</b></h2>
      </div>
      <div class="row" style="margin-top: 20px;">
        <div class="col-md-6">
          <div class="form-group">
            <label for="firstName"><b>First Name</b></label>
            <input type="text" name="firstName" class="form-control" style="margin-bottom: 15px;" value="<?= $student['first_name']; ?>">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="lastName"><b>Last Name</b></label>
            <input type="text" name="lastName" class="form-control" style="margin-bottom: 15px;" value="<?= $student['last_name']; ?>">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="studentCourse"><b>Course</b></label>
            <input type="text" name="studentCourse" class="form-control" style="margin-bottom: 15px;" value="<?= $student['student_course']; ?>">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="studentYear"><b>Year Level</b></label>
            <input type="text" name="studentYear" class="form-control" style="margin-bottom: 15px;" value="<?= $student['student_year']; ?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="studentAddress"><b>Address</b></label>
        <input type="text" name="studentAddress" class="form-control" style="margin-bottom: 15px;" value="<?= $student['student_address']; ?>">
      </div>
      <div class="form-group">
        <label for="studentEmail"><b>Email</b></label>
        <input type="text" name="studentEmail" class="form-control" style="margin-bottom: 15px;" value="<?= $student['student_email']; ?>">
      </div>
      <div class="form-group">
        <label for="studentPhone"><b>Phone Number</b></label>
        <input type="text" name="studentPhone" class="form-control" style="margin-bottom: 15px;" value="<?= $student['student_phone']; ?>">
      </div>
      <div style="text-align: center; margin-top: 25px;">
        <button class="btn btn-warning">Update Changes</button>
      </div>
    </div>
  </div>
</form>

<?php $this->endSection(); ?>
