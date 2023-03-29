<?php
include("./db.php");

$questions =$_POST["questions"];
$answers =$_POST["answers"];

$sql = "insert into users(questions,answers) values ('$questions','$answers')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo"success Added";
} else {
    echo "error";
}

// echo"$name";
// echo"$questions";
// echo"$answers";

?>