<?php
	 $str = $_POST["Text"];
	 $file = fopen("firstSSID","w"); //開啟檔案
	 fwrite($file,$str);
	 fclose($file);
?>
