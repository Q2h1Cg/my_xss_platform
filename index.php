<?php  

if ($_POST['user']=='xss' && $_POST['password']=='xss'){

    $conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
    if (!$conn){
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db(SAE_MYSQL_DB, $conn);
    $result = mysql_query("SELECT * FROM cookies");

    echo "<table border='1'>
    <tr>
    <th>location</th>
    <th>cookie</th>
    </tr>";

    while ($row = mysql_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['location'] . "</td>";
        echo "<td>" . $row['cookie'] . "</td>";
        echo "</tr>";
    }
    mysql_close($conn);

}
else{

header("Location: login.html");

}


?>