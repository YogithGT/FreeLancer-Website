<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Recruiter_Registration";
try {
    $name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$freein = $_POST['freein'];
	$phnumber = $_POST['phnumber'];
	$description = $_POST['description'];
	$sql = "INSERT INTO `recruiter_registration`(`name`, `age`, `email`, `freein`, `phnumber`, `description`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

