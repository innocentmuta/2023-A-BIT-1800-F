<?php
include 'includes/header.php';
include 'includes/db.php';

$sql = "SELECT * FROM patients";
$result = $conn->query($sql);
?>

<h2>Patients List</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Admission Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['gender'] . "</td>
                        <td>" . $row['dob'] . "</td>
                        <td>" . $row['contact_number'] . "</td>
                        <td>" . $row['address'] . "</td>
                        <td>" . $row['admission_date'] . "</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='7' class='text-center'>No patients found.</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php
$conn->close();
include 'includes/footer.php';
?>
