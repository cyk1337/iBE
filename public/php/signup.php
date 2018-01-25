<!-- signup.php -->
<?php
require_once('mysql.con.php');
// var_dump($_POST);
// $uname=$_POST["username"];
// $pwd=md5($_POST["password"]);
// echo $uname;
// echo $pwd;
// $sql = "INSERT INTO 'ibe_user'(username,password) Values('".$uname."','".$pwd."');";
 $sql = "INSERT INTO ibe_user(username,password) Values('$_POST[username]',md5('$_POST[password]'))";
			if(!mysql_query($sql)){
				die("Could not insert".mysql_errno());
			}
			else{
				
				echo "success";
				// echo "<script type='text/javascript'>alert(1);</script>";
				// header('location:../../../ibe/admin.php');

				header("refresh:3;url=../../../ibe/admin.php");
				echo '注册成功!<br/>正在加载，请稍等...<br>三秒后自动跳转';
			}


?>
