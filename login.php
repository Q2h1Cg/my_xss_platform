<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">      
<html xmlns="http://www.w3.org/1999/xhtml">      
<head>      
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">         
</head>      
    
<body>
  <center><h1>MY XSS PLATFORM</h1></center>
  <hr/>
<table width="600" border="0" align="center" style="font-family:Verdana,宋体;font-size: 12px;">    
<form action="check.php" method="post" onSubmit="return chkinput(this)">    
  <tr>    
    <td width="160" height="25" align="right"> </td>    
    <td width="400"><span class="STYLE1"></span></td>    
  </tr>    
  <tr>    
    <td height="25" align="right">User Name:&nbsp</td>    
    <td> <input type="text" name="name" size="40" maxlength="80" value="" class="inputcss" />     
      <span class="STYLE1"> </span></td>    
  </tr>    
  <tr>    
    <td height="25" align="right">Password:&nbsp</td>    
    <td>       <span class="STYLE1">  
      <input type="password" name="password" size="40" maxlength="80" value="" class="inputcss" />  
</span></td>    
  </tr>    
  
  <tr>    
    <td colspan="2" align="center"><input type="submit" name="submit" value="登录" class="buttoncss" />  <input type="reset" value="重置" class="buttoncss"></td>    
  </tr>    
  
</form>    
</table>
</body>      
</html> 