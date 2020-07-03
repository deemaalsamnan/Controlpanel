<!DOCTYPE html> 
<html> 
      
<head> 
    <title> 
        connecting control panel to DB and other php view page 
    </title> 
</head> 
  
<body style="text-align:center;"> 
      
    <h1 style="color:green;"> 
        Control panel 
    </h1> 
    
  
   
    <?php
$link = mysqli_connect("127.0.0.1", "root", "", "controlpanel");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success connection to your DB!" ;


mysqli_close($link);
?>
      
    <form method="post" action="view.php"> 
        <input type="submit" name="button1"
                value="Forward"/> 
          
        <input type="submit" name="button2"
                value="Left"/> 

        <input type="submit" name="button3"
                value=" STOP "/> 
        <input type="submit" name="button4"
                value="Right"/> 
        <input type="submit" name="button5"
                value="Backward"/> 
    </form> 

    <h3> By : Deema alsamnan </h3> 
</head> 
  
</html> 