<?php
    $servername="sql205.epizy.com";
    $dbname="epiz_23931439_dbSite";
    $username="epiz_23931439";
    $password="whqIujltrg";
    $port=3306;
    try {
        $db = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8", $username, $password);
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$stmt = $db->prepare("SELECT * FROM Pages WHERE page_id=?;");
        //$stmt->execute(array("1")); 
        //$result = $stmt->fetch();
        //echo $result["page_title"];

    }
    catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    


?>