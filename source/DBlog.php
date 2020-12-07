<?php
$user="nimda";
$pw="nimda0410";
$dbname="nimda_db";

?>


<!doctype html>
<head>
    <style>
    
        table, th, td {
         
        color: #585858;
        }

        th{
            border-bottom: 4px solid #585858; 
            font-size: 20px;
            padding: 15px;
        }
        td{
            font-size: 20px;
            border: 1px solid #585858;
            text-align: center;
        }
        
        
    
    </style>

<body>

<?php
  
$connect = mysqli_connect("localhost", $GLOBALS['user'],$GLOBALS['pw'], $GLOBALS['dbname']);


if($connect){

 
    
    
    function Call_times()
    {  
        
        $connect = mysqli_connect("localhost", $GLOBALS['user'],$GLOBALS['pw'], $GLOBALS['dbname']);
        mysqli_select_db($connect,"tk_reserv");
        
        $res = mysqli_query($connect, "SELECT * FROM tk_reserv");
    
        $db_count = mysqli_num_rows($res);
        
        
        for($i=0; $i<$db_count; $i++)
        {
         $row = mysqli_fetch_row($res);

            
            echo '<tr style="width:100px">';
                echo '<th style="width:10px;">'.$row[0].'</th>';
                echo '<th style="width:100px; border-bottom: 2px solid #585858;">'.$row[1].'</th>';
                echo '<th style="width:100px;">'.$row[2].'</th>';
                echo '<th style="width:600px; border-bottom: 2px solid #585858;">'.$row[3].'</th>';
            echo '</tr>';
            
            echo "\n";    
        }
    
    }
    
}
else
{ 
    echo"접속 실패";
}

?>   

    <div class="logs1" style="margin-left: 30px; ">
             <table>
                <tr style="width:100px">
                    <th style="width:130px" >신청 내역</th>
                </tr>
                 <tr>
                    <th style="width:10px;" >  No  </th>
                     <th style="width:100px; border-bottom: 2px solid #585858; ">  성명  </th>
                     <th style="width:100px; ">  요일  </th>
                     <th style="width:600px; border-bottom: 2px solid #585858;">  사유  </th>
                 </tr>
                <?php Call_times(); ?>
                 
                </table>       
                    
                </div>
    
    
    
    </body>
    

    
</head>
