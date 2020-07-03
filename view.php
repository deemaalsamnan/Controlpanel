<?php
$link = mysqli_connect("127.0.0.1", "root", "", "controlpanel");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

 ;


 


if(isset($_POST['button1'])) { 
    $sql = " INSERT INTO moves (num, move) VALUES ('', 'f') ";

if ($link->query($sql) === TRUE) {
  echo "F";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
} 
if(isset($_POST['button2'])) { 
    $sql = " INSERT INTO moves (num, move) VALUES ('', 'l') ";

if ($link->query($sql) === TRUE) {
  echo "L";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
} 
if(isset($_POST['button3'])) { 
    $sql = " INSERT INTO moves (num, move) VALUES ('', 'S') ";

if ($link->query($sql) === TRUE) {
  echo "S";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
} 
if(isset($_POST['button4'])) { 
    $sql = " INSERT INTO moves (num, move) VALUES ('', 'R') ";

if ($link->query($sql) === TRUE) {
  echo "R";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
} 
if(isset($_POST['button5'])) { 
    $sql = " INSERT INTO moves (num, move) VALUES ('', 'B') ";

if ($link->query($sql) === TRUE) {
  echo "B";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
} 

   mysqli_close($link);
   ?> 