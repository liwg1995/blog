<?php
	$link = mysql_connect("127.0.0.1", "root", "");
	if ($link) {
		mysql_query("set names 'utf8'");
		mysql_select_db("php_blog");
		/*$sql =  "insert into Test values("
				.mysql_real_escape_string(3).",'".mysql_real_escape_string("b")."')";*/
		/*$sql = sprintf("select * from menu_type");// where name='%s'", mysql_real_escape_string("a"));
		$result = mysql_query($sql);
		while ($rs = mysql_fetch_object($result)) {
			echo $rs->id.$rs->name_de."<br />";
		}*/
	}
?>