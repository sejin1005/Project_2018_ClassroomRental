<?php
$user="nimda";
$pw="nimda0410";
$dbname="nimda_db";

?>

<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$connect = mysqli_connect("localhost", $GLOBALS['user'],$GLOBALS['pw'], $GLOBALS['dbname']);
       
    

   if(!empty($_POST["name"])&&!empty($_POST["day"])&&!empty($_POST["message"]))
    {
        $name = test_input($_POST["name"]);
        $day = test_input($_POST["day"]);
        $message = test_input($_POST["message"]);
        $sql = "INSERT INTO tk_reserv (name, day, reason)VALUES ('".$name."', '".$day."', '".$message."')";
        
        if (mysqli_query($connect, $sql)) {
            echo "New record created successfully";
            
          echo "<meta http-equiv='refresh' content='0; url=http://nimda.party/u/xornrkd123/main.php'>"; 
         } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }

    }
    
?>  