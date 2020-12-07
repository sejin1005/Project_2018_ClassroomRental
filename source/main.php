
<?php
$user="nimda";
$pw="nimda0410";
$dbname="nimda_db";

?>

<!doctype html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    
<style>
    
    
    .back{
        background-size: 120%;
        background-repeat: repeat;
    }
    
    b:hover{
        cursor: pointer;
        color: #f2849e; 
        opacity: 0.9; 
    }

    .Wrap{
        
        margin: 0 auto;
        margin-top: 10px;
        width: 1300px;
        height : 800px;
    }
    
    .Contents{
        position: relative; 
        top: 1%; 
        height : 500px;
        
    }
    h1:hover{
        cursor:default;
        
    }
    b{
        color: #585858;
        font-size: 30px;
    }
    .tabels{
        width: 1000px;
        height : 600px;
        margin-left: 150px;
        border-left: 5px solid #585858;
    }
    
    table, th, td {
         
        color: #585858;
    }
    
    th{
        font-size: 20px;
        padding: 15px;
    }
    td{
        font-size: 20px;
        border: 1px solid #585858;
        text-align: center;
    }
    form { 
         margin: 0 auto; 
         width: 459px; 
     } 
    
    } 
     h1{ 
         font-family: 'Oswald', sans-serif; 
         font-size: 30px; 
         color: #585858; 
     } 
    
     label { 
         display: block; 
         margin-top: 20px; 
         letter-spacing: 2px; 
     } 
    
    input, textarea { 
        
         width: 150px; 
         height: 27px; 
         background-color: #efefef; 
         border-radius: 6px; 
         border: 1px solid #dedede; 
         padding: 10px; 
         margin-top: 3px; 
         font-size: 0.9em; 
         color: #585858; 
     } 
    input:focus, textarea:focus{ 
             border: 1px solid #97d6eb; 
         } 
    textarea{ 
         height: 60px; 
         background-color: #efefef; 
     } 
     #submit{ 
         color: white;
         background-color: #585858;
         width: 127px; 
         height: 48px; 
         text-align: center; 
         border: none; 
         margin-top: 20px; 
         cursor: pointer; 
     } 
     #submit:hover{ 
         color: white;
         background-color: #f2849e; 
         opacity: 0.9; 
     } 
     #cancel { 
         color: white;
         background-color: #585858;
         width: 127px; height: 48px; 
         text-align: center; 
         border: none; 
         margin-top: 20px; 
         cursor: pointer; 
     } 
     #cancel:hover{ 
         color: white;
         background-color: #f2849e; 
         opacity: 0.9; 
     }
    button{
        font-size: 0.8em;
         background-color: #585858; 
        color: #fff; 
         width: 127px; height: 48px; 
         text-align: center; 
         border: none; 
         margin-top: 20px; 
         cursor: pointer; 
    }
    button:hover{
        background-color: #f2849e; 
        color: white; 
        opacity: 0.9; 
    }
    .modal { 
         text-align: center; 
         display: block; 
         position: fixed; 
         left: 0; 
         top: 0; 
         width: 100%; 
         height: 100%; 
         background-color: rgba(0, 0, 0, 0.5); 
         opacity: 0; 
         visibility: hidden; 
         transform: scale(1.1); 
         transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s; 
     } 
     .modal-content { 
         position: absolute; 
         top: 50%; 
         left: 50%; 
         transform: translate(-50%, -50%); 
         background-color: white; 
         padding: 1rem 1.5rem; 
         width: 500px; 
         height: 350px; 
         border-radius: 0.5rem; 
        
     } 
     .close-button { 
         float: right; 
         width: 1.5rem; 
         line-height: 1.5rem; 
         text-align: center; 
         cursor: pointer; 
         border-radius: 0.25rem; 
         background-color: lightgray; 
     } 
     .close-button:hover { 
         background-color: darkgray; 
     } 
     .show-modal { 
         opacity: 1; 
         visibility: visible; 
         transform: scale(1.0); 
         transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s; 
     } 
    .RoomInfo
    {
        position: absolute; 
         top: 5%; 
         left: 5%; 
    }
    .RoomInfo2
    {
        position: absolute; 
        top: 45%;
        left: 50%; 
    }
    iframe{
        display: none;
        border: none;
    }
    
    .Blocks{
        position: fixed; 
        left: 0; 
        top: 0; 
        width: 100%; 
        height: 60px; 
        background-color: #585858; 
    }
    .BlockContent{
        margin-top: 20px;
        margin-left: 50px;
        color: white;
        font-family: fantasy;
    }
    .TopInfo{
        margin-left: 85%;
        font-family: fantasy;
        color: white; 
        text-decoration: none;
    }
</style>
    

</head>
<body  class="back">
    
<?php
  
