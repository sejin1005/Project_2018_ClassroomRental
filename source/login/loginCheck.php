<?php

$temp=array(
    array("201401903", "rkdxorn"),
    array("201401950", "thsgywjd"),
    array("123456789", "123"),
);

if(!empty($_POST["id"])&&!empty($_POST["pw"]))
    {
       #echo $_POST["id"]."님 환영합니다";
        
        for($i=0; $i<count($temp); $i++)
        {
            if($_POST["id"]==$temp[$i][0]&&$_POST["pw"]==$temp[$i][1])
            {
                echo "<script>alert(\"".$_POST['id']."님 환영합니다.\");</script>";
                echo "<meta http-equiv='refresh' content='0; url=http://nimda.party/u/xornrkd123/days2/top.php'>";     
                break;
            }
        }
    

    }
else
{   echo "<script>alert(\"아이디와 비밀번호를 입력해주세요.\");</script>";
    echo "<meta http-equiv='refresh' content='0; url=http://nimda.party/u/xornrkd123/login/login.php'>"; 
 
}
    

#alert("아이디와 비밀번호를 입력해주세요.")
?>