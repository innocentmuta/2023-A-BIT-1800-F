<?php
include 'includes/header.php';
?>

<h2>Add New Patient</h2>
<form action="add_patient.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Patient Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-select" id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob" required>
    </div>
    <div class="mb-3">
        <label for="contact_number" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="contact_number" name="contact_number" required>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" id="address" name="address" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Patient</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'includes/db.php';
    
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];

    $sql = "INSERT INTO patients (name, gender, dob, contact_number, address) 
            VALUES ('$name', '$gender', '$dob', '$contact_number', '$address')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success mt-3'>New patient added successfully!</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
    }
}
?>

<?php
include 'includes/footer.php';
?>
