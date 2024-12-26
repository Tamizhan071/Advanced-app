<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Add Form</title>
    <style>
        .submit-link {
            display: inline-block;
            padding: 10px 20px;
            /* color: white; */
            background-color:azure;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }

        .submit-link:hover {
            background-color:burlywood;
        }
    </style>
    <!-- <script>
        function submitForm() {
            document.getElementById("studentForm").submit();
        }
    </script> -->
</head>
<body>
    <h2>Student Add Form</h2>
    
    <form id="studentForm" action="studentform.php" method="post">
        <label for="rollno">Roll Number:</label><br>
        <input type="text" id="rollno" name="rollno" required><br><br>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <!-- <a href="home.php" class="submit-link" onclick="submitForm()">Submit</a> -->
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    // echo $rollno;
    if (empty($rollno)) {
        echo "Please enter roll number";
    } elseif (empty($name)) {
        echo "Please enter name";
    } elseif (empty($email)) {
        echo "Please enter email";
    } else {
        try {
             student (student_rollno, student_name, student_email) VALUES ('$rollno', '$name', '$email')";
            mysqli_query($conn, $sql);
            echo "You are registered";
        } catch (mysqli_sql_exception $e) {
             echo "Enter correct details";
        }
    }
    mysqli_close($conn);
}
?>
