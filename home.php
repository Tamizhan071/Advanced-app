<?php
include("database.php");
?>
<?php
// Fetch all student details
$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
     <link rel="stylesheet" href="home.css">
</head>
<body>
    <h2 style="text-align: center;">Student Details</h2>
    <a href="studentform.php" class="button">Add Student</a>
        <table>
            <thead>
                <tr>
                    <th>Roll Number</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['student_rollno']; ?></td>
                        <td><?php echo $row['student_name']; ?></td>
                        <td><?php echo $row['student_email']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    

    <?php
    // Close connection
    $conn->close();
    ?>
</body>
</html>