$connect = mysqli_connect("localhost",$user,$pw);
mysqli_select_db($connect,"nimda_db");


    
if($connect){

function Clear_tables()
    {
        for($i=1 ; $i<10; $i++)
        {
            echo 'document.getElementById("M'.$i.'").innerHTML=""'."\n";
            echo 'document.getElementById("T'.$i.'").innerHTML=""'."\n"; 
            echo 'document.getElementById("W'.$i.'").innerHTML=""'."\n";  
            echo 'document.getElementById("t'.$i.'").innerHTML=""'."\n";  
            echo 'document.getElementById("F'.$i.'").innerHTML=""'."\n";  
            echo 'document.getElementById("S'.$i.'").innerHTML=""'."\n";  
        }

    }    
 
    
    
    function Call_times($no)
    {  
        
        $connect = mysqli_connect("localhost", $GLOBALS['user'],$GLOBALS['pw']);
        mysqli_select_db($connect,"nimda_db");
        
        $res = mysqli_query($connect, "SELECT * FROM tk_table");
        $db_count = mysqli_num_rows($res);
        
        
        for($i=0; $i<$db_count; $i++)
        {
         $row = mysqli_fetch_row($res);

            if($no==$row[3])
            {
                for($j=0;  $j<strlen($row[2]);  $j++)
                    { 
                        #echo $row[2][$j].$row[2][$j+1]."\n";
                        
                        echo 'document.getElementById("'.$row[2][$j].$row[2][$j+1].'").innerHTML="'.$row[1].'"';  
                        echo "\n";    
                        $j++;
                    }
                
                echo "\n";    
            }
        }
    
    }
    
    
    
}
else
{ 
    echo"접속 실패";
}

?>   
    
 
<div class="Wrap" >
    <div class="Blocks"> 
        <div class="BlockContent"> 
            
            <h1>하루하루 <a href="././days2/top.php" class="TopInfo">Top</a></h1> 
         
        
        </div>    
    </div>
    <div class="Contents" >
        <div style="margin-top: 50px; margin-left: 50px;">
            
            <br>
            
            <h1 style="margin-left: 200px;"d="ROOM" > </h1>
            <div  class="RoomInfo">
                <h1 style="color: #3c424d; ">강의실</h1>
                
                <b id="flow6" onclick="sel_Flow(0)">6층</b><br>
                <b id="flow7" onclick="sel_Flow(1)">7층</b><br>
                <b id="flow8" onclick="sel_Flow(2)">8층</b>
                
                <div class="RoomInfo2">
                    <b onclick="sel_room(id)" id="Room1"></b><br>
                    <b onclick="sel_room(id)" id="Room2"></b><br>
                    <b onclick="sel_room(id)" id="Room3"></b><br>
                    <b onclick="sel_room(id)" id="Room4"></b>
                </div>
            </div>
           
            <div class="tabels">
                <iframe id="logtable" style="" src="http://nimda.party/u/xornrkd123/DBlog.php" height="597" width="920"></iframe>
                <table id="timetable">
                    <tr style="width:50px">
                        <th style="width:100px"></th>
                        <th style="width:100px">월</th>
                        <th style="width:100px">화</th>
                        <th style="width:100px">수</th>
                        <th style="width:100px">목</th>
                        <th style="width:100px">금</th>
                        <th style="width:100px">토</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td id="M1"></td>
                        <td id="T1"></td>
                        <td id="W1"></td>
                        <td id="t1"></td>
                        <td id="F1"></td>
                        <td id="S1"></td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td id="M2"></td>
                        <td id="T2"></td>
                        <td id="W2"></td>
                        <td id="t2"></td>
                        <td id="F2"></td>
                        <td id="S2"></td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td id="M3"></td>
                        <td id="T3"></td>
                        <td id="W3"></td>
                        <td id="t3"></td>
                        <td id="F3"></td>
                        <td id="S3"></td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td id="M4"></td>
                        <td id="T4"></td>
                        <td id="W4"></td>
                        <td id="t4"></td>
                        <td id="F4"></td>
                        <td id="S4"></td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td id="M5"></td>
                        <td id="T5"></td>
                        <td id="W5"></td>
                        <td id="t5"></td>
                        <td id="F5"></td>
                        <td id="S5"></td>
                    </tr>
                    <tr>
                        <th>6</th>
                        <td id="M6"></td>
                        <td id="T6"></td>
                        <td id="W6"></td>
                        <td id="t6"></td>
                        <td id="F6"></td>
                        <td id="S6"></td>
                    </tr>
                    <tr>
                        <th>7</th>
                        <td id="M7"></td>
                        <td id="T7"></td>
                        <td id="W7"></td>
                        <td id="t7"></td>
                        <td id="F7"></td>
                        <td id="S7"></td>
                    </tr>
                    <tr>
                        <th>8</th>
                        <td id="M8"></td>
                        <td id="T8"></td>
                        <td id="W8"></td>
                        <td id="t8"></td>
                        <td id="F8"></td>
                        <td id="S8"></td>
                    </tr>
                    <tr>
                        <th>9</th>
                        <td id="M9"></td>
                        <td id="T9"></td>
                        <td id="W9"></td>
                        <td id="t9"></td>
                        <td id="F9"></td>
                        <td id="S9"></td>
                    </tr>
                    
                </table>
                
            </div>
            <button style="margin-left: 10px;" class="trigger">예약 신청</button>
            <br>
            <button id="btn1" style="margin-left: 10px;" onclick="Logsel()">신청 내역</button>


        </div>
    </div>
    
    <!-- 팝업 될 레이어 --> 
     <div class="modal"> 
         <div class="modal-content"> 
             <span class="close-button">&times;</span> 
             <h1 class="title">예약 신청</h1> 
             <form action="DB.php" method="POST"> 
               <label for="성명">성명&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;요일</label> 
               <input type="text" name="name" placeholder="성명" required="required"> 
               <input style="margin-left:105px;" type="text" name="day" placeholder="요일" required="required"> 
               <label>신청 사유 (요일 포함)</label> 
               <textarea style="width: 439px; " name="message" placeholder="사유 " required="required"></textarea> 
               <input type="button" id="cancel" value="취소"> 
               <input type="submit" id="submit" value="보내기"> 
                 
                
             </form> 
         </div> 
     </div>
    
    
    

