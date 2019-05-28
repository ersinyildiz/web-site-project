<?php
    include_once('../functions/dbconnect.php');
    $id=$_POST["id"];
    $title=$_POST["title"];
    $content=$_POST["content"];
    if($id<7){
        $query = $db->prepare("UPDATE Pages SET page_content=:content WHERE page_id=:id");
        $stmt = $query->execute(array(":content"=>$content,":id"=>$id));
    }
    else if($id==8){
        $query = $db->prepare("UPDATE Accounts SET email=:content WHERE account_id=1");
        $stmt = $query->execute(array(":content"=>$content));
    }
    header("location:login_success.php");
?>