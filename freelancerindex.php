<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "Freelancer_index";
try {
    $name = $_POST['name'];
	 $email = $_POST['email'];
	 $message = $_POST['message'];
	 $sql = "INSERT INTO `freelancer_contact`(`name`, `email`, `message`) VALUES ([value-1],[value-2],[value-3])";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
