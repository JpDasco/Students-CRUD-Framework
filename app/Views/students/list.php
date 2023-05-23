<?php

$this->extend('layout/main');
$this->section('body');

?>

<?php if(session()->getFlashdata('success')) :?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('success') ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<div class="container-xl" style="margin-top: 70px;">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title bg-primary" style="padding: 20px; border-radius: 10px;">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="text-white" style="margin-bottom: 0; font-size: 40px;">Student <b>Records</b></h2>
                    </div>
                </div>
            </div>

            <br>

            <a href="/students/create" class="btn btn-primary" style="margin-bottom: 10px;">Add Student</a>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Course</th>
                        <th scope="col">Year</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Update | Delete</th>
                    </tr>
                </thead>
                <tbody id="datas">
                    <?php foreach($students as $student): ?>
                    <tr>
                        <th scope="row"><?= $student['id']; ?></th>
                        <td><?= $student['first_name']; ?></td>
                        <td><?= $student['last_name']; ?></td>
                        <td><?= $student['student_course']; ?></td>
                        <td><?= $student['student_year']; ?></td>
                        <td><?= $student['student_address']; ?></td>
                        <td><?= $student['student_email']; ?></td>
                        <td><?= $student['student_phone']; ?></td>
                        <td>
                            <a href="/students/edit/<?= $student['id']; ?>" class="btn btn-warning" style="margin-right: 5px;"><i class="bi bi-pencil-fill me-2"></i>Update</a>
                            <a href="/students/delete/<?= $student['id']; ?>" class="btn btn-danger"><i class="bi bi-trash-fill me-2"></i>Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>
