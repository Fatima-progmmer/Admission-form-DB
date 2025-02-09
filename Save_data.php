<?php
// Step 1: Database connection
$servername = "localhost";  // Change if using a remote database
$username = "root";         // Your database username
$password = "";             // Your database password
$database = "admission_db"; // Your database name

$conn = new mysqli($servername, $username, $password, $database);

// Step 2: Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 3: Get form data from POST request
$name = $_POST['Name'];
$father_name = $_POST['father_Name'];
$cnic = $_POST['CNIC'];
$age = $_POST['Age'];
$address = $_POST['Address'];
$email = $_POST['Email'];
$phone = $_POST['Phone_number'];
$gender = $_POST['Gender'];
$dob = $_POST['DOF'];
$matric_marks = $_POST['Matric_marks'];
$inter_marks = $_POST['intermediate_marks'];
$inter_roll_no = $_POST['roll_number'];
$college_name = $_POST['college_name'];
$subject = $_POST['Subject'];
$program = $_POST['Program'];

// Step 4: SQL query to insert data
$sql = "INSERT INTO admissions (
            name, father_name, cnic, age, address, email, phone, gender, dob, 
            matric_marks, inter_marks, inter_roll_no, college_name, subject, program
        ) VALUES (
            '$name', '$father_name', '$cnic', $age, '$address', '$email', '$phone', '$gender', '$dob', 
            $matric_marks, $inter_marks, '$inter_roll_no', '$college_name', '$subject', '$program'
        )";

// Step 5: Execute query and check success
if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Step 6: Close connection
$conn->close();
?>
