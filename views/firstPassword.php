<?php
	 $str = $_POST["Text"];
	 $file = fopen("firstPassword","w"); //開啟檔案
	 fwrite($file,$str);
	 fclose($file);
?>
