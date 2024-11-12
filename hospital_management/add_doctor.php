<?php
include 'includes/header.php';
?>

<h2>Add New Doctor</h2>
<form action="add_doctor.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Doctor Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="specialty" class="form-label">Specialty</label>
        <input type="text" class="form-control" id="specialty" name="specialty" required>
    </div>
    <div class="mb-3">
        <label for="contact_number" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="contact_number" name="contact_number" required>
    </div>
    <div class="mb-3">
       
