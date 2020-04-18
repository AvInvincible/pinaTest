<?php
$cname = filter_input(INPUT_POST, 'name');
$cemail = filter_input(INPUT_POST, 'email');
$cmessage = filter_input(INPUT_POST, 'message');
if (!empty($cname)){
if (!empty($cname)){
if (!empty($cemail)){   
$host = "localhost:3306";
$dbusername = "ajit.vijayee";
$dbpassword = "@jity050SM";
$dbname = "consumer_query";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO contactus_form (c_name, c_email, c_message)
values ('$cname','$cname', '$cmessage')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Email should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}
}
else{
echo "Message should not be empty";
die();
}
?>