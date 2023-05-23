<?php

$this->extend('layout/main');
$this->section('body');

?>

<form action="/students/store" method="POST" enctype="multipart/form-data" style="margin-top: 70px">
  <div class="container">
    <div class="form-inner ml-2 mr-5" style="background-color: #7fc7df; border-radius: 5px; padding: 30px;">
      <div class="table-title bg-primary" style="padding: 20px; border-radius: 10px;">
        <h2 class="text-white" style="margin-bottom: 0; font-size: 40px; text-align: center;">Add New <b>Student</b></h2>
      </div>
      <div class="row" style="margin-top: 30px;">
        <div class="col-md-6">
          <div class="form-group" style="margin-bottom: 15px;">
            <label for="firstName" style="font-weight: bold;">First Name</label>
            <input type="text" name="firstName" class="form-control" placeholder="Enter First name">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group" style="margin-bottom: 15px;">
            <label for="lastName" style="font-weight: bold;">Last Name</label>
            <input type="text" name="lastName" class="form-control" placeholder="Enter Last name">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group" style="margin-bottom: 15px;">
            <label for="studentCourse" style="font-weight: bold;">Course</label>
            <input type="text" name="studentCourse" class="form-control" placeholder="Enter Course">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group" style="margin-bottom: 15px;">
            <label for="studentYear" style="font-weight: bold;">Year Level</label>
            <input type="text" name="studentYear" class="form-control" placeholder="Enter Year Level">
          </div>
        </div>
      </div>
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="studentAddress" style="font-weight: bold;">Address</label>
        <input type="text" name="studentAddress" class="form-control" placeholder="Enter Address">
      </div>
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="studentEmail" style="font-weight: bold;">Email</label>
        <input type="email" name="studentEmail" class="form-control" placeholder="Enter Email">
      </div>
      <div class="form-group" style="margin-bottom: 15px;">
        <label for="studentPhone" style="font-weight: bold;">Phone Number</label>
        <input type="text" name="studentPhone" class="form-control" placeholder="Enter Contact Number">
      </div>
      <div style="text-align: center; margin-top: 25px;">
        <button class="btn btn-primary">Add to Records</button>
      </div>
    </div>
  </div>
</form>

<?php $this->endSection(); ?>
