<?php

				$con = mysql_connect("127.0.0.1","root","admin");
				if(!$con){
					die("Could not connect the DB".mysql_errno());
				}
				if(!mysql_select_db("cyk")){
					die("Could not choose the DB".mysql_errno());
				}
?>