<br>


    
</div>

<script >
    var btn_switch = 1;
    var room_data;
    var modal = document.querySelector(".modal"); 
    var trigger = document.querySelector(".trigger"); 
    var closeButton = document.querySelector(".close-button"); 
    var cancelButton = document.querySelector("#cancel");
    function toggleModal() { 
             modal.classList.toggle("show-modal"); 
         }
    function windowOnClick(event) { 
                 if (event.target === modal) { 
                     toggleModal(); 
                 } 
             }

    trigger.addEventListener("click", toggleModal); 
    closeButton.addEventListener("click", toggleModal); 
    cancel.addEventListener("click", toggleModal); 
    window.addEventListener("click", windowOnClick);

    function Logsel()
    {//숨기기부터 
        if(btn_switch == 1)
            {
                $("#btn1").html("강의실 시간표");
                $("#timetable").css("display","none");
                $("#logtable").css("display","block")
            }
        else if(btn_switch == -1)
            {
                $("#btn1").html("신청 내역");
                $("#timetable").css("display","block");
                $("#logtable").css("display","none");;
                
            }
        btn_switch = btn_switch*-1;
    }
    
    function sel_Flow(temp)
    {
        if(temp==0)
        {   
            $("#flow6").html("6층<br><br>");
            //$("#flow6").css("color","#00f");
            
            $("#flow7").html("7층");
            $("#flow8").html("8층");
            $("#Room1").html("616");
            $("#Room2").html("617");
            $("#Room3").html("");
            $("#Room4").html("");
            
        }    
        if(temp==1)
        {
            $("#flow6").html("6층");
            $("#flow7").html("7층<br><br><br><br>");
           // $("#flow7").css("color","#00f");
            $("#flow8").html("8층");
            $("#Room1").html("716");
            $("#Room2").html("717");
            $("#Room3").html("718");
            $("#Room4").html("719");
        }    
        if(temp==2)
            {
                
            $("#flow6").html("6층");
            $("#flow7").html("7층");
            $("#flow8").html("8층<br><br><br><br><br><br><br>");    
            //$("#flow8").css("color","#00f");
            $("#Room1").html("816");
            $("#Room2").html("817");
            $("#Room3").html("818");
            $("#Room4").html("819");
        }    
    }
    
    
    function sel_room(temp)
    {   
         <?php
              Clear_tables();
            ?>
        room_data = document.getElementById(temp).innerHTML;
        $("#ROOM").html(room_data);
        
        if(room_data==616)
            { 
                <?php
                 Call_times(616);
                ?>
            }
        if(room_data==617)
            { 
                <?php
              Call_times(617);
                ?>
            }
        
        if(room_data==716)
            { 
                <?php
              Call_times(716);
                ?>
            }
        if(room_data==717)
            { 
                <?php
              Call_times(717);
                ?>
            }
        if(room_data==718)
            { 
                <?php
              Call_times(718);
                ?>
            }
        if(room_data==719)
            { 
                <?php
              Call_times(719);
                ?>
            }
        if(room_data==816)
            { 
                <?php
              Call_times(816);
                ?>
            }
        if(room_data==817)
            { 
                <?php
              Call_times(817);
                ?>
            }
        
    }
</script>

    
</body>

</html>