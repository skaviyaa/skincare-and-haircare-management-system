<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

  $servername="localhost";
$uname="root";
$password="";
$dbname="project1";
$db=new mysqli($servername,$uname,$password,$dbname);
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Insert feedback into the database
    $sql = "INSERT INTO feedback(name, email, message) VALUES ('$name', '$email', '$message')";

    if ($db->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";
			 header("Location:feedsuc.html"); 
      exit();
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

    $db->close();
}
?>
