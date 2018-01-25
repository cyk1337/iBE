<!-- insert_book.php -->
<?php
require_once('mysql.con.php');
// var_dump($_POST);
$sql="insert into ibe_crypt(un_book_name,un_book_author,un_phone,un_name) VALUES($_POST[book_name],$_POST[book_author],$_POST[user_mobile],$_POST[user_name]);";
if(!mysql_query($sql)){
	die('Could not insert'.mysql_errno());
}else{
		header("refresh:3;url=../../../ibe/admin.php");
				echo '发布成功!<br/>正在加载，请稍等...<br>三秒后自动跳转';
}

?>