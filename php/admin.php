<?php
session_start();
$param = parse_ini_file('db.ini');



if(isset($login) && !(empty($login)))
{
        $query ="select * from admin where user = '$login' and pass = '$mdp'";
        $result = mysql_query($query);
        if( $tab = mysql_fetch_array($result) )
        {
                $erreur=0;
                session_unregister("current");
                $current="admin";
                session_register("current");
                header("location: panel.php");
                
        }
        else {  $erreur=1;
                session_unregister("current");  }
}
?>
<html>
<head>
<title>Admin panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" topmargin="0">
<div align="center">
  <p> </p>
  <form action="panel.php?" method="post" name="form" id="form">
    <div align="left">
<p align="center" class="shdow"> </p>
    </div>
    <div align="center"> 
      <table width="300" border="1" cellpadding="0" cellspacing="0" bordercolor="#666666">
        <tr> 
          <td width="48%" height="24" bgcolor="#99CCFF" class="font"> 
            <div align="center"><strong><font color="#333333" size="3" face="Verdana, Arial, Helvetica, sans-serif">login</font></strong></div></td>
        </tr>
        <tr> 
          <td height="36" bgcolor="#0066CC" class="fontsm"> 
            <div align="center"><span class="font"> 
              <input name="adminname" type="text" id="adminname" size="20" maxlength="20">
              </span></div></td>
        </tr>
        <tr> 
          <td height="19" bgcolor="#99CCFF" class="fontsm"> 
            <div align="center"><span class="font"><font color="#FF0000"><strong><font color="#333333" size="3" face="Verdana, Arial, Helvetica, sans-serif">Mot de passe</font></strong></font> 
              </span></div></td>
        </tr>
        <tr> 
          <td height="34" bgcolor="#0066CC" class="font"> 
            <div align="center"><font color="#FF0000"> 
              <input name="password" type="password" id="password" size="20" maxlength="20">
              </font></div></td>
        </tr>
        <tr> 
          <td height="73" bgcolor="#999999" class="font"> <div align="center"> 
              <div align="center"><font color="#FF0000"><br>
                <input type="submit" name="Submit" value="Login">
                <br>
                </font></div>
              <div align="center"><font color="#FF0000" size="1" face="Verdana, Arial, Helvetica, sans-serif"> 
                <strong> 
                <?
   if($erreur)
     {  echo"Login ou mot de passe non valide";}
?>
                </strong></font></div>
              <font color="#FF0000"><strong><br>
              </strong></font></div></td>
        </tr>
      </table>
      <p> </p>
    </div>
    <p> </p>
    <p><br>
    </p>
  </form>
  <p>  </p>
</div>
</body>
</html>
<?
    mysql_close();
?>